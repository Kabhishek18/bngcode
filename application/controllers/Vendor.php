<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Vendor extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('vendor_model');
		$this->load->library('session');
		$this->load->helper('date');
		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	public function Index()
	{
		$this->load->view('vendor/inc/header');
		$this->load->view('vendor/index');
		$this->load->view('vendor/inc/footer');
	}

	public function Authenticate()
	{
		$auth['user_email']=$this->input->post("email");
		$auth['user_password']=md5($this->input->post("password"));	
		$data=$this->vendor_model->Authentication($auth);
		if($data)
		 {
	  	 	$this->session->set_userdata('user_account',$data);
	  	 	$this->session->set_flashdata('success', 'Welcome User');
			redirect('dashboard');
		  	 }
	  	 else{
	  	 	$red['user_email']=$auth['user_email'];
			$emailcheck =$this->vendor_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('warning', 'Wrong Password!');
					redirect('');
				}else{
		  	 		$this->session->set_flashdata('warning', 'Invalid Credential');
		  	 		redirect('');
	  	 		}
	  	 }		
	}

	//Logout
	public function Logout()
	{
		if(session_destroy())
		{
		$this->session->unset_userdata('user_account');	 
		$this->session->set_flashdata('success', 'Successfully Logout');  
		$this->session->sess_destroy();
		redirect('');
		}
	}

	//Register
	public function Registeration()
	{
		
		$auth['user_name']=$this->input->post("user_name");	
		$auth['user_email']=$this->input->post("user_email");
		$auth['user_password']=md5($this->input->post("user_password"));	
		$auths['user_cpassword']=md5($this->input->post("user_cpassword"));
		$emailcheck =$this->vendor_model->CheckEmail($auth);
		if ($emailcheck==true ) {
			$this->session->set_flashdata('warning', 'EmailID Already Exist!');
			redirect('register');
		}


		$auth['user_token']=generateUUID();	
		$auth['user_type']='user';
		$auth['user_status']='active';
		$auth['user_verified']='unverified';

		$messagebomb = 'Click to verify <a href="'.base_url().'verify/'.$auth['user_token'].'/'.$auth['user_name'].'/'.generateUUID().'" >Link</a>';

		if ($auths['user_cpassword'] == $auth['user_password']) {
				$insert =$this->vendor_model->InsertUsers($auth);	
					if ($insert) {

						$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'mail.kabhishek18.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'developer@kabhishek18.com';
						$mail->Password = 'developer@987';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
						$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

						// Add a recipient
						$mail->addAddress($auth['user_email']);

						// Add cc or bcc 
						//$mail->addCC('');
						//$mail->addBCC('pushapnaraingupta@gmail.com');

						// Email subject
						$mail->Subject =  'Mail Verfication';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $messagebomb;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						
						$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Registration, Please Verfiy Your Email</span>');
						redirect('');		
					}
					else{
						$this->session->set_flashdata('success', '<span style="color:red">Sorry, Something Misfortune Happen! </span>');
						redirect('');	
					}
				
			


		}
		else{
			$this->session->set_flashdata('warning', '<span>Sorry, Your Password Did not Match</span>');
			redirect('');	

		}
	}

	//Email Verification
	public function EmailVerification()
	{
		$user_token =$this->uri->segment(2,0);
		$user_name =$this->uri->segment(3,0);
		$user_verified ='verfied';
		 $update =$this->vendor_model->EmailVerify($user_token,$user_verified);
		if ($update) {

			$this->session->set_flashdata('success', '<span style="color:green">Congratulation, Email Verified Successfully, <p>Please Click to Login <a href="'.base_url().'login">Login</a></p></span>');
			redirect('');	

			}
		else{
			$this->session->set_flashdata('warning', '<span>Sorry, Verification Failed</span>');
			redirect('');	
		}			
	}

	//Email Reverfication
	public function ResendEmailVerification()
	{
		$auth= $this->session->user_account;
		
		$messagebomb = 'Click to verify <a href="'.base_url().'verify/'.$auth['user_token'].'/'.$auth['user_name'].'/'.generateUUID().'" >Link</a>';
		$this->load->library('phpmailer_lib');

				// PHPMailer object
				$mail = $this->phpmailer_lib->load();

				// SMTP configuration
				$mail->isSMTP();
				$mail->Host     = 'mail.kabhishek18.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'developer@kabhishek18.com';
				$mail->Password = 'developer@987';
				$mail->SMTPSecure = 'tls';
				$mail->Port     = 587;

				$mail->setFrom('developer@kabhishek18.com', 'developer@kabhishek18.com');
				$mail->addReplyTo('developer@kabhishek18.com', 'developer@kabhishek18.com');

				// Add a recipient
				$mail->addAddress($auth['user_email']);

				// Add cc or bcc 
				//$mail->addCC('');
				//$mail->addBCC('pushapnaraingupta@gmail.com');

				// Email subject
				$mail->Subject =  'Mail Verfication';

				// Set email format to HTML
				$mail->isHTML(true);

				// Email body content
				$mailContent = $messagebomb;
				$mail->Body = $mailContent;

				// Send email
				if(!$mail->send()){
					$mail->ErrorInfo;

				}
				$this->session->unset_userdata('user_account');	   
				$this->session->sess_destroy();	
				$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Reverification, Please Verfiy Your Email</span>');	
				redirect('');			
	}

	public function Dashboard()
	{
		$data= $this->session->user_account;
		if($data['user_verified'] =='verified'){
			$this->load->view('vendor/inc/header');
			$this->load->view('vendor/inc/nav');
			$this->load->view('vendor/dashboard',$data);
			$this->load->view('vendor/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('');	
		}
	}
}
