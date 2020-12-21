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
	{	$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			redirect('vendor/dashboard');
		}	
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
	  	 	$this->session->set_userdata('vendor_account',$data);
	  	 	$this->session->set_flashdata('success', 'Welcome User');
			redirect('vendor/dashboard');
		  	 }
	  	 else{
	  	 	$red['user_email']=$auth['user_email'];
			$emailcheck =$this->vendor_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('warning', 'Wrong Password!');
					redirect('vendor');
				}else{
		  	 		$this->session->set_flashdata('warning', 'Invalid Credential');
		  	 		redirect('vendor');
	  	 		}
	  	 }		
	}

	//Logout
	public function Logout()
	{
		if(session_destroy())
		{
		$this->session->unset_userdata('vendor_account');	 
		$this->session->set_flashdata('success', 'Successfully Logout');  
		$this->session->sess_destroy();
		redirect('vendor');
		}
	}

	public function Register()
	{
		$this->load->view('vendor/inc/header');
		$this->load->view('vendor/register');
		$this->load->view('vendor/inc/footer');
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
			redirect('vendor/register');
		}


		$auth['user_token']=generateUUID();	
		$auth['user_type']='vendor';
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
						redirect('vendor');		
					}
					else{
						$this->session->set_flashdata('success', '<span style="color:red">Sorry, Something Misfortune Happen! </span>');
						redirect('vendor');	
					}
				
			


		}
		else{
			$this->session->set_flashdata('warning', '<span>Sorry, Your Password Did not Match</span>');
			redirect('vendor');	

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
			redirect('vendor');	

			}
		else{
			$this->session->set_flashdata('warning', '<span>Sorry, Verification Failed</span>');
			redirect('vendor');	
		}			
	}

	//Email Reverfication
	public function ResendEmailVerification()
	{
		$auth= $this->session->vendor_account;
		
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
				$this->session->unset_userdata('vendor_account');	   
				$this->session->sess_destroy();	
				$this->session->set_flashdata('success', '<span style="color:green">Thank You, For Reverification, Please Verfiy Your Email</span>');	
				redirect('vendor');			
	}

	public function Dashboard()
	{
		$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			$this->load->view('vendor/inc/header');
			$this->load->view('vendor/inc/nav',$data);
			$this->load->view('vendor/dashboard');
			$this->load->view('vendor/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}
	}

	public function Category()
	{
		$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			$value['datalist']=$this->vendor_model->GetCategory($data['id']);
			$this->load->view('vendor/inc/header');
			$this->load->view('vendor/inc/nav',$data);
			$this->load->view('vendor/category',$value);
			$this->load->view('vendor/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}
	}

	//Course Add View
	public function CategoryAdd()
	{
		$data = $this->session->vendor_account;
		if($data){	

				if ($data['user_type'] =='vendor') {
					$this->load->view('vendor/inc/header',$data);
					$urlid = $this->uri->segment(4,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->vendor_model->GetCategory($data['id'],$urlid);
						$this->load->view('vendor/categoryadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('vendor/categoryadd',$var);
					}

					$this->load->view('vendor/inc/footer');
				}
				else{
					$this->session->set_flashdata('warning', 'Sorry, vendor Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('vendor_account');	   
					$this->session->sess_destroy();
					redirect('vendor/dashboard');
					}	
				}
			}

		
		else{
			redirect();
		}
	}

	//Course Insert And Update
	public function Categoryinsert()
	{
		
		$data = $this->session->vendor_account;
		if($data){	

				if ($data['user_type'] =='vendor') {
					
					$reg['id']=$this->input->post("id");
					$reg['user_id'] =$data['id'];
					$reg['category_name']=$this->input->post("category_name");
					$reg['parent_id']=$this->input->post("parent_id");
					$reg['category_description']=$this->input->post("category_description");
					$reg['category_meta']=$this->input->post("category_meta");
					$reg['category_slug']=$this->input->post("category_slug");
					$reg['category_status']=$this->input->post("category_status");
					$reg['status']='Active';
						$dir ='uploads/cat/';
						if (!is_dir($dir)) {
							mkdir($dir, 0777, TRUE);
						}
					$config['upload_path'] =  $dir;
			        $config['allowed_types'] = 'jpg|png|jpeg|mp4|docx|pdf';
			        $config['max_size'] = 3000;
			        $this->load->library('upload', $config);
					$this->upload->initialize($config);

						if($this->upload->do_upload('catimg')){
				 		$file= $this->upload->data();
						$reg['category_image'] =$file['file_name'];}
						else{						
						}

					if ($reg['id'] == "") {
						$reg['date_created']=date('Y-m-d');
					}
						$reg['date_modified']= date('Y-m-d H:i:s');

					
					
						
							$insert = $this->vendor_model->ChangeCategory($reg);
							if ($insert) {
								$this->session->set_flashdata('success', 'Successfully Done');
								redirect($_SERVER['HTTP_REFERER']);
							}
							else{
								$this->session->set_flashdata('warning', 'Something Misfortune Happen');
								redirect($_SERVER['HTTP_REFERER']);	
							}
			
				}
				else{
					$this->session->set_flashdata('warning', 'Sorry, vendor Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('vendor_account');	   
					$this->session->sess_destroy();
					redirect('');
					}	
				}
			}

		
		else{
			redirect();
		}
	}

	//Course Delete
	public function CategoryDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->vendor_model->DeleteCategory($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect($_SERVER['HTTP_REFERER']);
		
		}
	}



	public function Product()
	{
		$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			$value['datalist']=$this->vendor_model->GetProduct($data['id']);
			$this->load->view('vendor/inc/header');
			$this->load->view('vendor/inc/nav',$data);
			$this->load->view('vendor/product',$value);
			$this->load->view('vendor/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}
	}

	//Course Add View
	public function ProductAdd()
	{
		$data = $this->session->vendor_account;
		if($data){	

				if ($data['user_type'] =='vendor') {
					$this->load->view('vendor/inc/header',$data);
					$urlid = $this->uri->segment(4,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->vendor_model->GetProduct($urlid);
						$this->load->view('vendor/productadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('vendor/productadd',$var);
					}

					$this->load->view('vendor/inc/footer');
				}
				else{
					$this->session->set_flashdata('warning', 'Sorry, vendor Access Only. Please Contact Your Webvendoristrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('vendor_account');	   
					$this->session->sess_destroy();
					redirect('vendor/dashboard');
					}	
				}
			}

		
		else{
			redirect();
		}
	}

	//Course Insert And Update
	public function Productinsert()
	{
		
		$data = $this->session->vendor_account;
		if($data){	

				if ($data['user_type'] =='vendor') {
					
					$reg['id']=$this->input->post("id");
					$reg['user_id'] =$data['id'];
					$reg['product_name']=$this->input->post("product_name");
					$reg['category_id']=$this->input->post("category_id");
					$reg['product_information']=$this->input->post("product_information");
					$reg['product_description']=$this->input->post("product_description");
					$reg['product_meta']=$this->input->post("product_meta");
					$reg['product_slug']=$this->input->post("product_slug");
					$reg['product_status']=$this->input->post("product_status");
					$reg['status']='Active';
						$dir ='uploads/pro/';
						if (!is_dir($dir)) {
							mkdir($dir, 0777, TRUE);
						}
					$config['upload_path'] =  $dir;
			        $config['allowed_types'] = 'jpg|png|jpeg|mp4|docx|pdf';
			        $config['max_size'] = 3000;
			        $this->load->library('upload', $config);
					$this->upload->initialize($config);

						if($this->upload->do_upload('proimg')){
				 		$file= $this->upload->data();
						$reg['product_image'] =$file['file_name'];}
						else{						
						}
						
					if ($reg['id'] == "") {
						$reg['date_created']=date('Y-m-d');
					}
						$reg['date_modified']= date('Y-m-d H:i:s');

							$insert = $this->vendor_model->ChangeProduct($reg);
							if ($insert) {
								$this->session->set_flashdata('success', 'Successfully Done');
								redirect($_SERVER['HTTP_REFERER']);
							}
							else{
								$this->session->set_flashdata('warning', 'Something Misfortune Happen');
								redirect($_SERVER['HTTP_REFERER']);	
							}
			
				}
				else{
					$this->session->set_flashdata('warning', 'Sorry, vendor Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('vendor_account');	   
					$this->session->sess_destroy();
					redirect('');
					}	
				}
			}

		
		else{
			redirect();
		}
	}

	//Course Delete
	public function ProductDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->vendor_model->DeleteProduct($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect($_SERVER['HTTP_REFERER']);
		
		}
	}
}
