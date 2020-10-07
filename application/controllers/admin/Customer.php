<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_M');
	}

	public function index()
	{
		$data['page_title']='Tất cả khách hàng';
		$data['list_customer']=$this->Customer_M->all('','desc');
		$data['path']='customer/index';
        
		$this->include($data);
	}

	public function add()
	{

		$post = $this->input->post();

		if ($this->input->post()) {
			if (isset($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
			}

			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}


			$data_insert = array(
				'ten_vn' => $post['ten_vn'], 
				'hinh_anh' => $filename, 
				'hien_thi' => $post['hien_thi'], 
				
			);

			$this->Customer_M->create($data_insert);

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/customer'),'location');

		}
		
		$data['page_title']='Tạo mới khách hàng';
		$data['path']='customer/add';
        
		$this->include($data);
	}

	public function edit($id)
	{
		$info_customer = $this->Customer_M->find(['id' => $id]);

		$post = $this->input->post();

		if ($this->input->post()) {
			if (!empty($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
				@unlink('upload/images/'.$info_customer['hinh_anh']);

			}else{
				$filename = $info_customer['hinh_anh'];
			}

			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}


			$data_update = array(
				'ten_vn' => $post['ten_vn'], 
				'hinh_anh' => $filename, 
				'hien_thi' => $post['hien_thi'], 
			);


			$this->Customer_M->update(['id' => $id],$data_update);

			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/customer/edit/'.$id),'location');

		}

		$data['customer'] = $info_customer;
		$data['page_title']='Chỉnh sửa khách hàng';
		$data['path']='customer/edit';
        
		$this->include($data);
	}

	public function update(){
		$post = $this->input->post();
		$this->Customer_M->update(['id'=>$post['id']],$post);
	}

	public function destroy()
	{
		$id = $this->input->post('id');
		$this->Customer_M->delete(['id' => $id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */