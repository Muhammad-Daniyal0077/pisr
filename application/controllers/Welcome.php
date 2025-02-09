<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
	}

	public function index()
	{
		// Query the database to get data from the 'faculty' table
		$query = $this->db->get('our_top_students'); // Replace 'faculty' with your actual table name
		$data['our_top_students'] = $query->result(); // Get the result as an array of objects

		// Load view and pass the data
		$data['path']='Front_End';
		$data['filename']='Home';
		$this->load->view('Main',$data);
	}
}
