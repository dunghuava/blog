<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('Account_M');
	}
	public function login()
	{
		session_start();
		
		if ($this->session->has_userdata('admin_infor')){
			redirect(base_url('admin/category'),'location');
		}
		$post = $this->input->post();
		if ($post){
			$user_name = $post['username'];
			$user_password = md5($post['password']);
			if (isset($post['account'])){
				$is_login = $this->Account_M->CheckLogin($user_name,$user_password,1);
				if ($is_login){
					$infor = $this->Account_M->one(['user_name'=>$user_name,'is_admin'=>'1']);
					//print_r($infor);die();
					$this->session->set_userdata('admin_infor', $infor);
					redirect(base_url('admin'),'location');

				}else{
					$this->session->set_flashdata('reponse','Tên đăng nhập hoặc mật khẩu không đúng.');
				}
			}
		}
		$this->load->view('admin/login');
	}

	public function changePass()
	{
		if ($this->session->has_userdata('admin_infor')){
			$this->admin_infor = $this->session->get_userdata('admin_infor');
			$post = $this->input->post();
			if ($post){

				$user_password = md5($post['user_password']);

				$this->Account_M->update(['user_id' => $this->admin_infor['admin_infor']['user_id']],['user_password' => $user_password]);

				$status = array(
					'code'=>'success',
					'message'=>'Đã thay đổi'
				);
				$this->session->set_flashdata('reponse',$status);
				redirect(base_url('admin/changePass'),'location');

			}
			$data['page_title']='Đổi mật khẩu';
			$data['path']='change_pass';
			$this->include($data);
		}else{
			redirect(base_url('admin/login'),'location');
		}
		
	}

	public function logout()
	{
		$this->session->unset_userdata('admin_infor');
		redirect(base_url().'admin/login','location');
	}
}
