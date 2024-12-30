<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_team extends CI_Controller
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
		$query = $this->db->get('our_team'); // Replace 'faculty' with your actual table name
		$data['our_team'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/our_team';
		$data['filename'] = 'index';
		$this->load->view('Admin', $data);
	}
	public function create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['name']            = $this->input->post('name');
			$data_Save['designation']            = $this->input->post('designation');
			$data_Save['about']            = $this->input->post('about');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$staff_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/our_team/' . $staff_img);
				$data_Save['image']   = $staff_img;
			}

			if($this->db->insert('our_team',$data_Save)){
				redirect('admin/our-team/');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$data['designation_type'] = $this->db->get('designation_type'); // Replace 'faculty' with your actual table name
 			$data['path'] = 'Back_End/our_team';
			$data['filename'] = 'create';
			$this->load->view('Admin', $data);
		}
	}
	public function edit_our_team($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('edit_id');
			$data_Save['name']            = $this->input->post('name');
			$data_Save['designation']            = $this->input->post('designation');
			$data_Save['about']            = $this->input->post('about');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$staff_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/our_team/' . $staff_img);
				$data_Save['image']   = $staff_img;
			}

			if($this->db->update('our_team',$data_Save,$data_id)){
				redirect('admin/our-team/');
			}else{
				redirect('admin/our-team/');
			}
		}
		else {
			$data['our_team_edit']=$this->db->get_where('our_team',array('id' => $Get));
			$data['designation_type'] = $this->db->get('designation_type'); // Replace 'faculty' with your actual table name
			$data['path'] = 'Back_End/our_team';
			$data['filename'] = 'edit';
			$this->load->view('Admin', $data);
		}
	}
	public function delete_our_team()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('our_team', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}


}
