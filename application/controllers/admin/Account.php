<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/Account
	 *	- or -
	 * 		http://example.com/index.php/Account/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/Account/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function check(){
		if (!isset($_SESSION['account'])){
			return false;
		}
		return true;
	}
	public function login()
	{
		if (isset($_POST['account'])){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
		}
		$this->load->view('admin/login');
	}
	public function logout()
	{
		$this->load->view('admin/login');
	}
}
