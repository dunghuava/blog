<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Post_M');
		$this->load->model('Info_M');
	}

	public function index()
	{
		$info = $this->Info_M->find(['id' => 1]);
		
		$post = $this->input->post();
		if ($this->input->post()) {

			if (!empty($_FILES['logo']['name'])){
				$logo = $_FILES['logo'];
				$filename_logo = md5($logo['name'].time());
				$path='upload/images/'.$filename_logo;
				move_uploaded_file($logo['tmp_name'],$path);
				@unlink('upload/images/'.$info['logo']);
			}else{
				$filename_logo = $info['logo'];
			}


			if (!empty($_FILES['icon']['name'])){
				$icon = $_FILES['icon'];
				$filename_icon = md5($icon['name'].time());
				$path='upload/images/'.$filename_icon;
				move_uploaded_file($icon['tmp_name'],$path);
				@unlink('upload/images/'.$info['icon']);
			}else{
				$filename_icon = $info['icon'];
			}


			$data = array(
				'id' => 1, 
				'mo_ta_vn' => $post['mo_ta_vn'], 
				'dia_chi_vn' => $post['dia_chi_vn'], 
				'facebook' => $post['facebook'], 
				'google' => $post['google'], 
				'youtube' => $post['youtube'], 
				'instagram' => $post['instagram'],
				'email' => $post['email'],
				'coppy_right_vn' => $post['coppy_right_vn'],
				'hotline' => $post['hotline'],
				'logo' => $filename_logo, 
				'icon' => $filename_icon, 
			);

			if (!empty($info)) {
				$this->Info_M->update(['id' => 1],$data);
			}else{
				
				$this->Info_M->create($data);
			}

			

			$status = array(
				'code'=>'success',
				'message'=>'Đã cập nhật'
			);

			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/info'),'location');

		}

		$data['page_title']='Thông tin site';
		$data['info']=$info;
		$data['path']='info/index';
        
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
				'chucvu_vn' => $post['chucvu_vn'], 
				'congty_vn' => $post['congty_vn'], 
				'noi_dung_vn' => $post['noi_dung_vn'], 
				'link' => $post['link'], 
				'hien_thi' => $post['hien_thi'],
				'hinh_anh' => $filename, 
			);

			$this->Feedback_M->create($data_insert);

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/feedback'),'location');

		}
		
		$data['page_title']='Tạo mới phản hồi';
		$data['path']='feedback/add';
        
		$this->include($data);
	}

	public function edit($id)
	{
		$info_feedback = $this->Feedback_M->find(['id' => $id]);

		$post = $this->input->post();

		if ($this->input->post()) {
			if (!empty($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
				@unlink('upload/images/'.$info_feedback['hinh_anh']);

			}else{
				$filename = $info_feedback['hinh_anh'];
			}

			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}


			$data_update = array(
				'ten_vn' => $post['ten_vn'], 
				'chucvu_vn' => $post['chucvu_vn'], 
				'congty_vn' => $post['congty_vn'], 
				'noi_dung_vn' => $post['noi_dung_vn'], 
				'link' => $post['link'], 
				'hien_thi' => $post['hien_thi'], 
				'hinh_anh' => $filename, 
			);


			$this->Feedback_M->update(['id' => $id],$data_update);

			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/feedback/edit/'.$id),'location');

		}

		$data['feedback'] = $info_feedback;
		$data['page_title']='Chỉnh sửa phản hồi';
		$data['path']='feedback/edit';
        
		$this->include($data);
	}

	public function update(){
		$post = $this->input->post();
		$this->Feedback_M->update(['id'=>$post['id']],$post);
	}

	public function destroy()
	{
		$id = $this->input->post('id');
		$this->Feedback_M->delete(['id' => $id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */