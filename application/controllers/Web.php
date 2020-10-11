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
		$this->load->model('Post_M');
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
			$data['list_feedback']=$this->Feedback_M->all();
			$data['path']='index';
			$this->load($data);
		}
	}
	public function blog($alias = '')
	{	
		$info_category = $this->Category_M->find(['alias_vn'=>$alias]);
		if ($alias!='') {
			$data['list_blog']=$this->Post_M->all(['id_loai'=>$info_category['id']],'desc');
		}else{
			$data['list_blog']=$this->Post_M->all('','desc');
		}

		$data['list_blog_nearest']=$this->Post_M->all('','desc');
		
		$data['list_category']=$this->Category_M->all(['id_loai'=>6]);
		$data['path']='blog';
		$this->load($data);
	}
	public function blog_detail($alias = '')
	{

		$id = get_id($alias);
		$data['info_blog']=$this->Post_M->find(['id'=>$id]);
		$data['list_blog_nearest']=$this->Post_M->all('','desc');
		$data['list_category']=$this->Category_M->all(['id_loai'=>6]);
		$data['path']='blog-detail';
		$this->load($data);
	}
	public function bang_gia()
	{
		$data['path']='bang-gia';
		$this->load($data);
	}
}
