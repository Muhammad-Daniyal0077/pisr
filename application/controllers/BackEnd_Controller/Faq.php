<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->library('upload');


		// Check if user is logged in
		if (!$this->session->userdata('logged_in')) {
			redirect('login'); // Redirect to login if not logged in
		}
	}
	//home page
	public function index()
	{
		// Query the database to get data from the 'faculty' table
		$query = $this->db->get('faqs'); // Replace 'faculty' with your actual table name
		$data['faqs'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/faq';
		$data['filename'] = 'index';
		$this->load->view('Admin', $data);
	}
	public function create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['question']            = $this->input->post('question');
			$data_Save['answer']            = $this->input->post('answer');
			$data_Save['status']                = $this->input->post('status');

			if($this->db->insert('faqs',$data_Save)){
				redirect('admin/faqs/');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$data['path'] = 'Back_End/faq';
			$data['filename'] = 'create';
			$this->load->view('Admin', $data);
		}
	}
	public function edit_Faq($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('edit_id');
			$data_Save['question']            = $this->input->post('question');
			$data_Save['answer']            = $this->input->post('answer');
			$data_Save['status']                = $this->input->post('status');



			if($this->db->update('faqs',$data_Save,$data_id)){
				redirect('admin/faqs/');
			}else{
				redirect('admin/faqs/');
			}
		}
		else {
			$data['faqs_edit']=$this->db->get_where('faqs',array('id' => $Get));
			$data['path'] = 'Back_End/faq';
			$data['filename'] = 'edit';
			$this->load->view('Admin', $data);
		}
	}
	public function delete_faqs()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('faqs', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}


}
