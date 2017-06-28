<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__Construct();
		$this->load->model('HamroSamajModel');
	}
	public function index()
	{
		$data['users']=$this->HamroSamajModel->all();
		$this->load->view('admin/user/index',$data);
	}
	public function user()
	{
		$data['users']=$this->HamroSamajModel->all();
		$this->load->view('admin/user/index',$data);
	}
	public function deleteData($id)
	{		
		$this->HamroSamajModel->deleteData($id);
		$this->session->set_flashdata("message","Record Deleted Successfully");
		redirect(site_url('admin'));
	}
	public function SignUp()
	{
		//$salt="HamroSamaj";
		if (isset($_POST['signUp'])) 
		{
			$fName=$this->input->post('fName');
			$Email=$this->input->post('Email');
			$Username=$this->input->post('Username');
			$Password=$this->input->post('Password');
			//$Password=crypt($cp,$salt);
			$lvl=$this->input->post('lvl');
			$contact=$this->input->post('contact');
			if ($this->HamroSamajModel->checkDuplicateEmail($Email)>0)
				{
					$this->session->set_flashdata("error_message","Please Register Unique Email !");
					redirect('Admin');
				}
			else if ($this->HamroSamajModel->checkDuplicateUsername($Username)>0)
				{
					$this->session->set_flashdata("error_message","Please Register Unique Username !");
					redirect('Admin');
				}
			
			$check=$this->HamroSamajModel->signup($fName,$Email,$Username,$Password,$lvl,$contact);
			$this->session->set_flashdata("message","User Created Successfully");
			redirect('Admin');
			
			// if(!($this->HamroSamajModel->signup($q)))
			// {
			// 	$this->session->set_flashdata("error","Something went wrong. Please sign up with unique email and username!");
			// 	redirect('Admin');
			// }
			// else
			// {
				
			//}

			//$check=$this->user_m->logIn($Password,$Email,$Uname);
			// if ($check->num_rows()==1)
			// {
			// 	$rec = $check->row();
			// 	$this->session->set_userdata("userID",$rec->userID);
			// 	$this->session->set_userdata("fName",$rec->fName);
			// 	$this->session->set_userdata("lName",$rec->lName);
			// 	$this->session->set_userdata("Email",$rec->Email);
			// 	$this->session->set_userdata("Password",$rec->Password);
			// 	$this->session->set_userdata("DOB",$rec->DOB);
			// 	$this->session->set_userdata("Status",$rec->Status);
			// 	$this->session->set_userdata("username",$rec->username);
			// 	$this->session->set_userdata("image",$rec->image);

			// 	redirect('profile/upload');
			// }
			// else
			// {
			// 	$this->session->set_flashdata("error","Email / Username or Password not matched");
			// 	//redirect('home');
			// }
		}

		$this->load->view('Admin/user/SignUp');
	}
	
}
?>