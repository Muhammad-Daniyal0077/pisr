<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session'); // Load session library
        $this->load->database(); // Load database library
    }

    // Display the login page
    public function index()
    {
        $this->load->view('Back_End/login'); // Ensure the path is correct
    }

    public function authenticate()
{
    $email = $this->input->post('email'); // Retrieve the email from form input
    $password = $this->input->post('password'); // Retrieve the password from form input

    // Check if credentials are provided
    if (!$email || !$password) {
        $data['error'] = "Please enter both email and password!";
        $this->load->view('Back_End/login', $data);
        return;
    }

    // Query the database for the user
    $query = $this->db->get_where('admin', ['email' => $email]);

    // Check if the user exists
    if ($query->num_rows() === 1) {
        $row = $query->row(); // Retrieve the user data

        // Directly compare the provided password with the password in the database
        if ($password === $row->password) {
            // Set session data for logged-in user
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('email', $email);

            // Redirect to admin dashboard
            redirect('admin/dashboard');
        } else {
            // Password is incorrect
            $data['error'] = "Invalid username or password!";
            $this->load->view('Back_End/login', $data);
        }
    } else {
        // Email not found in the database
        $data['error'] = "Invalid username or password!";
        $this->load->view('Back_End/login', $data);
    }
}


    // Logout function to destroy the session and redirect to login
    public function logout()
    {
        $this->session->sess_destroy(); // Destroy session data
        redirect('auth/login'); // Redirect to the login page
    }
}
