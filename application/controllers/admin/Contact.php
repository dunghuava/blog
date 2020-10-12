<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Contact_M');
	}

	public function index()
	{
		$data['page_title']='Tất cả liên hệ';
		$data['list_contact']=$this->Contact_M->all('','desc');
		$data['path']='contact/index';
        
		$this->include($data);
	}

	public function details($id)
	{
		$info_contact = $this->Contact_M->find(['id' => $id]);

		
		$data_update = array(
			'kiem_tra' => 1, 
		);

		$this->Contact_M->update(['id' => $id],$data_update);
			
		$data['contact'] = $info_contact;
		$data['page_title']='Chi tiết liên hệ';
		$data['path']='contact/details';
        
		$this->include($data);
	}

	public function destroy()
	{
		$id = $this->input->post('id');
		$this->Contact_M->delete(['id' => $id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */