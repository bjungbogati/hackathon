<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complain extends CI_Controller
{

	public function __construct()
	{
		parent::__Construct();
		$this->load->model('HamroSamajModel');
	}
	public function index()
	{
		if (isset($_POST['btnRegister'])) 
		{
			$cName=$this->input->post('cName');
			$vName=$this->input->post('vName');
			$Email=$this->input->post('email');
			$Contact=$this->input->post('phone');
			$date=$this->input->post('date');
			$Complain=$this->input->post('complain');
			$ip=file_get_contents("http://ipecho.net/plain");
			$lonlat_info=$this->input->post('lonlat_info');
			$lastID=$this->HamroSamajModel->complainReg($cName,$vName,$Email,$Contact,$date,$Complain,$ip,$lonlat_info);
			$this->session->set_userdata("complainID",$lastID);
			$state=$Complain." (Complain Initiated)";
			$this->HamroSamajModel->complainStatus($lastID,$date,$state);
			$this->session->set_flashdata("message","Complain recorded Sucessfully with refrence code <b>".$lastID)."</b>";
			//$this->session->set_flashdata("message","Your complain has been registered sucessfully");
			// $data=$this->HamroSamajModel->retriveComplain();
			// if($data->num_rows()==1)
			// {
			// 	$rec = $data->row();
			// 	$this->session->set_flashdata("message",$rec->CId);
			// 	//$this->session->set_userdata("userID",$rec->userID);
			// }
			// //$this->load->view('admin/user/index',$data);
			
			
			// //$this->session->set_flashdata("message","Complain recorded Sucessfully with refrence code".var_dump($data));
			// redirect('Complain/index');
			// //$this->load->view('Complain/complainStatus',$data);
		}
		$this->load->view('Complain/index');
	

	}

	public function status()
	{
		if(isset($_POST['track']))
		{
			$complainID=$_POST['track'];
		}
		else $complainID=$this->session->userdata('complainID');
		$data['users']=$this->HamroSamajModel->retriveComplainState($complainID);
		$this->load->view('Complain/complainStatus',$data);
	}
	public function search($complainID)
	{
		if (isset($_GET['track']) && $_GET['action']==$complainID)
		$data['users']=$this->HamroSamajModel->retriveComplainState($complainID);
		$this->load->view('Complain/complainStatus',$data);
	}
	public function viewById($complainID)
	{
		$data['users']=$this->HamroSamajModel->retriveComplainState($complainID);
		$this->load->view('Complain/complainStatus',$data);
	}

		
	
}
?>