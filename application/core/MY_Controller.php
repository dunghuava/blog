<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Info_M');
	}
	public function include($page=array())
	{
		session_start();
		
		if (!$this->session->has_userdata('admin_infor')){
			redirect(base_url('admin/login'),'location');
		}
		$this->admin_infor = $this->session->get_userdata('admin_infor');
		$data['admin_infor']=$this->admin_infor['admin_infor'];
        $data['data']=$page;
		$this->load->view('admin/layout',$data);
	}
	public function load($page=array()){

		$data['data']=$page;
		$data['info'] = $this->Info_M->all();
		$this->load->view('header', $data);
		$this->load->view('pages/'.$data['data']['path'],$data);
		$this->load->view('footer', $data);
	}
}
