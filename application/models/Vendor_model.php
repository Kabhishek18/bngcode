<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'users';
        $this->category   = 'categories';
        $this->products   = 'products';
    }

 
    public function Authentication($auth)
    {   
        $this->db->select('*');
        $this->db->from($this->users);
        $array = array('user_email' => $auth['user_email'],'user_password' => $auth['user_password'],'user_type' => 'vendor');
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


    public function GetCategory($userid,$id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id,'user_id'=>$userid);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
             $array = array('user_id'=>$userid);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function GetMainCategory($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id,'parent_id' =>'0');
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
      public function GetSubCategory($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
        if($id){
            $array = array('id' => $id,'parent_id !=' =>'0');
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

    public function ChangeCategory($reg)
    {   
        if ($reg['id']) {
            $this->db->where('id',$reg['id']);
            $update = $this->db->update($this->category,$reg);
            return $update?true:false;
        }
        else{
            $insert = $this->db->insert($this->category,$reg);
            return $insert?true:false;
        }
    }



    public function DeleteCategory($reg)
    {
        $this->db->where('id',$reg);
        $update = $this->db->delete($this->category);
       return $update?true:false;
    }

    public function GetProduct($userid,$id ='')
    {
        $this->db->select('*');
        $this->db->from($this->products);
       
        if($id){
            $array = array('id' => $id,'user_id'=>$userid);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('user_id'=>$userid);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function ChangeProduct($reg)
    {   
        if ($reg['id']) {
            $this->db->where('id',$reg['id']);
            $update = $this->db->update($this->products,$reg);
            return $update?true:false;
        }
        else{
            $insert = $this->db->insert($this->products,$reg);
            return $insert?true:false;
        }
    }

    public function DeleteProduct($reg)
    {
        $this->db->where('id',$reg);
        $update = $this->db->delete($this->products);
       return $update?true:false;
    }

}