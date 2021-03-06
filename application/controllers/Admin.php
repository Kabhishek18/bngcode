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
		if($data){
			if($data['user_verified'] =='verified'){
				redirect('admin/dashboard');
			}
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

	public function SpecialList()
	{
		$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			$var['lists'] =$this->admin_model->GetSList();
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/nav',$data);
			$this->load->view('admin/speciallist',$var);
			$this->load->view('admin/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
	}

	public function SpecialInsert()
	{
		$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			if ($data['user_type'] =='admin') {
				$reg['list']=json_encode($this->input->post("listed"));
				$reg['id']=$this->input->post("id");
				$update = $this->admin_model->UpdateSList($reg);
				if($update){
					$this->session->set_flashdata('success', 'Updated Successfully');
					redirect('admin/speciallist');	
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happened');
					redirect('admin/speciallist');	
				}
			}	
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
	}

	public function Category()
	{
		$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			$value['datalist']=$this->admin_model->GetCategory();
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/nav',$data);
			$this->load->view('admin/category',$value);
			$this->load->view('admin/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
	}

	//Course Add View
	public function CategoryAdd()
	{
		$data = $this->session->admin_account;
		if($data){	

				if ($data['user_type'] =='admin') {
					$this->load->view('admin/inc/header',$data);
					$urlid = $this->uri->segment(4,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->admin_model->GetCategory($urlid);
						$this->load->view('admin/categoryadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('admin/categoryadd',$var);
					}

					$this->load->view('admin/inc/footer');
				}
				else{
					$this->session->set_flashdata('warning', 'Sorry, Admin Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('admin_account');	   
					$this->session->sess_destroy();
					redirect('admin/dashboard');
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
		
		$data = $this->session->admin_account;
		if($data){	

				if ($data['user_type'] =='admin') {
					
					$reg['id']=$this->input->post("id");
					$reg['category_name']=$this->input->post("category_name");
					$reg['parent_id']=$this->input->post("parent_id");
					$reg['category_description']=$this->input->post("category_description");
					$reg['category_meta']=$this->input->post("category_meta");
					$reg['category_slug']=$this->input->post("category_slug");
					$reg['category_status']=$this->input->post("category_status");
					$reg['status']=$this->input->post("status");
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

					
					
						
							$insert = $this->admin_model->ChangeCategory($reg);
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
					$this->session->set_flashdata('warning', 'Sorry, Admin Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('admin_account');	   
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
		$insert =$this->admin_model->DeleteCategory($url);
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
		$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			$value['datalist']=$this->admin_model->GetProduct();
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/nav',$data);
			$this->load->view('admin/product',$value);
			$this->load->view('admin/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
	}

	//Course Add View
	public function ProductAdd()
	{
		$data = $this->session->admin_account;
		if($data){	

				if ($data['user_type'] =='admin') {
					$this->load->view('admin/inc/header',$data);
					$urlid = $this->uri->segment(4,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->admin_model->GetProduct($urlid);
						$this->load->view('admin/productadd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('admin/productadd',$var);
					}

					$this->load->view('admin/inc/footer');
				}
				else{
					$this->session->set_flashdata('warning', 'Sorry, Admin Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('admin_account');	   
					$this->session->sess_destroy();
					redirect('admin/dashboard');
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
		
		$data = $this->session->admin_account;
		if($data){	

				if ($data['user_type'] =='admin') {
					
					$reg['id']=$this->input->post("id");
					// Company Information
					$company['company_name']=$this->input->post("company_name");
					$company['company_phone']=$this->input->post("company_phone");
					$company['company_email']=$this->input->post("company_email");
					$company['company_address']=$this->input->post("company_address");
						$dir ='uploads/profile/';
						if (!is_dir($dir)) {
							mkdir($dir, 0777, TRUE);
						}
						$config['upload_path'] =  $dir;
				        $config['allowed_types'] = 'jpeg|jpg|png|jpeg|mp4|docx|pdf';
				        $config['max_size'] = 3000;
				        $this->load->library('upload', $config);
						$this->upload->initialize($config);

						if($this->upload->do_upload('comimg')){
				 		$file= $this->upload->data();
						$reg['company_logo'] =$file['file_name'];}
						else{						
						}
					//
					$reg['company']	=json_encode($company); 
					$reg['product_name']=$this->input->post("product_name");
					$reg['category_id']=$this->input->post("category_id");
					$reg['product_information']=$this->input->post("product_information");
					$reg['product_description']=$this->input->post("product_description");
					$reg['product_meta']=$this->input->post("product_meta");
					$reg['product_slug']=$this->input->post("product_slug");
					$reg['product_status']=$this->input->post("product_status");
					$reg['status']=$this->input->post("status");

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

							$insert = $this->admin_model->ChangeProduct($reg);
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
					$this->session->set_flashdata('warning', 'Sorry, Admin Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('admin_account');	   
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
		$insert =$this->admin_model->DeleteProduct($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect($_SERVER['HTTP_REFERER']);
		
		}
	}

	public function Requirement()
    {
    	$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			$req['datalist']= $this->admin_model->GetQueryListLimit();
				$this->load->view('admin/inc/header');
				$this->load->view('admin/inc/nav',$data);
				$this->load->view('admin/requirement',$req);
				$this->load->view('admin/inc/footer');
			
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
    	
    }

    public function Subscription()
    {
    	$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
				$order['datalist'] = $this->admin_model->GetOrder();
				$this->load->view('admin/inc/header');
				$this->load->view('admin/inc/nav',$data);
				$this->load->view('admin/subscription',$order);
				$this->load->view('admin/inc/footer');
			}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
    	
    }



    public function RequirementDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->admin_model->DeleteRequirement($url);
		if($insert){
			$this->session->set_flashdata('warning', 'Deleted Successfully');
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('warning', 'Something Misfortune Happened!');
			redirect($_SERVER['HTTP_REFERER']);
		
		}
	}

	public function cancelSubscrip()
    {
    	$data= $this->session->admin_account;
    	$url= $this->uri->segment(3,0); 
		if($data['user_verified'] =='verified'){
				$update = $this->admin_model->Subscripcancel($url);
				if($update){	
					$this->session->set_flashdata('success', 'Subscription Cancelled');
						redirect($_SERVER['HTTP_REFERER']);
				}
				else{
					$this->session->set_flashdata('warning', 'Something Misfortune Happen');
						redirect($_SERVER['HTTP_REFERER']);
				}
			}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
				redirect($_SERVER['HTTP_REFERER']);
		}
    }



	public function Vendor()
	{
		$data= $this->session->admin_account;
		if($data['user_verified'] =='verified'){
			$value['datalist']=$this->admin_model->GetVendor();
			$this->load->view('admin/inc/header');
			$this->load->view('admin/inc/nav',$data);
			$this->load->view('admin/vendor',$value);
			$this->load->view('admin/inc/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Access Denied');
			redirect('admin');	
		}
	}

	//Course Add View
	public function VendorAdd()
	{
		$data = $this->session->admin_account;
		if($data){	

				if ($data['user_type'] =='admin') {
					$this->load->view('admin/inc/header',$data);
					$urlid = $this->uri->segment(4,0);

					if($urlid){
						//Update
						$var['datalist'] = $this->admin_model->GetVendor($urlid);
						$this->load->view('admin/vendoradd',$var);
					}else{
						//Add
						$var['datalist'] = NULL;
						$this->load->view('admin/vendoradd',$var);
					}

					$this->load->view('admin/inc/footer');
				}
				else{
					$this->session->set_flashdata('warning', 'Sorry, Admin Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('admin_account');	   
					$this->session->sess_destroy();
					redirect('admin/dashboard');
					}	
				}
			}

		
		else{
			redirect();
		}
	}

	//Course Insert And Update
	public function Vendorinsert()
	{
		
		$data = $this->session->admin_account;
		if($data){	

				if ($data['user_type'] =='admin') {
					
					$reg['id']=$this->input->post("id");
					$reg['user_name']=$this->input->post("user_name");
					$reg['user_email']=$this->input->post("user_email");
					if(!empty($this->input->post("user_password"))){
						$reg['user_password']=md5($this->input->post("user_password"));
					}
					$reg['user_phone']=$this->input->post("user_phone");
					$reg['user_type']='vendor';
					$reg['user_status']=$this->input->post("user_status");
					$reg['user_verified']=$this->input->post("user_verified");
						$dir ='uploads/profile/';
						if (!is_dir($dir)) {
							mkdir($dir, 0777, TRUE);
						}
					$config['upload_path'] =  $dir;
			        $config['allowed_types'] = 'jpg|png|jpeg|mp4|docx|pdf';
			        $config['max_size'] = 3000;
			        $this->load->library('upload', $config);
					$this->upload->initialize($config);

						if($this->upload->do_upload('user_image')){
				 		$file= $this->upload->data();
						$reg['user_image'] =$file['file_name'];}
						else{						
						}

					if ($reg['id'] == "") {
						$reg['date_created']=date('Y-m-d');
					}
						$reg['date_modified']= date('Y-m-d H:i:s');

					
					
						
							$insert = $this->admin_model->ChangeVendor($reg);
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
					$this->session->set_flashdata('warning', 'Sorry, Admin Access Only. Please Contact Your WebAdministrator');
					if(session_destroy())
					{
					$this->session->unset_userdata('admin_account');	   
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
	public function VendorDelete()
	{
		$url= $this->uri->segment(3,0); 
		$insert =$this->admin_model->DeleteVendor($url);
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
