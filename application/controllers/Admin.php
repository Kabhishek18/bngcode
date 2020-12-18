<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('admin_model');
		$this->load->library('session');
		$this->load->helper('date');
		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	public function Index()
	{	$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			redirect('admin/dashboard');
		}	
		$this->load->view('admin/inc/header');
		$this->load->view('admin/index');
		$this->load->view('admin/inc/footer');
	}

	public function Authenticate()
	{
		$auth['user_email']=$this->input->post("email");
		$auth['user_password']=md5($this->input->post("password"));	
		$data=$this->admin_model->Authentication($auth);
		if($data)
		 {
	  	 	$this->session->set_userdata('admin_account',$data);
	  	 	$this->session->set_flashdata('success', 'Welcome User');
			redirect('admin/dashboard');
		  	 }
	  	 else{
	  	 	$red['user_email']=$auth['user_email'];
			$emailcheck =$this->admin_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('warning', 'Wrong Password!');
					redirect('admin');
				}else{
		  	 		$this->session->set_flashdata('warning', 'Invalid Credential');
		  	 		redirect('admin');
	  	 		}
	  	 }		
	}

	//Logout
	public function Logout()
	{
		if(session_destroy())
		{
		$this->session->unset_userdata('admin_account');	 
		$this->session->set_flashdata('success', 'Successfully Logout');  
		$this->session->sess_destroy();
		redirect('admin');
		}
	}


	public function Dashboard()
	{
		$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/nav',$data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
	}
}
