<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Question_M');
		$this->load->model('Feedback_M');
		$this->load->model('Customer_M');
	}
	
	public function index()
	{	
		$data['list_question']=$this->Question_M->all();
		$data['list_customer']=$this->Customer_M->all(['loai' => 1]);
		$data['path']='index';
		$this->load($data);
	}
	public function blog()
	{
		$data['path']='blog';
		$this->load($data);
	}
	public function blog_detail()
	{
		$data['path']='blog-detail';
		$this->load($data);
	}
	public function bang_gia()
	{
		$data['path']='bang-gia';
		$this->load($data);
	}
}
