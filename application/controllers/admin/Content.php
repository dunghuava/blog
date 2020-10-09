<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Content
	 *	- or -
	 * 		http://example.com/index.php/Content/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Content/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Content_M');
	}
	public function index()
	{
        $data['page_title']='Nội dung khác';
		$data['path']='content/index';
		if (isset($_GET['filter'])){
			$data['filter']=$_GET['filter'];
		}
		if (isset($data['filter']) && $data['filter']>0){
			$data['list_content']=$this->Content_M->all(['id'=>$data['filter']]);
		}else{
			$data['list_content']=$this->Content_M->all(['id_loai'=>0]);
		}
		$this->include($data);
	}
	public function add()
	{
        $data['page_title']='Thêm nội dung';
		$data['path']='content/add';
		$data['cate']=$this->Content_M->all(['id_loai'=>0]);
		$post = $this->input->post();

		if ($post){
			$value = array(
				'ten_vn'		=>$post['ten_vn'],
				'mo_ta_vn'		=>$post['mo_ta_vn'],
				'noi_dung_vn'	=>$post['noi_dung_vn'],
				'id_loai'		=>$post['id_loai'],
				'hien_thi'		=>isset($post['hien_thi']) ? 1:0,
			);
			if (isset($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				if (move_uploaded_file($file['tmp_name'],$path)){
					$value['hinh_anh']=$filename;
				}
			}
			$this->Content_M->create($value);
			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu nọi dung'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/content'),'location');
		}
		$this->include($data);
	}
	function edit($id=0){
        $data['page_title']='Sửa nội dung';
		$data['path']='content/add';
		$data['cate']=$this->Content_M->all(['id_loai'=>0]);
		$data['content']=$this->Content_M->one(['id'=>$id]);

		$post = $this->input->post();

		if ($post){
			$value = array(
				'ten_vn'		=>$post['ten_vn'],
				'mo_ta_vn'		=>$post['mo_ta_vn'],
				'noi_dung_vn'	=>$post['noi_dung_vn'],
				'id_loai'		=>$post['id_loai'],
				'hien_thi'		=>isset($post['hien_thi']) ? 1:0,
			);
			if (isset($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				if (move_uploaded_file($file['tmp_name'],$path)){
					$value['hinh_anh']=$filename;
					unlink('upload/images/'.$post['old_img']);
				}
			}
			$this->Content_M->update(['id'=>$id],$value);
			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu nọi dung'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/content/edit/'.$id),'location');
		}
		$this->include($data);
	}
	public function destroy(){
		$check = $this->Content_M->one(['id'=>$this->input->post('id')]);
		if ($check['id_loai']==0){
			$get = $this->Content_M->all(['id_loai'=>$check['id']]);
			foreach ($get as $cld){
				$this->Content_M->update(['id'=>$cld['id']],['id_loai'=>0]);
			}
		}
		$this->Content_M->delete(['id'=>$this->input->post('id')]);
	}
	public function update(){
		$post = $this->input->post();
		$this->Content_M->update(['id'=>$post['id']],$post);
	}
}
