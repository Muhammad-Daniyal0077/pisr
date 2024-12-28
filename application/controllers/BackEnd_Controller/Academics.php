<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Academics extends CI_Controller
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
		$query = $this->db->get('faculty'); // Replace 'faculty' with your actual table name
		$data['faculty'] = $query->result(); // Get the result as an array of objects	

		$data['path'] = 'Back_End/acadimics/faculty';
		$data['filename'] = 'faculty';
		$this->load->view('Admin', $data);
	}
	public function faculty_designation()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$staff_type    = $this->input->post('designation');
			$data_Save['staff_type']    = $this->input->post('designation');
			$code = strtolower(str_replace(' ', '_', $staff_type));
			$data_Save['code']    = $code;

			if($this->db->insert('designation_type',$data_Save)){
				redirect('academics/faculty-designation');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$query = $this->db->get('designation_type'); // Replace 'faculty' with your actual table name
			$data['designation_type'] = $query->result(); // Get the result as an array of objects
			$data['path'] = 'Back_End/acadimics/faculty_designation';
			$data['filename'] = 'index';
			$this->load->view('Admin', $data);
		}
	}
	public function edit_faculty_designation($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('designation_type_id');
			$staff_type    = $this->input->post('designation');
			$data_Save['staff_type']    = $this->input->post('designation');
			$code = strtolower(str_replace(' ', '_', $staff_type));
			$data_Save['code']    = $code;


			if($this->db->update('designation_type',$data_Save,$data_id)){
				redirect('academics/faculty-designation');
			}else{
				redirect('academics/faculty-designation');
			}
		}
		else {
			$data['designation_type_edit']=$this->db->get_where('designation_type',array('id' => $Get));
			$data['path'] = 'Back_End/acadimics/faculty_designation';
			$data['filename'] = 'edit';
			$this->load->view('Admin', $data);
		}
	}
	public function delete_designation()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('designation_type', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}

	public function addfaculty()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['faculty_name']            = $this->input->post('faculty_name');
			$data_Save['faculty_designation']            = $this->input->post('faculty_designation');
			$data_Save['gender']                = $this->input->post('gender');
			$data_Save['status']                = $this->input->post('status');

			if ($_FILES['faculty_img']['name']) {
				$staff_img              = $_FILES['faculty_img']['name'];
				move_uploaded_file($_FILES['faculty_img']['tmp_name'], 'uploads/faculty_images/' . $staff_img);
				$data_Save['faculty_img']   = $staff_img;
			}
			if ($this->db->insert('faculty', $data_Save)) {
				redirect('academics/faculty');
			} else {
				redirect('academics/addfacultys');
			}
		} else {
			$data['staff_members_list'] = $this->db->get('faculty');
			$data['designation_type'] = $this->db->get('designation_type');
			$data['path'] = 'Back_End/acadimics/faculty';
			$data['filename'] = 'addfaculty';
			$this->load->view('Admin', $data);
		}

	}

	public function updatefaculty($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			// Collect POST data
			$data_id['id'] = $this->input->post('faculty_id');
			$data_Save['faculty_name'] = $this->input->post('faculty_name');
			$data_Save['faculty_designation'] = $this->input->post('faculty_designation');
			$data_Save['gender'] = $this->input->post('gender');
			$data_Save['status'] = $this->input->post('status');  // if you have a 'status' field

			// Handle image upload
			if ($_FILES['faculty_img']['name']) {
				$faculty_img = $_FILES['faculty_img']['name'];
				move_uploaded_file($_FILES['faculty_img']['tmp_name'], 'uploads/faculty_images/' . $faculty_img);
				$data_Save['faculty_img'] = $faculty_img;
			}

			// Update the record in the database
			if ($this->db->update('faculty', $data_Save, $data_id)) {
				redirect('academics/faculty');
			} else {
				redirect('academics/addfaculty');
			}
		} else {
			// Load the data to populate the edit form
			$data['faculty_edit'] = $this->db->get_where('faculty', array('id' => $id));
			$data['designation_type'] = $this->db->get('designation_type');
			$data['path'] = 'Back_End/acadimics/faculty';
			$data['filename'] = 'editfaculty';
			$this->load->view('Admin', $data);
		}
	}







	public function deletefaculty()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('faculty', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}
}
