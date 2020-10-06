<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Question_M');
	}

	public function index()
	{
		$data['page_title']='Tất cả câu hỏi thường gặp';
		$data['list_question']=$this->Question_M->all('','desc');
		$data['path']='question/index';
        
		$this->include($data);
	}

	public function add()
	{

		$post = $this->input->post();

		if ($this->input->post()) {
	
			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}

			$data_insert = array(
				'cau_hoi_vn' => $post['cau_hoi_vn'], 
				'dap_an_vn' => $post['dap_an_vn'], 
				'hien_thi' => $post['hien_thi'], 
			);

			$this->Question_M->create($data_insert);

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/question/'),'location');

		}
		
		$data['page_title']='Tạo mới câu hỏi';
		$data['path']='question/add';
        
		$this->include($data);
	}

	public function edit($id)
	{
		$info_question = $this->Question_M->find(['id' => $id]);

		$post = $this->input->post();

		if ($this->input->post()) {

			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}

			$data_update = array(
				'cau_hoi_vn' => $post['cau_hoi_vn'], 
				'dap_an_vn' => $post['dap_an_vn'], 
				'hien_thi' => $post['hien_thi'], 
			);

			$this->Question_M->update(['id' => $id],$data_update);

			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/question/'),'location');

		}

		$data['question'] = $info_question;
		$data['page_title']='Chỉnh sửa câu hỏi';
		$data['path']='question/edit';
        
		$this->include($data);
	}

	public function update(){
		$post = $this->input->post();
		$this->Question_M->update(['id'=>$post['id']],$post);
	}

	public function destroy()
	{
		$id = $this->input->post('id');
		$this->Question_M->delete(['id' => $id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */