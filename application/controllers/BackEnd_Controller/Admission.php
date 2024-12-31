<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admission extends CI_Controller
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


	public function admission_test_syllabus()
	{
		// Query the database to get data from the 'faculty' table
		$query = $this->db->get('admission_test_syllabus'); // Replace 'faculty' with your actual table name
		$data['admission_test_syllabus'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/admission';
		$data['filename'] = 'admission_test_syllabus';
		$this->load->view('Admin', $data);
	}

	public function admission_test_syllabus_create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['name']            = $this->input->post('name');
			$data_Save['status']                = $this->input->post('status');

			if ($_FILES['image']['name']) {
				$syllabus_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/syllabus_image/' . $syllabus_img);
				$data_Save['image']   = $syllabus_img;
			}

			if ($_FILES['file']['name']) {
				$syllabus_file              = $_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/syllabus_file/' . $syllabus_file);
				$data_Save['file']   = $syllabus_file;
			}

			if($this->db->insert(' admission_test_syllabus',$data_Save)){
				redirect('admin/admission/admission-test-syllabus/');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$data['path'] = 'Back_End/admission';
			$data['filename'] = 'admission_test_syllabus_create';
			$this->load->view('Admin', $data);
		}
	}


	public function admission_test_syllabus_edit($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('edit_id');
			$data_Save['name']            = $this->input->post('name');
			$data_Save['status']                = $this->input->post('status');

			if ($_FILES['image']['name']) {
				$syllabus_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/syllabus_image/' . $syllabus_img);
				$data_Save['image']   = $syllabus_img;
			}

			if ($_FILES['file']['name']) {
				$syllabus_file              = $_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/syllabus_file/' . $syllabus_file);
				$data_Save['file']   = $syllabus_file;
			}

			if($this->db->update('admission_test_syllabus',$data_Save,$data_id)){
				redirect('admin/admission/admission-test-syllabus/');
			}else{
				redirect('admin/admission/admission-test-syllabus/');
			}
		}
		else {
			$data['admission_test_syllabus_edit']=$this->db->get_where('admission_test_syllabus',array('id' => $Get));
			$data['path'] = 'Back_End/admission';
			$data['filename'] = 'admission_test_syllabus_edit';
			$this->load->view('Admin', $data);
		}
	}

	public function delete_syllabus()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('admission_test_syllabus', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}

	public function school_admission_policy()
	{
		$Get=2;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= 2;
			$data_Save['fee_policy']            = $this->input->post('fee_policy');
			$data_Save['admission_policy']      = $this->input->post('admission_policy');


			if($this->db->update('school_admission_policy',$data_Save,$data_id)){
				redirect('admin/admission/school-admission-policy/');
			}else{
				redirect('admin/admission/school-admission-policy/');
			}
		}
		else {
			$data['school_admission_policy']=$this->db->get_where('school_admission_policy',array('id' => $Get));
			$data['path'] = 'Back_End/admission';
			$data['filename'] = 'school_admission_policy';
			$this->load->view('Admin', $data);
		}
	}


















}
