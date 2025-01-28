<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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

	//latest_news

	public function latest_news()
	{
		$query = $this->db->get('latest_news'); // Replace 'faculty' with your actual table name
		$data['latest_news'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/latest_news';
		$data['filename'] = 'index';
		$this->load->view('Admin', $data);
	}
	public function latest_news_create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['title']            = $this->input->post('title');
			$data_Save['details']            = $this->input->post('details');
			$data_Save['status']                = $this->input->post('status');

			if($this->db->insert('latest_news',$data_Save)){
				redirect('admin/latest-news/');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$data['path'] = 'Back_End/latest_news';
			$data['filename'] = 'create';
			$this->load->view('Admin', $data);
		}
	}
	public function latest_news_edit($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('edit_id');
			$data_Save['title']            = $this->input->post('title');
			$data_Save['details']            = $this->input->post('details');
			$data_Save['status']                = $this->input->post('status');



			if($this->db->update('latest_news',$data_Save,$data_id)){
				redirect('admin/latest-news/');
			}else{
				redirect('admin/latest-news/');
			}
		}
		else {
			$data['latest_news_edit']=$this->db->get_where('latest_news',array('id' => $Get));
			$data['path'] = 'Back_End/latest_news';
			$data['filename'] = 'edit';
			$this->load->view('Admin', $data);
		}
	}
	public function delete_latest_news()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('latest_news', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}
	public function top_students()
	{
		// Query the database to get data from the 'faculty' table
		$query = $this->db->get('our_top_students'); // Replace 'faculty' with your actual table name
		$data['our_top_students'] = $query->result(); // Get the result as an array of objects

		$data['path'] = 'Back_End/home_setting';
		$data['filename'] = 'our_top_students_index';
		$this->load->view('Admin', $data);
	}

	public function top_students_create()
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_Save['name']            = $this->input->post('name');
			$data_Save['marks']            = $this->input->post('marks');
			$data_Save['grade']            = $this->input->post('grade');
			$data_Save['detail']            = $this->input->post('detail');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$students_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/our_top_students/' . $students_img);
				$data_Save['image']   = $students_img;
			}
			if($this->db->insert('our_top_students',$data_Save)){
				redirect('admin/home-page-settings/our-top-students/');
			}else{
				echo "Error";
			}
		}
		else {
			$this->db->order_by('ID', 'ASC');
			$data['path'] = 'Back_End/home_setting';
			$data['filename'] = 'our_top_students_create';
			$this->load->view('Admin', $data);
		}
	}

	public function top_students_edit($id)
	{
		$Get=$id;
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id']            			= $this->input->post('edit_id');
			$data_Save['name']            = $this->input->post('name');
			$data_Save['marks']            = $this->input->post('marks');
			$data_Save['grade']            = $this->input->post('grade');
			$data_Save['detail']            = $this->input->post('detail');
			$data_Save['status']                = $this->input->post('status');


			if ($_FILES['image']['name']) {
				$students_img              = $_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/our_top_students/' . $students_img);
				$data_Save['image']   = $students_img;
			}

			if($this->db->update('our_top_students',$data_Save,$data_id)){
				redirect('admin/home-page-settings/our-top-students/');
			}else{
				redirect('admin/home-page-settings/our-top-students/');
			}
		}
		else {
			$data['top_students_edit']=$this->db->get_where('our_top_students',array('id' => $Get));
			$data['path'] = 'Back_End/home_setting';
			$data['filename'] = 'our_top_students_edit';
			$this->load->view('Admin', $data);
		}
	}
	public function delete_top_students()
	{
		$id = $this->input->post('get_id');

		if ($this->db->delete('our_top_students', ['id' => $id])) {
			echo json_encode(['status' => 'success']);
		} else {
			echo json_encode(['status' => 'error']);
		}
	}




	


}
