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


	public function Contact()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/contact');
		$this->load->view('front/inc/footer');
	}

	public function ReviewUs()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/reviewus');
		$this->load->view('front/inc/footer');
	}

	//Forgot Password
	public function forgotPassword($value='')
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/forgot');
		$this->load->view('front/inc/footer');
	}

	public function Pricings()
	{
		$this->load->view('front/inc/header');
		$this->load->view('front/inc/nav');
		$this->load->view('front/pricing');
		$this->load->view('front/inc/footer');
	}

	public function forgotPasswordEmail()
	{
		
		$auth['user_email']=$this->input->post("user_email");
		$emailcheck =$this->front_model->CheckEmail($auth);
		if ($emailcheck==true ) {
			$data = $this->front_model->EmailForgot($auth['user_email']);
			$linkurl = base_url().'changeuser/'.$data['user_token'].'/'.$data['user_name'].'/'.generateUUID().'/user';

			$template ='<table width="100%" cellpadding="0" cellspacing="0" border="0" id="m_-2287190302310609224m_-7533971164095270638background-table" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#ebebeb;font-size:12px">
                  <tbody>
                     <tr>
                        <td valign="top" align="center" style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
                           <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse;padding:0;margin:0 auto;width:600px">
                              <tbody>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                                          <tbody>
                                             <tr>
                                                <td align="center"  style=" font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:15px 0px 10px 5px;margin:0">
                                                   <a href="https://go2bng.com/" style="color:#3696c2;float:left;display:block" rel="noreferrer" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://go2bng.com/&amp;source=gmail&amp;ust=1612437442476000&amp;usg=AFQjCNGp8vRHo85GtG1KT4EjwDV7Yqv0Lg">
                                                   <img width="50%" height="" src="https://go2bng.com/resource/images/logo.png" alt="Go2bng.com" border="0" style=" outline:none;text-decoration:none" class="CToWUd"></a>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;border-top: 3px solid #ffce10; ">
                                          <tbody>
                                          
                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   <h3 style="text-align:left;margin:0;padding:5px 15px">Dear '.$data['user_name'].'</h3>
                                                   <h3 style="padding:5px 15px;font-family:calibri;font-weight:normal;font-size:17px;margin-bottom:10px;margin-top:10px">
                                                      You request has submitted. Please click on button to reset your password
                                                   </h3>
                                                   
                                                </td>
                                             </tr>
                                             <tr>
                                                <td style="width: 650px; font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                                   <table bgcolor="" width="100%" height="100px">
                                                      <tr>
                                                         <td></td>
                                                           <td colspan="3" style="color:#000; font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;text-align:center">
                                                            <h3 style="font-family:calibri;font-weight:normal;font-size:20px;margin-bottom:10px;margin-top:10px;text-align: center;">
                                                            <a href="'.$linkurl.'" style="background: #f19220;color:white;padding: 15px;border-radius: 10px;">
                                                                  Reset Password
                                                            </a>
                                                              </h3>

                                                         </td>
                                                         <td></td>

                                                      </tr>
                                                
                                                   </table>
                                                </td>
                                               
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;border-bottom: 3px solid #ffce10; "> 
                                          <tbody>
                                             <tr>
                                                 <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;">
                                                      <p>And as always, if you have questions or feedback for us, we love hearing from you.</p>
                                                  </td> 
                                                  <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;">
                                                      
                                                  </td>        
                                             </tr>
                                              <tr>
                                                 <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;border-bottom: 3px solid #ffce10;">
                                                      <p>Cheers,<br/>
                                                      BNG TEAM</p>
                                                  </td> 
                                                  <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;border-bottom: 3px solid #ffce10;">
                                                      <p>Follow Us: <a href="https://www.facebook.com/go2bngnetworks/">Facebook</a>
                                                      <a href="https://twitter.com/gateway_network">Twitter</a>
                                                      <a href="https://www.linkedin.com/in/business-network-gateway-ab6025205?_l=en_US">Linkdein</a>
                                                   </p>
                                                  </td>        
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                  
                        </td>
                     </tr>
                  </tbody>
               </table>';


			
						$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'smtp.sendgrid.net';
						$mail->SMTPAuth = true;
						$mail->Username = 'apikey';
						$mail->Password = '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';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('support@go2bng.com', 'support@go2bng.com');
						$mail->addReplyTo('support@go2bng.com', 'support@go2bng.com');

						// Add a recipient
						$mail->addAddress($data['user_email']);

						// Add cc or bcc 
						//$mail->addCC('');
						//$mail->addBCC('pushapnaraingupta@gmail.com');

						// Email subject
						$mail->Subject =  'Password Recovery Mail';

						// Set email format to HTML
						$mail->isHTML(true);

						// Email body content
						$mailContent = $template;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						
				$this->session->set_flashdata('success', 'Reset Link Has Been Sent To Respective Mail');
				redirect('');		
			
		}
		else{
			$this->session->set_flashdata('warning', 'EmailID Not Exist! Please Register');
			redirect('');
		}
	}

	public function ResetPassword()
	{
		$data['user_token'] =$this->uri->segment(2,0);
		$data['user_name'] =$this->uri->segment(3,0);
		$vendor =$this->uri->segment(5,0);
		
		$this->load->view('front/inc/header');
		$this->load->view('front/resetpass',$data);
		$this->load->view('front/inc/footer');	
	}


	public function ResetprofilePassword()
	{
		$data['user_token'] =$this->input->post('user_token');
		$data['user_name']=$this->input->post('user_name');
		$user['user_password'] =md5( $this->input->post('user_password')); 
		$var['user_cpassword'] = md5($this->input->post('user_cpassword')); 
		if($user['user_password'] !=$var['user_cpassword']){
			$this->session->set_flashdata('warning', 'Password Mismatch');
			redirect('changeuser/'.$data['user_token'].'/'.$data['user_name'].'/'.generateUUID().'/vendor');	
		}
		$update=$this->front_model->ResetUserData($user,$data['user_token'],$data['user_name']);
		if($update){
			$this->session->set_flashdata('success', 'Successfully Password Updated');
			redirect('');
		}else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happen');
			redirect($_SERVER['HTTP_REFERER']);	
		}
	}




	public function QuerySubmit()
	{

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$message = $this->input->post('message');

		$this->load->library('phpmailer_lib');
		$messagebomb ='<table width="100%" cellpadding="0" cellspacing="0" border="0" id="m_-2287190302310609224m_-7533971164095270638background-table" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#ebebeb;font-size:12px">
                  <tbody>
                     <tr>
                        <td valign="top" align="center" style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
                           <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse;padding:0;margin:0 auto;width:600px">
                              <tbody>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                                          <tbody>
                                             <tr>
                                                <td align="center"  style=" font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:15px 0px 10px 5px;margin:0">
                                                   <a href="https://go2bng.com/" style="color:#3696c2;float:left;display:block" rel="noreferrer" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://go2bng.com/&amp;source=gmail&amp;ust=1612437442476000&amp;usg=AFQjCNGp8vRHo85GtG1KT4EjwDV7Yqv0Lg">
                                                   <img width="50%" height="" src="https://go2bng.com/resource/images/logo.png" alt="Go2bng.com" border="0" style=" outline:none;text-decoration:none" class="CToWUd"></a>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;border-top: 3px solid #ffce10; border-bottom:  3px solid #ffce10;">
                                          <tbody>
                                             <tr>
                                                <th  style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px;margin-top: 10px"><h1>Customer Query  </h1></th>
                                                 <th  style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px ;margin-top: 10px"><h1> Mail Received</h1></th>
                                             </tr>
                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   Name :
                                                   
                                                </td>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   '.$name.'
                                                </td>
                                             </tr>
                                             
                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   Email :
                                                   
                                                </td>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   '.$email.'
                                                </td>
                                             </tr>

                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   Phone :
                                                   
                                                </td>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   '.$phone.'
                                                </td>
                                             </tr>
                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   Message :
                                                   
                                                </td>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   '.$message.'
                                                </td>

                                             </tr>
                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;margin-bottom: 50px"></td>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;margin-bottom: 50px"></td>
                                             </tr>
                                          </tbody>
                                       </table>
                                     
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                  
                        </td>
                     </tr>
                  </tbody>
               </table>';
			// PHPMailer object
			$mail = $this->phpmailer_lib->load();

			// SMTP configuration
			$mail->Host     = 'smtp.sendgrid.net';
			$mail->SMTPAuth = true;
			$mail->Username = 'apikey';
			$mail->Password = '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';
			$mail->SMTPSecure = 'tls';
			$mail->Port     = 587;

			$mail->setFrom('support@go2bng.com', 'support@go2bng.com');
			$mail->addReplyTo('support@go2bng.com', 'support@go2bng.com');

			// Add a recipient
			$mail->addAddress('support@go2bng.com');

			// Add cc or bcc 
			//$mail->addCC('');
			//$mail->addBCC('pushapnaraingupta@gmail.com');

			// Email subject
			$mail->Subject =  'Customer Contact Mail';

			// Set email format to HTML
			$mail->isHTML(true);

			// Email body content
			$mailContent = $messagebomb;
			$mail->Body = $mailContent;

			// Send email
			if(!$mail->send()){
				$mail->ErrorInfo;

			}
			
			$this->session->set_flashdata('success', 'Thank You, Your valuable request has been submitted');
			redirect('');	
	}


	public function TestQuerySubmit()
	{

		$data['author'] = $this->input->post('name');
		$data['author_email'] = $this->input->post('email');
		$data['description'] = $this->input->post('message');
		$data['date_created'] =date('y-m-d H:i:s');
		$data['status'] ='Inactive';
		$insert =$this->front_model->InsertTestimonial($data);
		if($insert){
			$this->session->set_flashdata('success', 'Successfully Submited Your Review');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happen');
			redirect($_SERVER['HTTP_REFERER']);	
		}
	}

	public function SearchMain()
	{	
		$typesearch = $this->input->post('typesearch');
		$search = $this->input->post('search');
		if($this->input->post('search')){
		if($typesearch == 'category'){
			$value = $this->front_model->GetCategorySearch($search);	
			if($value){
				$data['categories'] =$value;
			}
			else{
				$this->session->set_flashdata('warning', $search.' No Possible Result Found');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		elseif($typesearch == 'subcategory'){
			$value = $this->front_model->GetSubCategorySearch($search);	
			if($value){
				$data['subcategories'] =$value;
			}
			else{
				$this->session->set_flashdata('warning', $search.' No Possible Result Found');
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		elseif($typesearch == 'buyers'){
			$value = $this->front_model->GetUserSearch($search,'user');	
			if($value){
				$data['buyers'] =$value;
			}
			else{
				$this->session->set_flashdata('warning', $search.' No Possible Result Found');
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
		}else{
			redirect('');
		}
	}


	public function Authenticate()
	{
		$auth['user_email']=$this->input->post("email");
		$auth['user_password']=md5($this->input->post("password"));	
		$this->session->unset_userdata('user_account');	 
		
		$data=$this->front_model->Authentication($auth);
		if($data)
		 {
	  	 	$this->session->set_userdata('user_account',$data);
	  	 	$this->session->set_flashdata('success', 'Welcome User');
			redirect($_SERVER['HTTP_REFERER']);
		  	 }
	  	 else{
	  	 	$red['user_email']=$auth['user_email'];
			$emailcheck =$this->front_model->CheckEmail($red);
				if ($emailcheck==true ) {
					$this->session->set_flashdata('warning', 'Wrong Password!');
					redirect($_SERVER['HTTP_REFERER']);
				}else{
		  	 		$this->session->set_flashdata('warning', 'Invalid Credential');
		  	 		redirect($_SERVER['HTTP_REFERER']);
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
		$auth['user_phone']=$this->input->post("user_phone");
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

		$linkurl = base_url().'verify/'.$auth['user_token'].'/'.$auth['user_name'].'/'.generateUUID().'/user';




		$template ='<table width="100%" cellpadding="0" cellspacing="0" border="0" id="m_-2287190302310609224m_-7533971164095270638background-table" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#ebebeb;font-size:12px">
                  <tbody>
                     <tr>
                        <td valign="top" align="center" style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
                           <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse;padding:0;margin:0 auto;width:600px">
                              <tbody>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                                          <tbody>
                                             <tr>
                                                <td align="center"  style=" font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:15px 0px 10px 5px;margin:0">
                                                   <a href="https://go2bng.com/" style="color:#3696c2;float:left;display:block" rel="noreferrer" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://go2bng.com/&amp;source=gmail&amp;ust=1612437442476000&amp;usg=AFQjCNGp8vRHo85GtG1KT4EjwDV7Yqv0Lg">
                                                   <img width="50%" height="" src="https://go2bng.com/resource/images/logo.png" alt="Go2bng.com" border="0" style=" outline:none;text-decoration:none" class="CToWUd"></a>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;border-top: 3px solid #ffce10; ">
                                          <tbody>
                                          
                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   <h3 style="text-align:left;margin:0;padding:5px 15px">Dear '.$auth['user_name'].'</h3>
                                                   <h3 style="padding:5px 15px;font-family:calibri;font-weight:normal;font-size:17px;margin-bottom:10px;margin-top:10px">
                                                      You are at final step to create account with please click on button to verify your email.
                                                   </h3>
                                                   
                                                </td>
                                             </tr>
                                             <tr>
                                                <td style="width: 650px; font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                                   <table bgcolor="" width="100%" height="100px">
                                                      <tr>
                                                         <td></td>
                                                           <td colspan="3" style="color:#000; font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;text-align:center">
                                                            <h3 style="font-family:calibri;font-weight:normal;font-size:20px;margin-bottom:10px;margin-top:10px;text-align: center;">
                                                            <a href="'.$linkurl.'" style="background: #f19220;color:white;padding: 15px;border-radius: 10px;">
                                                                  Click To Verify
                                                            </a>
                                                              </h3>

                                                         </td>
                                                         <td></td>

                                                      </tr>
                                                
                                                   </table>
                                                </td>
                                               
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;border-bottom: 3px solid #ffce10; "> 
                                          <tbody>
                                             <tr>
                                                 <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;">
                                                      <p>And as always, if you have questions or feedback for us, we love hearing from you.</p>
                                                  </td> 
                                                  <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;">
                                                      
                                                  </td>        
                                             </tr>
                                              <tr>
                                                 <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;border-bottom: 3px solid #ffce10;">
                                                      <p>Cheers,<br/>
                                                      BNG TEAM</p>
                                                  </td> 
                                                  <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;border-bottom: 3px solid #ffce10;">
                                                      <p>Follow Us: <a href="https://www.facebook.com/go2bngnetworks/">Facebook</a>
                                                      <a href="https://twitter.com/gateway_network">Twitter</a>
                                                      <a href="https://www.linkedin.com/in/business-network-gateway-ab6025205?_l=en_US">Linkdein</a>
                                                   </p>
                                                  </td>        
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                  
                        </td>
                     </tr>
                  </tbody>
               </table>';



		
		if ($auths['user_cpassword'] == $auth['user_password']) {
				$insert =$this->front_model->InsertUsers($auth);	
					if ($insert) {

						$this->load->library('phpmailer_lib');

						// PHPMailer object
						$mail = $this->phpmailer_lib->load();

						// SMTP configuration
						$mail->isSMTP();
						$mail->Host     = 'smtp.sendgrid.net';
						$mail->SMTPAuth = true;
						$mail->Username = 'apikey';
						$mail->Password = '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';
						$mail->SMTPSecure = 'tls';
						$mail->Port     = 587;

						$mail->setFrom('support@go2bng.com', 'support@go2bng.com');
						$mail->addReplyTo('support@go2bng.com', 'support@go2bng.com');


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
						$mailContent =  $template;
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
				if($vendor=='vendor'){
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
		
		$linkurl = base_url().'verify/'.$auth['user_token'].'/'.$auth['user_name'].'/'.generateUUID().'/user';



				$template ='<table width="100%" cellpadding="0" cellspacing="0" border="0" id="m_-2287190302310609224m_-7533971164095270638background-table" style="border-collapse:collapse;padding:0;margin:0 auto;background-color:#ebebeb;font-size:12px">
                  <tbody>
                     <tr>
                        <td valign="top" align="center" style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0;width:100%">
                           <table cellpadding="0" cellspacing="0" border="0" align="center" style="border-collapse:collapse;padding:0;margin:0 auto;width:600px">
                              <tbody>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0">
                                          <tbody>
                                             <tr>
                                                <td align="center"  style=" font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:15px 0px 10px 5px;margin:0">
                                                   <a href="https://go2bng.com/" style="color:#3696c2;float:left;display:block" rel="noreferrer" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://go2bng.com/&amp;source=gmail&amp;ust=1612437442476000&amp;usg=AFQjCNGp8vRHo85GtG1KT4EjwDV7Yqv0Lg">
                                                   <img width="50%" height="" src="https://go2bng.com/resource/images/logo.png" alt="Go2bng.com" border="0" style=" outline:none;text-decoration:none" class="CToWUd"></a>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td align="center" style="background:#fff;font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;border-top: 3px solid #ffce10; ">
                                          <tbody>
                                          
                                             <tr>
                                                <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;">
                                                   <h3 style="text-align:left;margin:0;padding:5px 15px">Dear '.$auth['user_name'].'</h3>
                                                   <h3 style="padding:5px 15px;font-family:calibri;font-weight:normal;font-size:17px;margin-bottom:10px;margin-top:10px">
                                                      You are at final step to create account with please click on button to verify your email.
                                                   </h3>
                                                   
                                                </td>
                                             </tr>
                                             <tr>
                                                <td style="width: 650px; font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:0;margin:0">
                                                   <table bgcolor="" width="100%" height="100px">
                                                      <tr>
                                                         <td></td>
                                                           <td colspan="3" style="color:#000; font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:5px 15px;margin:0;text-align:center">
                                                            <h3 style="font-family:calibri;font-weight:normal;font-size:20px;margin-bottom:10px;margin-top:10px;text-align: center;">
                                                            <a href="'.$linkurl.'" style="background: #f19220;color:white;padding: 15px;border-radius: 10px;">
                                                                  Click To Verify
                                                            </a>
                                                              </h3>

                                                         </td>
                                                         <td></td>

                                                      </tr>
                                                
                                                   </table>
                                                </td>
                                               
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                       <table cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse;padding:0;margin:0;border-bottom: 3px solid #ffce10; "> 
                                          <tbody>
                                             <tr>
                                                 <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;">
                                                      <p>And as always, if you have questions or feedback for us, we love hearing from you.</p>
                                                  </td> 
                                                  <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;">
                                                      
                                                  </td>        
                                             </tr>
                                              <tr>
                                                 <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;border-bottom: 3px solid #ffce10;">
                                                      <p>Cheers,<br/>
                                                      BNG TEAM</p>
                                                  </td> 
                                                  <td style="font-family:calibri;font-weight:normal;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:10px;border-bottom: 3px solid #ffce10;">
                                                      <p>Follow Us: <a href="https://www.facebook.com/go2bngnetworks/">Facebook</a>
                                                      <a href="https://twitter.com/gateway_network">Twitter</a>
                                                      <a href="https://www.linkedin.com/in/business-network-gateway-ab6025205?_l=en_US">Linkdein</a>
                                                   </p>
                                                  </td>        
                                             </tr>
                                          </tbody>
                                       </table>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                  
                        </td>
                     </tr>
                  </tbody>
               </table>';

		$this->load->library('phpmailer_lib');

				// PHPMailer object
				$mail = $this->phpmailer_lib->load();
				// SMTP configuration
				$mail->isSMTP();
				$mail->Host     = 'smtp.sendgrid.net';
				$mail->SMTPAuth = true;
				$mail->Username = 'apikey';
				$mail->Password = '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';
				$mail->SMTPSecure = 'tls';
				$mail->Port     = 587;

				$mail->setFrom('support@go2bng.com', 'support@go2bng.com');
				$mail->addReplyTo('support@go2bng.com', 'support@go2bng.com');

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
				$mailContent = $template;
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
			$this->session->set_flashdata('warning', 'Please Login with Buyers');
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
