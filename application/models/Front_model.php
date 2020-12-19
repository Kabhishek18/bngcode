<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'users';
        $this->category   = 'categories';
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
            $array = array('id' => $id,'parent_id' =>'0','category_status'=>'active','status'=>'active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('parent_id' =>'0');
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
        $this->db->where("c2.category_status ='active' AND c2.status ='active'",NULL,FALSE);
      
        $query = $this->db->get();
        $result = $query->result_array();
        return !empty($result)?$result:false;
    
    }

    public function GetSub($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id,'parent_id !=' =>'0','category_status'=>'active','status'=>'active');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('parent_id !=' =>'0');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

}