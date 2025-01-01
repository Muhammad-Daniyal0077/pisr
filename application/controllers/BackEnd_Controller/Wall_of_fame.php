<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wall_of_fame extends CI_Controller
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
		$query = $this->db->get('fbise'); // Replace 'faculty' with your actual table name
		$data['fbise'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/Wall_of_fame';
		$data['filename'] = 'fbise_index';
		$this->load->view('Admin', $data);
	}
	public function fbise_create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['title']            = $this->input->post('title');
			$data_Save['head']            = $this->input->post('head');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$staff_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/fbise/' . $staff_img);
				$data_Save['image']   = $staff_img;
			}
			if($this->db->insert('fbise',$data_Save)){
				redirect('admin/wall-of-fame/fbise');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$data['path'] = 'Back_End/Wall_of_fame';
			$data['filename'] = 'fbise_create';
			$this->load->view('Admin', $data);
		}
	}
	public function fbise_edit($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('edit_id');
			$data_Save['title']            = $this->input->post('title');
			$data_Save['head']            = $this->input->post('head');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$staff_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/fbise/' . $staff_img);
				$data_Save['image']   = $staff_img;
			}

			if($this->db->update('fbise',$data_Save,$data_id)){
				redirect('admin/wall-of-fame/fbise');
			}else{
				redirect('admin/wall-of-fame/fbise');
			}
		}
		else {
			$data['fbise_edit']=$this->db->get_where('fbise',array('id' => $Get));
			$data['path'] = 'Back_End/Wall_of_fame';
			$data['filename'] = 'fbise_edit';
			$this->load->view('Admin', $data);
		}
	}
	public function delete_fbise()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('fbise', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}


}
