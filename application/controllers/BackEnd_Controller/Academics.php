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

	public function addfaculty()
	{
		// Load necessary helpers and libraries
		$this->load->helper(['form', 'url']);
		$this->load->library('upload');

		// Check if the file input is set
		if (!isset($_FILES['faculty_img'])) {
			$data['error'] = "File not uploaded.";
			$data['path'] = 'Back_End/acadimics/faculty';
			$data['filename'] = 'addfaculty';
			$this->load->view('Admin', $data);
			return;
		}

		// Set upload configuration for the image
		$config['upload_path'] = './uploads/faculty_images/';
		$config['allowed_types'] = 'jpg|jpeg|png';
		$config['max_size'] = 2048; // Max size in KB
		$config['file_name'] = time() . '_' . $_FILES['faculty_img']['name'];

		$this->upload->initialize($config);

		// Handle image upload
		if (!$this->upload->do_upload('faculty_img')) {
			// Upload failed, load form again with error message
			$data['error'] = $this->upload->display_errors();
			$data['path'] = 'Back_End/acadimics/faculty';
			$data['filename'] = 'addfaculty';
			$this->load->view('Admin', $data);
			return;
		}

		// Retrieve form data
		$facultyData = [
			'faculty_name' => $this->input->post('faculty_name'),
			'faculty_designation' => $this->input->post('faculty_designation'),
			'gender' => $this->input->post('gender'),
			'faculty_img' => 'uploads/faculty_images/' . $this->upload->data('file_name'),
		];

		// Insert data into the 'faculty' table
		if ($this->db->insert('faculty', $facultyData)) {
			// Redirect to the faculty list page on success
			redirect('academics/faculty');
		} else {
			// If insertion fails, load the view with error message
			$data['error'] = "Failed to add faculty.";
			$data['path'] = 'Back_End/acadimics/faculty';
			$data['filename'] = 'addfaculty';
			$this->load->view('Admin', $data);
		}
	}


	
	public function updatefaculty($id)
{
    $this->load->helper('form'); // Load the form helper
    $this->load->library('upload'); // Load the upload library

    // Check if the form is submitted
    if ($this->input->post()) {
        // Get the existing image
        $existing_image = $this->input->post('existing_image');

        // Set upload configuration
        $config['upload_path'] = './uploads/faculty/'; // Set your upload path
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = time() . '_' . $_FILES['faculty_img']['name'];

        $this->upload->initialize($config);

        // Check if a new image was uploaded
        if ($_FILES['faculty_img']['name']) {
            if ($this->upload->do_upload('faculty_img')) {
                $upload_data = $this->upload->data();
                $image_path = 'uploads/faculty/' . $upload_data['file_name'];
            } else {
                // Handle the error and set a message
                $data['upload_error'] = $this->upload->display_errors();
            }
        } else {
            // No new image uploaded, keep the existing image
            $image_path = $existing_image;
        }

        // Prepare data for update
        $update_data = [
            'faculty_name' => $this->input->post('faculty_name'),
            'faculty_designation' => $this->input->post('faculty_designation'),
            'gender' => $this->input->post('gender'),
            'faculty_img' => $image_path // Update image path
        ];

        // Update faculty in the database
        $this->db->where('id', $id);
        $this->db->update('faculty', $update_data);

        // Redirect or show success message
        redirect('academics/faculty'); // Change to your redirection after update
    }

    // Retrieve the faculty member to edit
    $this->db->where('id', $id);
    $data['faculty'] = $this->db->get('faculty')->row();

    if (empty($data['faculty'])) {
        show_404();
        return;
    }

    // Prepare view data
    $data['path'] = 'Back_End/acadimics/faculty';
    $data['filename'] = 'editfaculty';

    // Load the view
    $this->load->view('Admin', $data);
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
