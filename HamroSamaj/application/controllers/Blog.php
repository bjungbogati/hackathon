<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
		public function __construct()
	{
		parent::__Construct();
		$this->load->model('HamroSamajModel');
	}
	public function index()
	{
		$data['users']=$this->HamroSamajModel->blog_post();
		$this->load->view('blog/index',$data);	
	}
}