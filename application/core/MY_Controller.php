<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/
	 *	- or -
	 * 		http://example.com/index.php/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function include($page=array())
	{
        $data['data']=$page;
		$this->load->view('admin/layout',$data);
	}
	public function load($page=array()){

		$data['data']=$page;
		$this->load->view('header', $data);
		$this->load->view('pages/'.$data['data']['path'],$data);
		$this->load->view('footer', $data);
	}
}
