<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Asia/Kolkata');

class Vendor extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('vendor_model');
		$this->load->model('front_model');
		$this->load->library('session');
		$this->load->helper('date');
		if ($this->config->item('secure_site')) {
			force_ssl();
		}
	}

	public function Index()
	{	
		$data= $this->session->vendor_account;
		if($data){
			if($data['user_verified'] =='verified'){
			redirect('vendor/dashboard');
			}
		}	
		$this->load->view('vendor/inc/header');
		$this->load->view('vendor/index');
		$this->load->view('vendor/inc/footer');
	}

	public function Authenticate()
	{
		$auth['user_email']=$this->input->post("email");
		$auth['user_password']=md5($this->input->post("password"));	
		$this->session->unset_userdata('vendor_account');	 
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
		redirect('');
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
		$auth['user_phone']=$this->input->post("user_phone");
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

		$linkurl = base_url().'verify/'.$auth['user_token'].'/'.$auth['user_name'].'/'.generateUUID().'/vendor';



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
				$insert =$this->vendor_model->InsertUsers($auth);	
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
						$mailContent = $template;
						$mail->Body = $mailContent;

						// Send email
						if(!$mail->send()){
							$mail->ErrorInfo;

						}
						
						$this->session->set_flashdata('success', 'Thank You, For Registration, Please Verfiy Your Email');
						redirect('vendor');		
					}
					else{
						$this->session->set_flashdata('success', 'Sorry, Something Misfortune Happen!');
						redirect('vendor');	
					}
		}
		else{
			$this->session->set_flashdata('warning', '<span>Sorry, Your Password Did not Match</span>');
			redirect('vendor');	

		}
	}

	public function forgotPassword($value='')
	{
		$this->load->view('vendor/inc/header');
		$this->load->view('vendor/forgot');
		$this->load->view('vendor/inc/footer');
	}

	public function forgotPasswordEmail()
	{
		
		$auth['user_email']=$this->input->post("user_email");
		$emailcheck =$this->vendor_model->CheckEmail($auth);
		if ($emailcheck==true ) {
			$data = $this->vendor_model->EmailForgot($auth['user_email']);
			$linkurl = base_url().'change/'.$data['user_token'].'/'.$data['user_name'].'/'.generateUUID().'/vendor';

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
				redirect('vendor');		
			
		}
		else{
			$this->session->set_flashdata('warning', 'EmailID Not Exist! Please Register');
			redirect('vendor/register');
		}
	}

	public function ResetPassword()
	{
		$data['user_token'] =$this->uri->segment(2,0);
		$data['user_name'] =$this->uri->segment(3,0);
		$vendor =$this->uri->segment(5,0);
		
		$this->load->view('vendor/inc/header');
		$this->load->view('vendor/resetpass',$data);
		$this->load->view('vendor/inc/footer');	
	}


	public function ResetprofilePassword()
	{
		$data['user_token'] =$this->input->post('user_token');
		$data['user_name']=$this->input->post('user_name');
		$user['user_password'] =md5( $this->input->post('user_password')); 
		$var['user_cpassword'] = md5($this->input->post('user_cpassword')); 
		if($user['user_password'] !=$var['user_cpassword']){
			$this->session->set_flashdata('warning', 'Password Mismatch');
			redirect('change/'.$data['user_token'].'/'.$data['user_name'].'/'.generateUUID().'/vendor');	
		}
		$update=$this->vendor_model->ResetUserData($user,$data['user_token'],$data['user_name']);
		if($update){
			$this->session->set_flashdata('success', 'Successfully Password Updated');
			redirect('vendor/login');
		}else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happen');
			redirect($_SERVER['HTTP_REFERER']);	
		}
	}
	
	//Email Reverfication
	public function ResendEmailVerification()
	{
		$auth= $this->session->vendor_account;
		
		$linkurl = base_url().'verify/'.$auth['user_token'].'/'.$auth['user_name'].'/'.generateUUID().'/vendor';

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

			$order = $this->vendor_model->GetOrder($data['id']);
			if(!empty($order)){
				$orderplan  =json_decode($order['order_detail'],true);
				if($orderplan['product'] ==1){
					$limit =10;
					$start = 5 ;
				}elseif ($orderplan['product'] ==2) {
					$limit =25;
					$start =0;	
				}else{
					$limit=null;
					$start = null;
				}	
				$value['datalist']= $this->vendor_model->GetQueryListLimit($limit,$start,$data['id']);
			}
				$this->load->view('vendor/inc/header');
				$this->load->view('vendor/inc/nav',$data);
				$this->load->view('vendor/dashboard',(!empty($value['datalist'])?$value:''));
				$this->load->view('vendor/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}
	}

	public function Profile($value='')
	{
		$data =$this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			$this->load->view('vendor/inc/header');
			$this->load->view('vendor/inc/nav',$data);
			$this->load->view('vendor/profile');
			$this->load->view('vendor/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}	
	}

	public function profileUpdate()
	{
		$data =$this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			
			$user['user_name'] = $this->input->post('user_name'); 
			$user['user_phone'] = $this->input->post('user_phone'); 
			$user['user_address'] = $this->input->post('user_address'); 
			$value['company_name'] = $this->input->post('company_name');
			$value['business_type'] = $this->input->post('business_type');
			$value['estab_year'] = $this->input->post('estab_year');
			$value['annual_sale'] = $this->input->post('annual_sale');
			$value['iso_cert'] = $this->input->post('iso_cert');
			$user['user_description'] =json_encode($value);
			$dir ='uploads/profile/';
				if (!is_dir($dir)) {
					mkdir($dir, 0755, TRUE);
				}
				$config['upload_path'] =  $dir;
		        $config['allowed_types'] = 'jpg|jpeg|png|jpeg|mp4|docx|pdf';
		        $config['max_size'] = 3000;
		        $this->load->library('upload', $config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('catimg')){
		 		$file= $this->upload->data();
				$user['user_image'] =$file['file_name'];}
				else{						
					}	
			$update=$this->vendor_model->UpdateUserData($user,$data['user_email']);
			if($update){
				$data['user_name'] =$user['user_name'];
				$data['user_phone'] =$user['user_phone'];
				$data['user_description'] =$user['user_description'];
				if($user['user_image']){
				$data['user_image'] =$user['user_image'];
				}
				$this->session->set_flashdata('success', 'Successfully Done');
				$this->session->set_userdata('vendor_account',$data);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen');
				redirect($_SERVER['HTTP_REFERER']);	
			}
					
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}	
	}

	public function profilePassword()
	{
		$data =$this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			
			$user['user_password'] =md5( $this->input->post('user_password')); 
			$var['user_cpassword'] = md5($this->input->post('user_cpassword')); 
			if($user['user_password'] !=$var['user_cpassword']){
				$this->session->set_flashdata('warning', 'Password Mismatch');
				redirect($_SERVER['HTTP_REFERER']);	
			}
			$update=$this->vendor_model->UpdateUserData($user,$data['user_email']);
			if($update){
				$this->session->set_flashdata('success', 'Successfully Done');
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata('warning', 'Something Misfortune Happen');
				redirect($_SERVER['HTTP_REFERER']);	
			}
					
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
						$var['datalist'] = $this->vendor_model->GetProduct($data['id'],$urlid);
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
					
					$comp = json_decode($data['user_description']);


					$company['company_name']=$comp->company_name;
					$company['company_phone']=$data['user_phone'];
					$company['company_email']=$data['user_email'];
					$company['company_address']=$data['user_address'];
					$company_desc['business_type']=$comp->business_type;
					$company_desc['estab_year']=$comp->estab_year;
					$company_desc['iso_cert']=$comp->iso_cert;
					$company_desc['annual_sale']=$comp->annual_sale;

					$reg['company'] =json_encode($company);
					$reg['company_desc'] =json_encode($company_desc);
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

	public function Checkout()
	{
		$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			$this->load->view('front/inc/header');
			$this->load->view('front/inc/nav');
			$this->load->view('front/checkout',$data);
			$this->load->view('front/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Supplier Login Required');
			redirect('vendor/login');	
		}
	}

	public function AjaxRequest()
	{
		$value =$this->input->post('title');
		if($value =='1'){
			$data = array('name' =>'Basic Plan' ,'price' =>'50' );
			echo json_encode($data);
		}
		elseif($value =='2'){
			$data = array('name' =>'Super Plan' ,'price' =>'99' );
			echo json_encode($data);

		}

		elseif($value =='3'){
			$data = array('name' =>'Premium Plan' ,'price' =>'499' );
			echo json_encode($data);
		}
		elseif($value =='4'){
			$data = array('name' =>'Elite Plan' ,'price' =>'1199' );
			echo json_encode($data);	
		}
		elseif($value =='5'){
			$data = array('name' =>'Free Plan' ,'price' =>'0' );
			echo json_encode($data);	
		}
		else{
			echo "error";
		}
	}


	public function Payment()
	{
		$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			$reg['fname'] =$this->input->post('fname');
			$reg['lname'] =$this->input->post('lname');
			$reg['email'] =$this->input->post('email');
			$reg['address'] =$this->input->post('address');
			$reg['address2'] =$this->input->post('address2');
			$reg['country'] =$this->input->post('country');
			$reg['city'] =$this->input->post('city');
			$reg['postcode'] =$this->input->post('postcode');
			$reg['product'] =$this->input->post('product');
			$reg['paymentmethod'] =$this->input->post('paymentmethod');
			$reg['planname'] =$this->input->post('planname');
			$reg['planprice'] =$this->input->post('planprice');

			$this->session->set_userdata('order',$reg);
			
			$data= $this->session->vendor_account;
			if($reg['planprice'] ==0){
				$order['uid'] = $data['id'];
	    		$order['order_amount'] =$_SESSION['order']['planprice'];
	    		$order['order_detail'] =json_encode($_SESSION['order']);
	    		$order['date_created'] =date('F,d Y');
	    		$order['order_id'] = uniqid();
				$insert= $this->vendor_model->insertorder($order);
				if($insert){
		    		 $this->session->set_flashdata('success', 'Payment Successfully');
					redirect('vendor/login');	
		 		}
		 		else {
	 			 $this->session->set_flashdata('warning', 'Something Misfortune Happened!!');
		    		redirect($_SERVER['HTTP_REFERER']);	}
			}
		

			 if($reg['paymentmethod'] =='razorpay')
			 {
			 	$this->load->view('front/inc/header');
			 	$this->load->view('front/inc/nav');
			 	$this->load->view('front/razorpay',$_SESSION['order']);
			 	$this->load->view('front/inc/footer');
			 }
			 elseif($reg['paymentmethod'] =='paypal')
			 {
			 	$this->load->view('front/inc/header');
			 	$this->load->view('front/inc/nav');
			 	$this->load->view('front/paypal',$reg);
			 	$this->load->view('front/inc/footer');
			 }
		
		}
		else{
			$this->session->set_flashdata('warning', 'Please Login To Have Access');
			redirect('');	
		}
	}

	//Apply Coupon
	public function ApplyCoupon()
	{
		$coupon =$this->input->post('coupon');
		if (!empty($coupon)) {
			$ticket =$this->front_model->Getcoupon($coupon);
			if($ticket){
			 	$todaydate =date('Y-m-d');
              	$expdate =$ticket['coupon_expire'];
              
                if($todaydate <=$expdate){
					$this->session->set_userdata('ticket',$ticket);
			
					$this->session->set_flashdata('success', '<span style="color:green">Coupon Added successfully </span>');
					redirect('checkout');
				}
				else{
					$this->session->set_flashdata('wrong', '<span style="color:orange">Sorry, Coupon Expired!! </span>');
					redirect('checkout');
				}
			}

			else{
			$this->session->set_flashdata('wrong', '<span style="color:red">Coupon not available</span>');
			redirect('checkout');
			}	
		}
		else{
			$this->session->set_flashdata('success', '<span style="color:green">Somthing Misfortne Happens </span>');
					redirect('checkout');
		}
	}

	public function coupondestroy()
	{
		$this->session->unset_userdata('ticket');	
		redirect('checkout');
	}

 	public function razorPaySuccess()
    { 
    		$data= $this->session->vendor_account;
	    	if ($_SESSION['order']) {
				$order['uid'] = $data['id'];
	    		$order['order_amount'] =$_SESSION['order']['planprice'];
	    		$order['order_detail'] =json_encode($_SESSION['order']);
	    		$order['date_created'] =date('F,d Y');
	    		$order['order_id'] = $this->input->post('razorpay_payment_id');
				$insert= $this->vendor_model->insertorder($order);	
	    		if($insert){
		    	 $arr = array('msg' => 'Payment successfully credited', 'status' => true);  
		    	 echo json_encode($arr);
		 		}
		 		else {
		 		 $arr = array('msg' => 'Something Misfortune Happened!!', 'status' => true);  
		    	 echo json_encode($arr);
		 				
		 		}
		 	}
    }
    
    public function RazorThankYou()
    {
	 $this->session->set_flashdata('success', 'Order Successfully');
     $this->load->view('front/inc/header');
     $this->load->view('front/inc/nav');
     $this->load->view('front/inc/footer'); 	
     $this->session->unset_userdata('order');
     $this->session->unset_userdata('checkout');
     sleep(4);
     redirect('vendor/dashboard');
    }

    public function Requirement()
    {
    	$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
			$order = $this->vendor_model->GetOrder($data['id']);
			if(!empty($order)){
				$orderplan  =json_decode($order['order_detail'],true);
				if($orderplan['product'] ==1){
					$limit =10;
					$start = 5 ;
				}elseif ($orderplan['product'] ==2) {
					$limit =25;
					$start =0;	
				}else{
					$limit=null;
					$start = null;
				}	

				$value['datalist']=$this->vendor_model->GetQueryListLimit($limit,$start,$data['id']);
				$this->load->view('vendor/inc/header');
				$this->load->view('vendor/inc/nav',$data);
				$this->load->view('vendor/requirement',$value);
				$this->load->view('vendor/inc/footer');
			}
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}
    }

    public function Subscription()
    {
    	$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
				$order['sub'] = $this->vendor_model->GetOrder($data['id']);
				$this->load->view('vendor/inc/header');
				$this->load->view('vendor/inc/nav',$data);
				$this->load->view('vendor/subscription',$order);
				$this->load->view('vendor/inc/footer');
			}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor');	
		}
    }
    
    public function cancelSubscrip()
    {
    	$data= $this->session->vendor_account;
		if($data['user_verified'] =='verified'){
				$update = $this->vendor_model->Subscripcancel($data['id']);
				if($update){	
					$this->session->set_flashdata('success', 'Subscription Cancelled');
					redirect('vendor/dashboard');
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen');
					redirect('vendor/dashboard');
				}
			}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('vendor/dashboard');	
		}
    }	
}
