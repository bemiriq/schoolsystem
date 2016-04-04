<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	function __construct()
	 {
	   parent::__construct();
	   //echo "FOUND MODEL";
	   $this->load->library('session');
	   $this->load->model('loginModel','',TRUE);
	   // $this->load->model('registerModel','postregister');
	   // $this->load->model('issueModel','postissue');
	   // $this->load->model('employeeModel','postemployee');
	 }

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//This method will have the credentials validation

		// the code below here is for the logout function 
		$this->load->library('session');
		// end of the logout function code
		$this->load->helper('form'); 
		// $this->load->library('session');
	   	$this->load->library('form_validation');
	   	// $this->post->pop_room_type($data, 'room_type');
	  	$this->form_validation->set_rules('username', 'username', 'trim|required');
	   	$this->form_validation->set_rules('password', 'password', 'trim|required|callback_check_database');

		if($this->form_validation->run() == FALSE)
		{
		    //Field validation failed.  User redirected to login page
		    $this->load->view('login');
		    // echo 'incorrect password';
		}
		
	}

	 function check_database($password)
	 {
	    
	   $username = $this->input->post('username');

	   $result = $this->loginModel->login($username, $password);

	   if($result)
	   {
	     
	     // $this->studentdashboard();
	     
	   }
	   else
	   {
	       echo '<p style="width: 300px; margin-right: auto; margin-left: auto; margin-top: 1%; color: #B22222"> Incorrect Username and Password </p>';
		    $this->load->view('login');
	   }
	 }


	public function studentdashboard()
	{
		echo 'student';
	}

	public function teacherdashboard()
	{
		echo 'teacher';
	}

}
