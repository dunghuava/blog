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
		$this->load->model('Contact_M');
	}
	
	public function index($alias="")
	{	
		
		$alias = trim($alias,'.html');
		$page = $this->Category_M->one(['alias_vn'=>$alias]);
		if (!empty ($alias) && !empty($page) && $page['module_id']!=3){
			switch ($page['module_id']){
				case 0 : break;
				case 1 : $this->blog();break;
				case 2 : $this->bang_gia();break;
				case 3 : $this->lien_he();break;
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
		$alias = trim($alias,'.html');
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
		$alias = trim($alias,'.html');
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
		$data['list_customer']=$this->Customer_M->all(['loai' => 1]);
		$data['list_partner']=$this->Customer_M->all(['loai' => 2]);
		$this->load($data);
	}

	public function lien_he()
	{
		$data['path']='lien-he';
		$this->load($data);
	}
	public function tinh_nang($alias="")
	{
		$alias = trim($alias,'.html');
		$id = get_id($alias);
		$data['info_blog']=$this->Post_M->find(['id'=>$id]);
		$data['path']='tinh-nang';
		$this->load($data);
	}

	public function customer_care()
	{
		$data['list_question']=$this->Question_M->all();
		$data['path']='customer-care';
		$this->load($data);
	}

	public function addContact()
    {
        $post = $this->input->post();

        $data_insert = array(
            'doanh_nghiep' => $post['doanh_nghiep'],
            'ten' => $post['ten'], 
            'sdt' => $post['sdt'], 
            'email' => $post['email'], 
            'noi_dung' => $post['noi_dung'], 
        );

        $this->Contact_M->create($data_insert);
    }
}
