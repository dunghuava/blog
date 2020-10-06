<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Post_M');
		$this->load->model('Category_M');
	}

	public function index()
	{
		$data['page_title']='Tất cả blog';
		$data['list_post']=$this->Post_M->all('','desc');
		$data['path']='post/index';
        
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

			

			$date_post_format = substr($post['ngay_dang'],  6, 4). substr($post['ngay_dang'],  3, 2).substr($post['ngay_dang'],  0, 2);

			$data_insert = array(
				'id_loai' => $post['id_loai'], 
				'ten_vn' => $post['ten_vn'], 
				'alias_vn' => $post['alias_vn'], 
				'mo_ta_vn' => $post['mo_ta_vn'], 
				'noi_dung_vn' => $post['noi_dung_vn'], 
				'nguon' => $post['nguon'], 
				'keyword_vn' => $post['keyword_vn'],
				'noi_bac' => 0, 
				'hien_thi' => $post['hien_thi'], 
				'ngay_dang' => $date_post_format,
				'hinh_anh' => $filename, 
			);

			$this->Post_M->create($data_insert);

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/post/add/'),'location');

		}
		
		$list_category = $this->get_option_category(1);

		// print_r($list_category);die();
		$data['arr_category'] = $list_category;
		$data['page_title']='Tạo mới blog';
		$data['path']='post/add';
        
		$this->include($data);
	}

	public function edit($id)
	{
		$info_blog = $this->Post_M->find(['id' => $id]);

		$post = $this->input->post();

		if ($this->input->post()) {
			if (!empty($_FILES['hinh_anh']['name'])){
				$file = $_FILES['hinh_anh'];
				$filename = md5($file['name'].time());
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
				@unlink('upload/images/'.$info_blog['hinh_anh']);

			}else{
				$filename = $info_blog['hinh_anh'];
			}

			if ($post['hien_thi'] == '') {
				$post['hien_thi'] = 0;
			}

			

			$date_post_format = substr($post['ngay_dang'],  6, 4). substr($post['ngay_dang'],  3, 2).substr($post['ngay_dang'],  0, 2);

			$data_update = array(
				'id_loai' => $post['id_loai'], 
				'ten_vn' => $post['ten_vn'], 
				'alias_vn' => $post['alias_vn'], 
				'mo_ta_vn' => $post['mo_ta_vn'], 
				'noi_dung_vn' => $post['noi_dung_vn'], 
				'nguon' => $post['nguon'], 
				'keyword_vn' => $post['keyword_vn'],
				'hien_thi' => $post['hien_thi'], 
				'ngay_dang' => $date_post_format,
				'hinh_anh' => $filename, 
			);


			$this->Post_M->update(['id' => $id],$data_update);

			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/post/edit/'.$id),'location');

		}

		$list_category = $this->get_option_category(1);
		$data['arr_category'] = $list_category;
		$data['blog'] = $info_blog;
		$data['page_title']='Chỉnh sửa blog';
		$data['path']='post/edit';
        
		$this->include($data);
	}

	public function update(){
		$post = $this->input->post();
		$this->Post_M->update(['id'=>$post['id']],$post);
	}

	public function destroy()
	{
		$id = $this->input->post('id');
		$this->Post_M->delete(['id' => $id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

	public function get_option_category($cate_module_id=0){
		$where['id_loai']=0;
		// if ($cate_module_id!=0){
		// 	$where['cate_module_id']=$cate_module_id;
		// }
		$oder_by= 'asc';
		$all = $this->Category_M->all($where,$oder_by);
		$str='';
		foreach ($all as $val){
			// if ($val['module_id'] == $cate_module_id) {
			// 	$str.='<option value="'.$val['id'].'">'.$val['ten_vn'].'</option>';
			// }
			
			$sub1 = $this->Category_M->all(['id_loai'=>$val['id'],'module_id'=> $cate_module_id],$oder_by);
			// echo'<pre>';
			// print_r($sub1);
			if (count($sub1) >0){
				foreach ($sub1 as $val1){
					$str.='<option value="'.$val1['id'].'">|__'.$val1['ten_vn'].'</option>';
					$sub2 = $this->Category_M->all(['id_loai'=>$val1['id'],'module_id'=> $cate_module_id],$oder_by);
					if (count($sub2) >0){
						foreach ($sub2 as $val2){
							$str.='<option value="'.$val2['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val2['ten_vn'].'</option>';
							$sub3 = $this->Category_M->all(['id_loai'=>$val2['id'],'module_id'=> $cate_module_id],$oder_by);
							if (count($sub3) >0){
								foreach ($sub3 as $val3){
									$str.='<option value="'.$val3['id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val3['ten_vn'].'</option>';
									$sub4 = $this->Category_M->all(['id_loai'=>$val3['id'],'module_id'=> $cate_module_id],$oder_by);
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

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */