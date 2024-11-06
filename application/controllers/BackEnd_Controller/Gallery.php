<?php
defined('BASEPATH') or exit('No direct script access allowed');

class   Gallery extends CI_Controller
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
        $query = $this->db->get('gallery'); // Replace 'faculty' with your actual table name
        $data['gallery'] = $query->result(); // Get the result as an array of objects	

        $data['path'] = 'Back_End/gallery';
        $data['filename'] = 'gallery';
        $this->load->view('Admin', $data);
    }
public function addimages()
{
    // Load helpers and libraries
    $this->load->helper(['form', 'url']);
    $this->load->library('upload');

    // Check if files are selected
    if (empty($_FILES['img']['name'][0])) {
        $data['error'] = "No files selected.";
        $data['path'] = 'Back_End/gallery';
        $data['filename'] = 'addgallery';
        $this->load->view('Admin', $data);
        return;
    }

    // Configure upload settings
    $config['upload_path'] = './uploads/gallery/';
    $config['allowed_types'] = 'jpg|jpeg|png';
    $config['max_size'] = 2048; // Max size in KB
    $files = $_FILES;
    $uploaded_images = []; // Array to store file paths for successfully uploaded images

    // Loop through each file and attempt to upload
    for ($i = 0; $i < count($files['img']['name']); $i++) {
        $_FILES['img']['name'] = $files['img']['name'][$i];
        $_FILES['img']['type'] = $files['img']['type'][$i];
        $_FILES['img']['tmp_name'] = $files['img']['tmp_name'][$i];
        $_FILES['img']['error'] = $files['img']['error'][$i];
        $_FILES['img']['size'] = $files['img']['size'][$i];

        // Set a unique filename for each image
        $config['file_name'] = time() . '_' . $files['img']['name'][$i];
        $this->upload->initialize($config);

        // Attempt to upload each file
        if ($this->upload->do_upload('img')) {
            $upload_data = $this->upload->data(); // Get uploaded file details
            $uploaded_images[] = 'uploads/gallery/' . $upload_data['file_name']; // Collect each image path
        } else {
            // If any upload fails, show error and return
            $data['error'] = $this->upload->display_errors();
            $data['path'] = 'Back_End/gallery';
            $data['filename'] = 'addgallery';
            $this->load->view('Admin', $data);
            return;
        }
    }

    // Convert array of image paths to JSON to store in a single column
    $dataToInsert = [
        'img_head' => $this->input->post('img_head', true), // Sanitize input
        'img' => json_encode($uploaded_images) // Store all image paths as JSON
    ];

    // Insert data into the 'gallery' table
    if ($this->db->insert('gallery', $dataToInsert)) {
        // Redirect to gallery view page on success
        redirect('admin/gallery');
    } else {
        // If insertion fails, show error
        $data['error'] = "Failed to add images to the gallery.";
        $data['path'] = 'Back_End/gallery';
        $data['filename'] = 'addgallery';
        $this->load->view('Admin', $data);
    }
}

    


public function updateimages($id)
{
    $this->load->helper('form'); // Load the form helper
    $this->load->library('upload'); // Load the upload library

    // Check if the form is submitted
    if ($this->input->post()) {
        // Get existing images from the database
        $existing_images = json_decode($this->input->post('existing_image'), true) ?: [];

        // Configure upload settings
        $config['upload_path'] = './uploads/gallery/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // Max size in KB

        $files = $_FILES;
        $uploaded_images = []; // Array to store paths of successfully uploaded images

        // Loop through each file for upload
        for ($i = 0; $i < count($files['img']['name']); $i++) {
            if (!empty($files['img']['name'][$i])) { // Check if there's a file to upload
                $_FILES['img']['name'] = $files['img']['name'][$i];
                $_FILES['img']['type'] = $files['img']['type'][$i];
                $_FILES['img']['tmp_name'] = $files['img']['tmp_name'][$i];
                $_FILES['img']['error'] = $files['img']['error'][$i];
                $_FILES['img']['size'] = $files['img']['size'][$i];

                // Set a unique filename for each image
                $config['file_name'] = time() . '_' . $files['img']['name'][$i];
                $this->upload->initialize($config);

                if ($this->upload->do_upload('img')) {
                    $upload_data = $this->upload->data();
                    $uploaded_images[] = 'uploads/gallery/' . $upload_data['file_name']; // Store each file path
                } else {
                    // Handle the error if any file fails to upload
                    $data['upload_error'] = $this->upload->display_errors();
                    // Optionally, you can show this error in the view
                }
            }
        }

        // Merge new uploaded images with existing ones
        $all_images = array_merge($existing_images, $uploaded_images);

        // Prepare data for update
        $update_data = [
            'img_head' => $this->input->post('img_head', true), // Sanitize input
            'img' => json_encode($all_images) // Store all image paths as JSON array
        ];

        // Update the database record
        $this->db->where('id', $id);
        $this->db->update('gallery', $update_data);

        // Redirect or show success message
        redirect('admin/gallery'); // Change to your redirection after update
    }

    // Retrieve the image entry to edit 
    $this->db->where('id', $id);
    $data['gallery'] = $this->db->get('gallery')->row();

    if (empty($data['gallery'])) {
        show_404(); // Show 404 if the gallery item is not found
        return;
    }

    // Prepare view data
    $data['path'] = 'Back_End/gallery';
    $data['filename'] = 'editgallery';
    $data['existing_images'] = json_decode($data['gallery']->img); // Decode JSON to array

    // Load the view
    $this->load->view('Admin', $data);
}






    public function delete()
    {
        $id = $this->input->post('get_id');

        if ($this->db->delete('gallery', ['id' => $id])) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
}
