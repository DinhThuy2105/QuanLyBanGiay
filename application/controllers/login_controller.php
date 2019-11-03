<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_controller extends CI_Controller {

	function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->library('session');
		 $this->load->model('model_user');
		 $this->load->model('model_customer');
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

	public function register()
	{	
		$tenkhachhang = $this->input->post('tenkhachhang');
		$username = $this->input->post('username');
		$sex = $this->input->post('sex');
		$address = $this->input->post('address');
		$birthdate = $this->input->post('birthdate');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$day = date('Y-m-d H:i:s');
				$db = array('tenkhachhang' => $tenkhachhang,
							'gioitinh' => $sex,
							'diachi'=> $address,
							'ngaysinh' => $birthdate,
							'sodt' => $phone,
							'email' => $email,
							'createdDate' => $day);
				
		$dataInput = $this->model_customer->insertcustomer($db);
		echo $dataInput;
		$db = array('idkh' => $dataInput,
							'username' => $username,
							'password'=> $password,
							'trangthai' => 1,
							'idrole' => 3,
							'createdDate' => $day);
		$dataInput = $this->db->insert('tbl_taikhoan',$db);

		$result['data'] = $this->model_user->getByUsPw($username,$password);
		$this->session->set_userdata($result['data']);
		redirect('/', 'refresh');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/', 'refresh');
	}
}
