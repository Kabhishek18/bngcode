<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Front extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('front_model');
		$this->load->library('session');
		$this->load->helper('date');
		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	public function Index()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/index');
		$this->load->view('front/inc/footer');
	}

	public function Privacy()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/privacy');
		$this->load->view('front/inc/footer');
	}

	public function About()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/about');
		$this->load->view('front/inc/footer');
	}

	public function Terms()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/termsandcondition');
		$this->load->view('front/inc/footer');
	}

	public function ProductListing()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/productlisting');
		$this->load->view('front/inc/footer');
	}


	public function QuerySubmit()
	{

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$message = $this->input->post('message');

		$this->load->library('phpmailer_lib');
		$messagebomb ='Username:'.$name.'<br>'.'Email:'.$email.'<br>'.'Phone:'.$phone.'<br>'.'message:'.$message.'<br>';
			// PHPMailer object
			$mail = $this->phpmailer_lib->load();

			// SMTP configuration
			$mail->isSMTP();
			$mail->Host     = 'mail.go2bng.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'no-reply@go2bng.com';
			$mail->Password = 'no-reply@987';
			$mail->SMTPSecure = 'tls';
			$mail->Port     = 587;

			$mail->setFrom('no-reply@go2bng.com', 'no-reply@go2bng.com');
			$mail->addReplyTo('no-reply@go2bng.com', 'no-reply@go2bng.com');

			// Add a recipient
			$mail->addAddress('support@techcentrica.com');

			// Add cc or bcc 
			//$mail->addCC('');
			//$mail->addBCC('pushapnaraingupta@gmail.com');

			// Email subject
			$mail->Subject =  'Query Mail';

			// Set email format to HTML
			$mail->isHTML(true);

			// Email body content
			$mailContent = $messagebomb;
			$mail->Body = $mailContent;

			// Send email
			if(!$mail->send()){
				$mail->ErrorInfo;

			}
			
			$this->session->set_flashdata('success', 'Thank You, Your Query Has been Submitted');
			redirect('');	
	}


	public function SearchMain()
	{	
		$typesearch = $this->input->post('typesearch');
		$search = $this->input->post('search');
		if($typesearch == 'category'){
			$value = $this->front_model->GetCategorySearch($search);	
			if($value){
				$data['categories'] =$value;
			}
			else{
				$this->session->set_flashdata('warning', $search.' No Similar Category Found');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		elseif($typesearch == 'subcategory'){
			$value = $this->front_model->GetSubCategorySearch($search);	
			if($value){
				$data['subcategories'] =$value;
			}
			else{
				$this->session->set_flashdata('warning', $search.' No Similar Category Found');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		elseif($typesearch == 'buyers'){
			$value = $this->front_model->GetUserSearch($search,'user');	
			if($value){
				$data['buyers'] =$value;
			}
			else{
				$this->session->set_flashdata('warning', $search.' No Similar buyer Found');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		elseif($typesearch == 'sellers'){
			$value = $this->front_model->GetUserSearch($search,'vendor');	
			if($value){
				$data['sellers'] =$value;
			}
			else{
				$this->session->set_flashdata('warning', $search.' No Seller Seller Found');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else{
			$data ='';
		}
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/search',$data);
		$this->load->view('front/inc/footer');
	}


	public function Authenticate()
	{
		$auth['user_email']=$this->input->post("email");
		$auth['user_password']=md5($this->input->post("password"));	
		$data=$this->front_model->Authentication($auth);
		if($data)
		 {
	  	 	$this->session->set_userdata('user_account',$data);
	  	 	$this->session->set_flashdata('success', 'Welcome User');
			redirect('dashboard');
		  	 }
	  	 else{
	  	 	$red['user_email']=$auth['user_email'];
			$emailcheck =$this->front_model->CheckEmail($red);
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
		$emailcheck =$this->front_model->CheckEmail($auth);
		if ($emailcheck==true ) {
			$this->session->set_flashdata('warning', 'EmailID Already Exist!');
			redirect($_SERVER['HTTP_REFERER']);
		}


		$auth['user_token']=generateUUID();	
		$auth['user_type']='user';
		$auth['user_status']='active';
		$auth['user_verified']='unverified';

		$linkurl = base_url().'verify/'.$auth['user_token'].'/'.$auth['user_name'].'/'.generateUUID();

		
		if ($auths['user_cpassword'] == $auth['user_password']) {
				$insert =$this->front_model->InsertUsers($auth);	
					if ($insert) {

						$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'smtp.mandrillapp.com';
						$mail->SMTPAuth = true;
						$mail->Username = 'Logistics';
						$mail->Password = 'k64QCLTkpGJ6NsFW5xW5mw';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('no-reply@go2bng.com', 'no-reply@go2bng.com');
						$mail->addReplyTo('no-reply@go2bng.com', 'no-reply@go2bng.com');

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
						$mailContent =  EmailMessage($auth['user_name'],$linkurl);
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						
						$this->session->set_flashdata('success', 'Thank You, For Registration, Please Verfiy Your Email');
						redirect('');		
					}
					else{
						$this->session->set_flashdata('warning', 'Sorry, Something Misfortune Happen!');
						redirect('');	
					}
				
			


		}
		else{
			$this->session->set_flashdata('warning', 'Sorry, Your Password Did not Match');
			redirect('');	

		}
	}

	//Email Verification
	public function EmailVerification()
	{
		$user_token =$this->uri->segment(2,0);
		$user_name =$this->uri->segment(3,0);
		$vendor =$this->uri->segment(4,0);
		$user_verified ='verified';
		 $update =$this->front_model->EmailVerify($user_token,$user_verified);
		if ($update) {

			$this->session->set_flashdata('success', 'Thank You For Email Verification');
				if($vendor){
				redirect('vendor/login');
				}
				else{
				redirect($_SERVER['HTTP_REFERER']);

				}
			}
		else{
			$this->session->set_flashdata('warning', '<span>Sorry, Verification Failed</span>');
				redirect($_SERVER['HTTP_REFERER']);
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
				$mail->Host     = 'mail.go2bng.com';
				$mail->SMTPAuth = true;
				$mail->Username = 'no-reply@go2bng.com';
				$mail->Password = 'no-reply@987';
				$mail->SMTPSecure = 'tls';
				$mail->Port     = 587;

				$mail->setFrom('no-reply@go2bng.com', 'no-reply@go2bng.com');
				$mail->addReplyTo('no-reply@go2bng.com', 'no-reply@go2bng.com');

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
			$this->load->view('front/inc/header');
			$this->load->view('front/inc/nav');
			$this->load->view('front/dashboard',$data);
			$this->load->view('front/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('');	
		}
	}

	public function Requirement()
	{
		$data= $this->session->user_account;
		if($data['user_verified'] =='verified'){
			$this->load->view('front/inc/header');
			$this->load->view('front/inc/nav');
			$this->load->view('front/requirement',$data);
			$this->load->view('front/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('');	
		}
	}

	public function categorysingle()
	{	
		$id =$this->uri->segment(2,0);

		$data['categories'] = $this->front_model->GetCatSub($id);
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/categorysingle',$data);
		$this->load->view('front/inc/footer');
	}

	public function Category()
	{
		$data['categories'] = $this->front_model->GetCategory();
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/category',$data);
		$this->load->view('front/inc/footer');
	}

	public function SubCategory()
	{
		if (is_numeric($this->uri->segment(2,0))) {
			$data = $this->front_model->GetSub($this->uri->segment(2,0));
			if($data){
				$value['categories'] = $this->front_model->GetCategory($data['parent_id']);
				$meta['meta'] =$value['categories']['category_meta'];
				$this->load->view('front/inc/header',$meta);
				$this->load->view('front/inc/nav');
				$this->load->view('front/subcategory',$value);
				$this->load->view('front/inc/footer');
			}
			else{
				$this->session->set_flashdata('warning', 'Url That You Are Looking For Does Not Exit');
				redirect('');
			}
		}else {
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('');
		}
	}

	public function SubProductJson()
	{
		$id=$this->input->post('matchvalue');
		$products = $this->front_model->GetSubPro($id);
		echo json_encode($products);
	}

	public function Products()
	{
		if (is_numeric($this->uri->segment(2,0))) {
			$data = $this->front_model->GetProduct($this->uri->segment(2,0));
			if($data){
				$this->load->view('front/inc/header');
				$this->load->view('front/inc/nav');
				$this->load->view('front/product',$data);
				$this->load->view('front/inc/footer');
			}
			else{
				$this->session->set_flashdata('warning', 'Url That You Are Looking For Does Not Exit');
				redirect('');
			}
		}else {
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('');
		}
	}

	public function Requirements()
	{
		$data= $this->session->user_account;
		if($data['user_verified'] =='verified'){
			$reg['uid'] =$data['id'];
			$reg['pid'] =$this->input->post('pid');
			$reg['vid'] =$this->input->post('vid');
				$vat['user_name'] =$this->input->post('user_name');
				$vat['user_email'] =$this->input->post('user_email');
				$vat['user_phone'] =$this->input->post('user_phone');
				$vat['requirement'] =$this->input->post('requirement');
			$reg['description'] =json_encode($vat);	
			$reg['date_created'] =date('y-m-d');
			$insert =$this->front_model->InsertQuery($reg);
			if($insert)
			{
				$this->session->set_flashdata('success', 'Thank you, Your Query Is Submited');
				redirect($_SERVER['HTTP_REFERER']);
			}
			else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happened');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else{
			$this->session->set_flashdata('warning', 'Please Login with Supplier');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function RequirementDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->front_model->DeleteRequirement($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect($_SERVER['HTTP_REFERER']);
		
		}
	}

	public function PageNotFound()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('404');
		$this->load->view('front/inc/footer');
	}

	//Dealer Ship Form
	public function Dealership()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/dealership');
		$this->load->view('front/inc/footer');
	}

	public function LogisticsLead()
	{
		$dir ='uploads/lead/';
		if (!is_dir($dir)) 
		{
			mkdir($dir, 0777, TRUE);
		}
		$config['upload_path'] =  $dir;
        $config['allowed_types'] = 'jpg|png|jpeg|mp4|docx|pdf';
        $config['max_size'] = 3000;
        $this->load->library('upload', $config);
		$this->upload->initialize($config);

			if($this->upload->do_upload('uploadfile')){
	 		$file= $this->upload->data();
			$_POST ['uploadfile'] =$file['file_name'];}
			else{						
			}
		$data =json_encode($_POST);
		$auth['lead']=$data;
		$auth['created_at']=date('Y-m-d h:i:s');
		$insert = $this->front_model->InsertLeads($auth);
		if($insert)
		{
			$this->session->set_flashdata('success','Thanks for Sharing Detail');
				redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('warning','Something Misfortune Happen! ');
				redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function ViewLead()
	{
		$leads['leads'] = $this->front_model->GetLeads();
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/leads',$leads);
		$this->load->view('front/inc/footer');
	}
	

}
