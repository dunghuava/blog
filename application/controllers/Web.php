<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Question_M');
		$this->load->model('Feedback_M');
		$this->load->model('Customer_M');
		$this->load->model('Category_M');
	}
	
	public function index($alias="")
	{	
		$alias = trim($alias,'.html');
		$page = $this->Category_M->one(['alias_vn'=>$alias]);
		if (!empty ($alias) && !empty($page)){
			switch ($page['module_id']){
				case 0 : break;
				case 1 : $this->blog();break;
				case 2 : $this->bang_gia();break;
				default : break;
			}
		}else{
			// 404
			$data['list_question']=$this->Question_M->all();
			$data['list_customer']=$this->Customer_M->all(['loai' => 1]);
			$data['path']='index';
			$this->load($data);
		}
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
