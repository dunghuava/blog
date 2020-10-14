<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Module_M');
		$this->load->model('Category_M');
	}
	public function index()
	{
		$data['page_title']='Tất cả danh mục';
		$data['arr_category']=$this->Category_M->all(['id_loai'=>0],'asc');

		// print_r($data['arr_category']);die();
        $data['path']='category/index';
        
		$this->include($data);
	}
	public function add()
	{

		$post = $this->input->post();

		if ($post){
			// print_r($post);die();
			if (isset($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				if (move_uploaded_file($file['tmp_name'],$path)){
					$post['hinh_anh']=$filename;
				}
			}
			$check = $this->Category_M->all(['alias_vn'=>$post['alias_vn']]);
			if (count($check)>0){
				$post['alias_vn']=$post['alias_vn'].'-'.rand(100,999);
			}

			$post['stt'] = '';

			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}else{
				$post['hien_thi'] = 1;
			}
			$this->Category_M->create($post);
			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu danh mục'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/category'),'location');
		}

		$data['page_title']='Tạo mới danh mục';
		$data['arr_module']=$this->Module_M->all();
		$data['arr_category']=$this->get_option_category(0);
        $data['path']='category/add';
        
		$this->include($data);
	}


	public function edit($id)
	{
		$category = $this->Category_M->find(['id'=>$id]);
		$post = $this->input->post();

		if ($post){
			if (!empty($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
				$post['hinh_anh'] = $filename;
				@unlink('upload/images/'.$category['hinh_anh']);

			}else{
				$post['hinh_anh'] = $category['hinh_anh'];
			}

			$check = $this->Category_M->check_alias($post['alias_vn'],$id);
			if (count($check)>0){
				$post['alias_vn']=$post['alias_vn'].'-'.rand(100,999);
			}

			$post['stt'] = '';

			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}else{
				$post['hien_thi'] = 1;
			}
			$this->Category_M->update(['id'=>$id],$post);
			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu danh mục'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/category'),'location');
		}

		$data['page_title']='Chỉnh sửa danh mục';
		$data['arr_module']=$this->Module_M->all();
		$data['arr_category']=$this->get_option_category(0);
		$data['category']=$category;
        $data['path']='category/edit';
        
		$this->include($data);
	}

	public function update(){
		$post = $this->input->post();
		$this->Category_M->update(['id'=>$post['id']],$post);
	}
	
	public function get_option_category($cate_module_id=0){
		$where['id_loai']=0;
		if ($cate_module_id!=0){
			//$where['module_id']=$cate_module_id;
		}
		$oder_by= 'asc';
		$all = $this->Category_M->all($where,$oder_by);
		$str='';
		foreach ($all as $val){
			$str.='<option value="'.$val['id'].'">'.$val['ten_vn'].'</option>';
			$sub1 = $this->Category_M->all(['id_loai'=>$val['id']],$oder_by);
			if (count($sub1) >0){
				foreach ($sub1 as $val1){
					$str.='<option value="'.$val1['id'].'">|__'.$val1['ten_vn'].'</option>';
					$sub2 = $this->Category_M->all(['id_loai'=>$val1['id']],$oder_by);
					if (count($sub2) >0){
						foreach ($sub2 as $val2){
							$str.='<option value="'.$val2['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val2['ten_vn'].'</option>';
							$sub3 = $this->Category_M->all(['id_loai'=>$val2['id']],$oder_by);
							if (count($sub3) >0){
								foreach ($sub3 as $val3){
									$str.='<option value="'.$val3['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val3['ten_vn'].'</option>';
									$sub4 = $this->Category_M->all(['id_loai'=>$val3['id']],$oder_by);
									if (count($sub4) >0){
										foreach ($sub4 as $val4){
											$str.='<option value="'.$val4['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val4['ten_vn'].'</option>';
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return $str;
	}
}
