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

	if ($this->input->server('REQUEST_METHOD') === 'POST') {
		$data_Save['img_head']            = $this->input->post('img_head');
		$data_Save['status']     = $this->input->post('status');

		$image = array();
		$ImageCount = count($_FILES['images']['name']);
		for ($i = 0; $i < $ImageCount; $i++) {
			$_FILES['file']['name']       = $_FILES['images']['name'][$i];
			$_FILES['file']['type']       = $_FILES['images']['type'][$i];
			$_FILES['file']['tmp_name']   = $_FILES['images']['tmp_name'][$i];
			$_FILES['file']['error']      = $_FILES['images']['error'][$i];
			$_FILES['file']['size']       = $_FILES['images']['size'][$i];

			// File upload configuration
			$uploadPath = 'uploads/gallery/';
			$config['upload_path'] = $uploadPath;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			// Load and initialize upload library
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// Upload file to server
			if ($this->upload->do_upload('file')) {
				// Uploaded file data
				$imageData = $this->upload->data();
				$uploadImgData[$i] = $imageData['file_name'];
			}
		}
		//                    print_r($uploadImgData);

		if (!empty($uploadImgData)) {
			// Insert files data into the database
			$data_Save['img'] = json_encode($uploadImgData);
		}



		if ($this->db->insert('gallery', $data_Save)) {
			redirect('admin/gallery');
		} else {
			redirect('admin/addgallery');
		}
	} else {
		$data['path'] = 'Back_End/gallery';
		$data['filename'] = 'addgallery';
		$this->load->view('Admin', $data);
	}

}




	public function updateimages($id)
	{
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$data_id['id'] = $this->input->post('id');
			$data_Save['img_head'] = $this->input->post('img_head');
			$data_Save['status'] = $this->input->post('status');  // if you have a 'status' field
			$removeimg = $this->input->post('removeimg');
			$image = array();

			// Handling the file upload
			$ImageCount = count($_FILES['images']['name']);
			for ($i = 0; $i < $ImageCount; $i++) {
				$_FILES['file']['name'] = $_FILES['images']['name'][$i];
				$_FILES['file']['type'] = $_FILES['images']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['images']['error'][$i];
				$_FILES['file']['size'] = $_FILES['images']['size'][$i];

				// File upload configuration
				$uploadPath = 'uploads/gallery/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'jpg|jpeg|png|gif';

				// Load and initialize upload library
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				// Upload file to server
				if ($this->upload->do_upload('file')) {
					// Uploaded file data
					$imageData = $this->upload->data();
					$image[$i] = $imageData['file_name'];
				}
			}

			// Handle removal of images
			if ($removeimg) {
				$removeimglist = json_decode($removeimg, true);
				$row_data = $this->db->get_where('gallery', array('id' => $id))->row()->img;
				$files_images = json_decode($row_data);

				// Remove the images from the existing list
				foreach ($removeimglist as $re) {
					if (($key = array_search($re, $files_images)) !== false) {
						unset($files_images[$key]);
					}
				}

				// Merge the remaining images with newly uploaded ones
				$image = array_merge($image, $files_images);
			} else {
				$row_data = $this->db->get_where('gallery', array('id' => $id))->row()->img;
				$files_images = json_decode($row_data);
				$image = array_merge($image, $files_images);
			}

			// Update image data in the database
			if (!empty($image)) {
				$data_Save['img'] = json_encode($image);
			}

			// Save the changes to the database
			if ($this->db->update('gallery', $data_Save, $data_id)) {
				redirect('admin/gallery');
			} else {
				redirect('admin/addgallery');
			}
		} else {
			// Display the form for editing the gallery
			$data['gallery'] = $this->db->get_where('gallery', array('id' => $id));
			$data['path'] = 'Back_End/gallery';
			$data['filename'] = 'editgallery';
			$this->load->view('Admin', $data);
		}
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
