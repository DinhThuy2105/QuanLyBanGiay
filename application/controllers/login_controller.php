<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->library('session');
         $this->load->model('model_user');
      } 
	public function index()
	{	
		$user = $this->input->post('username');
		$pw = $this->input->post('password');
		$result['data'] = $this->model_user->getByUsPw($user,$pw);
		if(count($result['data'])==0){
			$result['heading'] = 'Lỗi đăng nhập!';
			$result['message'] = 'Sai user password vui lòng đăng nhập lại!';
			$this->load->view('errors/html/error_genneral',$result);
			return false;
		}
		$this->session->set_userdata($result['data']);
		redirect('/', 'refresh');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
}
