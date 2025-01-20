<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Careers extends CI_Controller
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



	public function jobListing()
	{
//
		$query = $this->db->get('job_listing'); // Replace 'faculty' with your actual table name
		$data['job_listing'] = $query->result(); // Get the result as an array of objects
		$data['path'] = 'Back_End/careers';
		$data['filename'] = 'joblisting_index';
		$this->load->view('Admin', $data);
	}


	public function jobListing_Create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['job_title']            = $this->input->post('job_title');
			$data_Save['job_details']            = $this->input->post('job_details');
			$data_Save['url']            = $this->input->post('url');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$staff_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/jobListing/' . $staff_img);
				$data_Save['image']   = $staff_img;
			}

			if($this->db->insert('job_listing',$data_Save)){
				redirect('admin/careers/job-listing');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$data['path'] = 'Back_End/careers';
			$data['filename'] = 'joblisting_create';
			$this->load->view('Admin', $data);
		}
	}


	public function jobListing_edit($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('edit_id');
			$data_Save['job_title']            = $this->input->post('job_title');
			$data_Save['job_details']            = $this->input->post('job_details');
			$data_Save['url']            = $this->input->post('url');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$staff_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/jobListing/' . $staff_img);
				$data_Save['image']   = $staff_img;
			}

			if($this->db->update('job_listing',$data_Save,$data_id)){
				redirect('admin/careers/job-listing');
			}else{
				redirect('admin/careers/job-listing');
			}
		}
		else {
			$data['job_listing_edit']=$this->db->get_where('job_listing',array('id' => $Get));
			$data['path'] = 'Back_End/careers';
			$data['filename'] = 'joblisting_edit';
			$this->load->view('Admin', $data);
		}
	}

	public function delete_job()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('job_listing', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}
	public function index()
	{
		$data['path'] = 'Back_End/careers';
		$data['filename'] = 'jobform';
		$this->load->view('Admin', $data);
	}


	public function jobform()
	{
		// Query the database to get data from the 'faculty' table
		$query = $this->db->get('jobform'); // Replace 'faculty' with your actual table name
		$data['jobforms'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/careers';
		$data['filename'] = 'jobform';
		$this->load->view('Admin', $data);
	}


	public function delete_form()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('jobform', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}



}
