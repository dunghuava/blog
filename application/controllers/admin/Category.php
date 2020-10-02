<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Category
	 *	- or -
	 * 		http://example.com/index.php/Category/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Category/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['page_title']='Danh mục';
        $data['path']='category/index';
        
		$this->include($data);
	}
	public function add()
	{
		$data['page_title']='Tạo mới danh mục';
        $data['path']='category/add';
        
		$this->include($data);
	}
}
