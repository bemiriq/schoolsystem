<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	function __construct()
	 {
	   parent::__construct();
	   //echo "FOUND MODEL";
	   $this->load->library('session');
	   $this->load->model('loginModel','',TRUE);
	   $this->load->model('registerModel','postregister');
	   $this->load->model('feeModel','postfee');
	   // $this->load->model('issueModel','postfee');
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
	     // print_r($result);
	 		foreach ($result as $result ) {
	 			$ucat = $result->user_category;
	 			if($ucat == 'Student' ){
	 				// echo 'Student';
	 				redirect("school/studentDashboard");

	 			}
	 			elseif($ucat == 'Admin'){
	 				// echo 'Admin';
	 				redirect("school/adminDashboard");	
	 			}
	 			elseif($ucat == 'Teacher'){
	 				// echo 'Teacher';
	 				redirect("school/teacherDashboard");	
	 			}

	 		}
	    	
	     
	   }
	   else
	   {
	       echo '<p style="width: 300px; margin-right: auto; margin-left: auto; margin-top: 1%; color: #B22222"> Incorrect Username and Password </p>';
		    $this->load->view('login');
	   }
	 }


	public function studentDashboard()
	{
		$this->load->view("student/studentDashboard");
		$this->studentHeader();
		$this->studentFooter();
	}

	public function studentHeader()
	{
		$this->load->view("student/studentHeader");
	}

	public function studentFooter()
	{
		$this->load->view("student/studentFooter");
	}

	public function teacherDashboard()
	{
		$this->load->view("teacher/teacherDashboard");
		$this->teacherHeader();
		$this->teacherFooter();
	}

	public function teacherHeader()
	{
		$this->load->view("teacher/teacherHeader");
	}

	public function teacherFooter()
	{
		$this->load->view("teacher/teacherFooter");
	}

	public function adminDashboard()
	{
		$this->load->view("admin/adminDashboard");
		$this->adminHeader();
		$this->adminFooter();
	}

	public function adminHeader()
	{
		$this->load->view("admin/adminHeader");
	}

	public function adminFooter()
	{
		$this->load->view("admin/adminFooter");
	}

	public function register()
	 {
	 	if(@$_POST['create_user'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postregister->add($data);
			$this->session->set_flashdata('message',"User created successfully");
			$this->load->view("register");
		}
		else{
			$this->load->view("register");
		}
	 }

	 public function addFee()
	 {

	 	if(@$_POST['add_fee'])
		{
			$data = $_POST['post'];
			$data['date_posted'] = date('Y-m-d H:i:s');
			$this->postfee->add($data);
			$this->session->set_flashdata('message',"Fee added successfully");
			$this->adminHeader();
			$this->load->view("admin/addFee");
			$this->adminFooter();
		}

		else{
			$this->adminHeader();
			$this->load->view("admin/addFee");
			$this->adminFooter();
		}
	 }

	 	 public function viewFee()
	{
		$this->adminHeader();
		$this->adminFooter();
		$data['posts']=$this->postfee->getAll();
		$this->load->view('admin/viewFee',$data);
	}

		public function studentViewFee()
	{
		$this->studentHeader();
		$this->studentFooter();
		$data['posts']=$this->postfee->getAll();
		$this->load->view('student/viewFee',$data);
	}

		public function editFee()
	{
		$id = $this->uri->segment(3);
		$post = $this->postfee->getById($id);
		if(!$post)
		{
			// echo '1';
			redirect("school/viewFee");
		}

		if(@$_POST['update_fee'])
		{
			$data = $_POST['post'];
			$this->postfee->update($data,$id);
			$data['fichas_info'] = $this->postfee->get_fichas();
			$this->session->set_flashdata('message',"Fee updated successfully");
			redirect("school/editFee");
			// echo '2';

			$this->adminHeader();
			$this->adminFooter();
			redirect("school/editFee");
		}

		// echo '3';
		$this->adminHeader();
		$this->adminFooter();
		$data['post'] = $post;
		$data['fichas_info'] = $this->postfee->get_fichas();
		$this->load->view('admin/editFee',$data);
	}

		public function deleteFee()
	{
		$id = $this->uri->segment(3);
		$this->postfee->delete($id);
		$this->session->set_flashdata('message',"Fee deleted successfully");
		redirect("school/viewFee");
	}

	public function logout()
	{
	 	$this->index();
	 	$this->load->library('session');	
	}
}
