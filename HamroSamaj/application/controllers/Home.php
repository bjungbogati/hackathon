<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__Construct();
		$this->load->model('HamroSamajModel');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$salt="discoverMe";
		if (isset($_POST['logIn']))
		{
			// $plainpass=$this->input->post('logInPass');
			// $Email=$this->input->post('emailUsername');
			// $Uname=$this->input->post('emailUsername');
			// if ($Uname=="aryan" && $plainpass="aryan" ) 
			
			$logInPass=$this->input->post('logInPass');	
			//$logInPass=crypt($plainpass,$salt);		
			$Email=$this->input->post('emailUsername');
			$Uname=$this->input->post('emailUsername');
			$check=$this->HamroSamajModel->logIn($logInPass,$Email,$Uname);
			if ($check->num_rows()==1)
			{
				$rec = $check->row();
				$this->session->set_userdata("userId",$rec->userId);
				$this->session->set_userdata("fullName",$rec->fullName);
				$this->session->set_userdata("Username",$rec->Username);
				$this->session->set_userdata("Email",$rec->Email);
				$this->session->set_userdata("Password",$rec->Password);
				$this->session->set_userdata("Contact",$rec->Contact);
				$this->session->set_userdata("Role",$rec->Role);
				$this->session->set_userdata("isLogin",true);	
				redirect('Admin');
			}
			else
			 {
				$this->session->set_flashdata("error","Email / Username or Password not matched");
				//redirect('home');
			}
				
		}
		
		$this->load->view('home/login');
	}
	public function logOut()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata("message","Session Terminated Successfully ! See you soon.");
		$this->load->view('home/login');
		sleep(5);
		redirect('home/login');
	}
	public function url()
	{
		echo base_url()."<br>".site_url();
	}
	public function contacts()
	{
		$this->load->view('emergency');
	}
	

}
