<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crime extends CI_Controller {
	
	public function __construct()
	{
		parent::__Construct();
		$this->load->model('HamroSamajModel');
	}
	public function index()
	{
		$data['users']=$this->HamroSamajModel->complain();
		$this->load->view('crime/index',$data);
	}
	public function state()
	{
		$this->load->view('Crime/Ack');
	}
}