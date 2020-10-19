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
		$this->load->model('Content_M');
		$this->load->model('Info_M');
	}
	
	public function index($alias="")
	{	
		
		$alias = str_replace('.html','',$alias);
		$page = $this->Category_M->one(['alias_vn'=>$alias]);
				
		if (!empty ($alias) && !empty($page) && $page['module_id']!=3){
			switch ($page['module_id']){
				case 1 : $this->blog($alias);break;
				case 2 : $this->bang_gia();break;
				case 3 : $this->lien_he();break;
				case 4 : $this->tinh_nang($alias);break;
			}
		}else{
			// 404
			$info = $this->Info_M->one(['id'=>1]);
			$seo = array(
				'title'=>'Trang chủ',
				'description'=>strip_tags($info['mo_ta_vn']),
				'image'=>$info['logo']
			);
			$data['seo'] = $seo;
			$data['list_question']=$this->Question_M->all();
			$data['list_customer']=$this->Customer_M->all(['loai' => 1]);
			$data['list_feedback']=$this->Feedback_M->all();
			$data['path']='index';
			$this->load($data);
		}
	}
	public function blog($alias = '')
	{	

		$alias = str_replace('.html','',$alias);
		$info_category = $this->Category_M->find(['alias_vn'=>$alias]);
		$data['info_category']= $info_category;

		$seo = array(
			'title'=>$info_category['ten_vn'],
			'description'=>strip_tags($info_category['mo_ta_vn']),
			'image'=>$info_category['hinh_anh']
		);
		$data['seo'] = $seo;

		if ($info_category['id_loai'] ==0) {
			$data['list_blog']=$this->Post_M->getListPost_byCategory($info_category['id']);
			$data['list_blog_nearest']=$this->Post_M->getListPost_byCategory($info_category['id']);
			$data['list_category']=$this->Category_M->all(['id_loai'=>$info_category['id']]);
		}
		else{
			$data['list_blog']=$this->Post_M->all(['id_loai'=>$info_category['id']],'desc');
			$data['list_blog_nearest']=$this->Post_M->getListPost_byCategory($info_category['id_loai']);
			$data['list_category']=$this->Category_M->all(['id_loai'=>$info_category['id_loai']]);
		}

		
		
		
		
		$data['path']='blog';
		$this->load($data);
	}
	public function blog_detail($alias = '')
	{
		$alias = str_replace('.html','',$alias);
		$id = get_id($alias);
		$data['info_blog']=$this->Post_M->find(['id'=>$id]);

		$seo = array(
			'title'=>$data['info_blog']['ten_vn'],
			'description'=>strip_tags($data['info_blog']['mo_ta_vn']),
			'image'=>$data['info_blog']['hinh_anh']
		);
		$data['seo'] = $seo;
		
		$info_category = $this->Category_M->find(['id'=>$data['info_blog']['id_loai']]);
		$data['info_category']= $info_category;

		if ($info_category['id_loai'] ==0) {
			$data['list_blog']=$this->Post_M->getListPost_byCategory($info_category['id']);
			$data['list_blog_nearest']=$this->Post_M->getListPost_byCategory($info_category['id']);
			$data['list_category']=$this->Category_M->all(['id_loai'=>$info_category['id']]);
		}
		else{
			$data['list_blog']=$this->Post_M->all(['id_loai'=>$info_category['id']],'desc');
			$data['list_blog_nearest']=$this->Post_M->getListPost_byCategory($info_category['id_loai']);
			$data['list_category']=$this->Category_M->all(['id_loai'=>$info_category['id_loai']]);
		}
		$data['path']='blog-detail';

		$this->load($data);
	}
	public function bang_gia()
	{
		$seo = array(
			'title'=>'Bảng giá',
			'description'=>strip_tags('Bảng giá'),
			'image'=>''
		);
		$data['seo'] = $seo;
		$data['path']='bang-gia';
		$this->load($data);
	}

	public function lien_he()
	{
		$seo = array(
			'title'=>'Liên hệ hợp tác',
			'description'=>strip_tags('Liên hệ hợp tác'),
			'image'=>''
		);
		$data['seo'] = $seo;
		$data['path']='lien-he';
		$this->load($data);
	}
	public function tinh_nang($alias="")
	{
		$alias = str_replace('.html','',$alias);
		$cate = $this->Category_M->one(['alias_vn'=>$alias]);
		$seo = array(
			'title'=>$cate['ten_vn'],
			'description'=>strip_tags($cate['mo_ta_vn']),
			'image'=>$cate['hinh_anh']
		);
		$data['seo'] = $seo;

		$data['path']='tinh-nang';
		$data['id']=$this->Category_M->one(['alias_vn'=>$alias])['id'];
		$this->load($data);
	}

	public function customer_care()
	{
		$seo = array(
			'title'=>'Liên hệ hợp tác',
			'description'=>strip_tags('Liên hệ hợp tác'),
			'image'=>''
		);
		$data['seo'] = $seo;
		$data['path']='lien-he';
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
