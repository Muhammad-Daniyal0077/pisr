<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
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
		$this->load->library('upload');

	}

	public function index()
	{
		// Load view and pass the data
		$data['path']='Front_End';
		$data['filename']='Home';
		$this->load->view('Main',$data);
	}
	public function principlemessage()
	{
		// Load view and pass the data
		$data['path']='Front_End/about';
		$data['filename']='Principlemessaage';
		$this->load->view('Main',$data);
	}
	public function schoolvision()
	{
		// Load view and pass the data
		$data['path']='Front_End/about';
		$data['filename']='Schoolvision';
		$this->load->view('Main',$data);
	}
	public function adminstaff()
	{
		// Load view and pass the data
		$data['path']='Front_End/about';
		$data['filename']='adminstaff';
		$this->load->view('Main',$data);
	}

	
	public function schoolhistory()
	{
		// Load view and pass the data
		$data['path']='Front_End/about';
		$data['filename']='Schoolhistory';
		$this->load->view('Main',$data);
	}
	

	public function calender()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='calender';
		$this->load->view('Main',$data);
	}
	public function syllabus()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='task';
		$this->load->view('Main',$data);
	}
	public function uniform()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='uniform';
		$this->load->view('Main',$data);
	}
	public function datesheet()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='datesheet';
		$this->load->view('Main',$data);
	}

	
	public function specialprograms()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='Specialprograms';
		$this->load->view('Main',$data);
	}
	public function curriculum()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='Curriculum';
		$this->load->view('Main',$data);
	}
	public function mtts()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='MTSS';
		$this->load->view('Main',$data);
	}
	public function assesmentprogram()
	{
		// Load view and pass the data
		$data['path']='Front_End/acadimics';
		$data['filename']='Assesmentprogram';
		$this->load->view('Main',$data);
	}
	public function faculty() // Ensure the function name is correct
	{
		// Retrieve male faculty
		$this->db->where('gender', 'Male');
		$data['male_faculty'] = $this->db->get('faculty')->result();

		// Retrieve female faculty
		$this->db->where('gender', 'Female');
		$data['female_faculty'] = $this->db->get('faculty')->result();
	
		
		$data['path'] = 'Front_End/acadimics';
		$data['filename'] = 'Facaulty'; // Ensure filename is correctly capitalized
		$this->load->view('Main', $data);
	}
	
    public function admissiontest()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Admissiontest';
		$this->load->view('Main',$data);
	}
	public function admissionreq()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Admissionreq';
		$this->load->view('Main',$data);
	}
	public function admissionreg()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Admissionreg';
		$this->load->view('Main',$data);
	}
	public function feesstructure()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Feesstructure';
		$this->load->view('Main',$data);
	}
	public function admissionpolicy()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Admissionpolicy';
		$this->load->view('Main',$data);
	}
	public function agecriteria()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Agecriteria';
		$this->load->view('Main',$data);
	}
	public function admissiontests()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Admissiontests';
		$this->load->view('Main',$data);
	}
	public function faqs()
	{
		// Load view and pass the data
		$data['path']='Front_End/admission';
		$data['filename']='Faqs';
		$this->load->view('Main',$data);
	}
	public function fbise()
	{
		// Load view and pass the data
		$data['path']='Front_End/achievments';
		$data['filename']='Fbise';
		$this->load->view('Main',$data);
	}
	public function successstories()
	{
		// Load view and pass the data
		$data['path']='Front_End/achievments';
		$data['filename']='Successstories';
		$this->load->view('Main',$data);
	}
	
	public function general()
	{
		// Load view and pass the data
		$data['path']='Front_End/facilities';
		$data['filename']='General';
		$this->load->view('Main',$data);
	}
	public function libraries()
	{
		// Load view and pass the data
		$data['path']='Front_End/facilities';
		$data['filename']='Libraries';
		$this->load->view('Main',$data);
	}
	public function laboratories()
	{
		// Load view and pass the data
		$data['path']='Front_End/facilities';
		$data['filename']='Laboratories';
		$this->load->view('Main',$data);
	}
	public function extracurricular()
	{
		// Load view and pass the data
		$data['path']='Front_End/facilities';
		$data['filename']='Extra_curricular';
		$this->load->view('Main',$data);
	}
	public function gallery()
	{
		// Load view and pass the data
		$data['path']='Front_End/gallery';
		$data['filename']='Gallery';
		$this->load->view('Main',$data);
	}
	public function contact()
	{
		// Load view and pass the data
		$data['path']='Front_End';
		$data['filename']='contact';
		$this->load->view('Main',$data);
	}
	public function events()
	{
		// Load view and pass the data
		$data['path']='Front_End/events';
		$data['filename']='events';
		$this->load->view('Main',$data);
	}
	public function downloads()
	{
		// Load view and pass the data
		$data['path']='Front_End';
		$data['filename']='Downloads';
		$this->load->view('Main',$data);
	}
	public function pdzone()
	{
		// Load view and pass the data
		$data['path']='Front_End';
		$data['filename']='Pdzone';
		$this->load->view('Main',$data);
	}	
}

