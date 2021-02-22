<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'users';
        $this->category   = 'categories';
        $this->product   = 'products';
        $this->requirement   = 'requirement';
        $this->order  ='orders';
    }

 
    public function Authentication($auth)
    {   
        $this->db->select('*');
        $this->db->from($this->users);
        $array = array('user_email' => $auth['user_email'],'user_password' => $auth['user_password'],'user_type' => 'user');
        $this->db->where($array);
        $query = $this->db->get();
        if($query->num_rows() !=0)
        {
            return $query->row_array();
        }
        else
        {
            return false;
        }
    }


    public function CheckEmail($auth)
    {
        $this->db->select('*');
        $this->db->from($this->users);
        $array = array('user_email' => $auth['user_email']);
        $this->db->where($array);
        $query = $this->db->get();
        if($query->num_rows() !=0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function InsertUsers($auth)
    {
        $insert = $this->db->insert($this->users,$auth);
         return $insert?true:false;
    }


     //Email Verify
     public function EmailVerify($user_token,$user_verified){
        $this->db->where('user_token',$user_token);
        $update = $this->db->update($this->users,array('user_verified'=> $user_verified));
        return $update?true:false;
    }


    public function GetCategory($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id,'parent_id' =>'0','category_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('parent_id' =>'0','category_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function GetCatSub($id='')
    {
          
        $this->db->select('*');
        $this->db->from('categories as c1');
        $this->db->join('categories as c2', ' c1.id = c2.parent_id AND c1.id  ='.$id);
        $this->db->where("c2.category_status ='active' AND c2.status ='Active'",NULL,FALSE);
      
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    
    }

    public function GetSub($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id,'parent_id !=' =>'0','category_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('parent_id !=' =>'0','category_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

     public function GetCategoryAll($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id,'category_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('category_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function GetProduct($id='')
    {
        $this->db->select('*');
        $this->db->from($this->product);
       
        if($id){
            $array = array('id' => $id,'product_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('product_status'=>'active','status'=>'Active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function GetSubPro($id='')
    {
          
        $this->db->select('*');
        $this->db->from('categories as c1');
        $this->db->join('products as c2', ' c1.id = c2.category_id AND c1.id  ='.$id);
        $this->db->where("c2.product_status ='active' AND c2.status ='Active'",NULL,FALSE);
      
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    
    }

     public function InsertQuery($auth)
    {
        $insert = $this->db->insert($this->requirement,$auth);
         return $insert?true:false;
    }

    public function GetQueryList($id='')
    {
         $this->db->select('*');
        $this->db->from($this->requirement);
       
        if($id){
            $array = array('uid' => $id,);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function InsertOrder($value)
    {
         $insert = $this->db->insert($this->order,$value);
         return $insert?true:false;
    }


    public function DeleteRequirement($reg)
    {
        $this->db->where('id',$reg);
        $update = $this->db->delete($this->requirement);
       return $update?true:false;
    }

    // Search
    public function GetCategorySearch($id)
    {
        $this->db->select('*');
        $this->db->from($this->category);
        $array = array('parent_id' =>'0','category_status'=>'active','status'=>'Active');
        $this->db->where($array);
        $this->db->like('category_name', $id,'after');
        $query  = $this->db->get();
        $result = $query->result_array();
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function GetSubCategorySearch($id)
    {
        $this->db->select('*');
        $this->db->from($this->category);
        $array = array('category_status'=>'active','status'=>'Active');
        $this->db->where($array);
        $this->db->like('category_name', $id,'after');
        $query  = $this->db->get();
        $result = $query->result_array();
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function GetUserSearch($id,$user_type)
    {
        $this->db->select('*');
        $this->db->from($this->users);
        $array = array('user_type'=>$user_type,'user_status'=>'active');
        $this->db->where($array);
        $this->db->like('user_name', $id,'after');
        $query  = $this->db->get();
        $result = $query->result_array();
        // return fetched data
        return !empty($result)?$result:false;
    }

    // Featured Home page
    public function GetUserType($user_type)
    {
        $this->db->select('*');
        $this->db->from($this->users);
        $array = array('user_type'=>$user_type,'user_status'=>'active');
        $this->db->where($array);
        $query  = $this->db->get();
        $result = $query->result_array();
        // return fetched data
        return !empty($result)?$result:false;
    }

    //Leads
    public function InsertLeads($auth)
    {
        $insert = $this->db->insert('leads',$auth);
         return $insert?true:false;
    }

    //Leads 
    // Featured Home page
    public function GetLeads()
    {
        $this->db->select('*');
        $this->db->from('leads');
        $query  = $this->db->get();
        $result = $query->result_array();
        // return fetched data
        return !empty($result)?$result:false;
    }

      public function GetSList($id ='')
    {
        $this->db->select('*');
        $this->db->from('speciallist');
       
        if($id){
            $array = array('id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }
}