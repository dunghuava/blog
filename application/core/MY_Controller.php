<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Info_M');
		$this->load->model('Contact_M');
		$this->load->model('Content_M');
		$this->load->model('Post_M');
	}
	public function include($page=array())
	{
		session_start();
		
		if (!$this->session->has_userdata('admin_infor')){
			redirect(base_url('admin/login'),'location');
		}
		$data['list_contact']=$this->Contact_M->all(['kiem_tra' => 0]);
		$this->admin_infor = $this->session->get_userdata('admin_infor');
		$data['admin_infor']=$this->admin_infor['admin_infor'];
        $data['data']=$page;
		$this->load->view('admin/layout',$data);
	}
	public function load($page=array()){

		$data['data']=$page;
		$data['info'] = $this->Info_M->all();
		$data['list_blog']=$this->Post_M->getListPost_byCategory(6);
		$data['sanpham_khac']=$this->Content_M->all(['id_loai'=>15]);
		$this->load->view('header', $data);
		$this->load->view('pages/'.$data['data']['path'],$data);
		$this->load->view('footer', $data);
	}
}
