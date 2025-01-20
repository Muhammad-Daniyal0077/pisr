<?php
defined('BASEPATH') or exit('No direct script access allowed');

class careers extends CI_Controller
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
		$data['path'] = 'Back_End/careers';
		$data['filename'] = 'jobform_create';
		$this->load->view('Admin', $data);
	}


	public function jobform()
	{
		// Query the database to get data from the 'faculty' table
		$query = $this->db->get('jobform'); // Replace 'faculty' with your actual table name
		$data['jobforms'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/careers';
		$data['filename'] = 'jobform_create';
		$this->load->view('Admin', $data);
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



}
