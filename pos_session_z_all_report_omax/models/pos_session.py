# -*- coding: utf-8 -*-
from datetime import datetime
from dateutil import tz
import pytz
from odoo import fields, models, api
from odoo.tools.misc import DEFAULT_SERVER_DATETIME_FORMAT
from collections import Counter
import json, ast
from itertools import groupby
from operator import itemgetter

class PosConfig(models.Model):
    _inherit = 'pos.config'

    omax_session_z_report = fields.Boolean(string='Session Z Report ', help='This will allow to print Session Z Report directly from POS screen')

class PosSession(models.Model):
    _inherit = 'pos.session'
    
    def action_session_z_report(self):
        return self.env.ref('pos_session_z_all_report_omax.action_report_session_z').report_action(self)
    
    def get_current_datetime(self):
        now = datetime.now()
        today = str(now).split('.')[0]
        tz = self.env.user.partner_id.tz and pytz.timezone(self.env.user.partner_id.tz) or pytz.utc
        dt = pytz.utc.localize(datetime.strptime(str(today), "%Y-%m-%d %H:%M:%S")).astimezone(tz)
        dt_split = str(str(dt).split('+')[0])
        return dt_split
        
    def get_opened_date(self):
        tz = self.env.user.partner_id.tz and pytz.timezone(self.env.user.partner_id.tz) or pytz.utc
        dt = pytz.utc.localize(datetime.strptime(str(self.start_at), "%Y-%m-%d %H:%M:%S")).astimezone(tz)
        dt_split = str(str(dt).split('+')[0])
        return dt_split
        
    def get_closed_date(self):
        if self.stop_at:
            tz = self.env.user.partner_id.tz and pytz.timezone(self.env.user.partner_id.tz) or pytz.utc
            dt = pytz.utc.localize(datetime.strptime(str(self.stop_at), "%Y-%m-%d %H:%M:%S")).astimezone(tz)
            dt_split = str(str(dt).split('+')[0])
            return dt_split
        
    def get_session_amount_data(self):
            pos_order_ids = self.env['pos.order'].search([('session_id', '=', self.id)])
            discount_amount = 0.0
            taxes_amount = 0.0
            total_sale_amount = 0.0
            total_gross_amount = 0.0
            sold_product = {}
            session_wise_product = {}
            for pos_order in pos_order_ids:
                currency = pos_order.session_id.currency_id
                total_gross_amount += pos_order.amount_total
                for line in pos_order.lines:
                    if line.product_id.display_name in session_wise_product:
                        update_details = session_wise_product[line.product_id.display_name]
                        # update_details.update({'qty': update_details.get('qyt') + line.qty,
                        #                         'price' :
                        update_details['qty'] += line.qty
                        update_details['price'] += line.price_subtotal_incl

                    else:
                        vals = {'qty' : line.qty , 'price' : line.price_subtotal_incl }
                        session_wise_product[line.product_id.display_name] = vals
                    if line.product_id.pos_categ_id and line.product_id.pos_categ_id.name:
                        if line.product_id.pos_categ_id.name in sold_product:
                            sold_product[line.product_id.pos_categ_id.name] += line.qty
                        else:
                            sold_product.update({line.product_id.pos_categ_id.name: line.qty})
                    else:
                        if 'undefine' in sold_product:
                            sold_product['undefine'] += line.qty
                        else:
                            sold_product.update({'undefine': line.qty})
                    if line.tax_ids_after_fiscal_position:
                        line_taxes = line.tax_ids_after_fiscal_position.compute_all(line.price_unit * (1 - (line.discount or 0.0) / 100.0), currency, line.qty, product=line.product_id, partner=line.order_id.partner_id or False)
                        for tax in line_taxes['taxes']:
                            taxes_amount += tax.get('amount', 0)
                    if line.discount > 0:
                        discount_amount += (((line.price_unit * line.qty) * line.discount) / 100)
                    if line.qty > 0:
                        total_sale_amount += line.price_unit * line.qty

            return {
                'total_sale': total_sale_amount,
                'discount': discount_amount,
                'tax': taxes_amount,
                'products_sold': sold_product,
                'total_gross': total_gross_amount - taxes_amount - discount_amount,
                'final_total': total_gross_amount,
                'session_wise_product' :session_wise_product
            }
    
    def get_taxes_data(self):
        order_ids = self.env['pos.order'].search([('session_id', '=', self.id)])
        all_orders_taxes_list = []
        for order in order_ids:
            currency = order.pricelist_id.currency_id
            for order_line in order.lines:
                taxes = order_line.tax_ids.filtered(lambda t: t.company_id.id == order_line.order_id.company_id.id)
                fiscal_position_id = order_line.order_id.fiscal_position_id
                if fiscal_position_id:
                    taxes = fiscal_position_id.map_tax(taxes, order_line.product_id, order_line.order_id.partner_id)
                price = order_line.price_unit * (1 - (order_line.discount or 0.0) / 100.0)
                taxes = taxes.compute_all(price, order_line.order_id.pricelist_id.currency_id, order_line.qty, product=order_line.product_id, partner=order_line.order_id.partner_id or False)['taxes']
                all_orders_taxes_list.append(taxes)
        
        order_tax_dict_list = []
        for tax_list in all_orders_taxes_list:
            for order_tax in tax_list:
                order_tax_dict_list.append(order_tax)
                
        tax_result = []
        second_result = sorted(order_tax_dict_list,key = itemgetter('name'))
        for key, value in groupby(second_result,key = itemgetter('name')):
            tax_temp_dict = {'name': key}
            total_temp_tax_amount = 0
            for k in value:
                total_temp_tax_amount += k['amount']
            tax_temp_dict.update({'amount': total_temp_tax_amount})
            tax_result.append(tax_temp_dict)
        
        tax_result = sorted(tax_result, key = lambda i: i['name'],reverse=True)
        return tax_result
    
    
    def get_pricelist(self):
        pos_order_ids = self.env['pos.order'].search([('session_id', '=', self.id)])
        pricelist = {}
        for pos_order in pos_order_ids:
            if pos_order.pricelist_id.name:
                if pos_order.pricelist_id.name in pricelist:
                    pricelist[pos_order.pricelist_id.name] += pos_order.amount_total
                else:
                    pricelist.update({pos_order.pricelist_id.name : pos_order.amount_total})
            else:
                if 'undefine' in pricelist:
                    pricelist['undefine'] += pos_order.amount_total
                else:
                    pricelist.update({'undefine': pos_order.amount_total})
        return pricelist
        
    def get_pricelist_qty(self, pricelist):
        if pricelist:
            qty_pricelist = 0
            pricelist_obj_ids = self.env['product.pricelist'].search([('name','=', str(pricelist))])
            if pricelist_obj_ids:
                for pricelist_obj in pricelist_obj_ids:
                    pos_order_ids = self.env['pos.order'].search([('session_id', '=', self.id),('pricelist_id.id','=',pricelist_obj.id)])
                    qty_pricelist = len(pos_order_ids)
            else:
                if pricelist == 'undefine':
                    pos_order_ids = self.env['pos.order'].search([('session_id', '=', self.id),('pricelist_id','=',False)])
                    qty_pricelist = len(pos_order_ids)
            return int(qty_pricelist)
            
    def get_payment_data(self):
        pos_payment_ids = self.env["pos.payment"].search([('session_id', '=', self.id)]).ids
        if pos_payment_ids:
            self.env.cr.execute("""
                SELECT ppm.name, sum(amount) total
                FROM pos_payment AS pp,
                     pos_payment_method AS ppm
                WHERE pp.payment_method_id = ppm.id
                AND pp.id IN %s
                GROUP BY ppm.name;
            """, (tuple(pos_payment_ids),))
            payments = self.env.cr.dictfetchall()
        else:
            payments = []
        return payments
        
    def get_payment_qty(self, payment_method):
        qty_payment_method = 0
        if payment_method:
            orders = self.env['pos.order'].search([('session_id', '=', self.id)])
            st_line_obj = self.env["account.bank.statement.line"].search([('pos_statement_id', 'in', orders.ids)])
            if len(st_line_obj) > 0:
                res = []
                for line in st_line_obj:
                    res.append(line.journal_id.name)
                res_dict = ast.literal_eval(json.dumps(dict(Counter(res))))
                if payment_method in res_dict:
                    qty_payment_method = res_dict[payment_method]
        return int(qty_payment_method)

        
