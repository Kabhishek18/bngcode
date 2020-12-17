<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'users';
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

    public function GetOrderSid($id)
    {
         
        $this->db->select('*');
        $this->db->from('orders');
            $array = array('sid' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    

      public function GetInvoiceSid($sid,$id)
    {
         
        $this->db->select('*');
        $this->db->from('orders');
            $array = array('sid' => $sid,'id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        
        // return fetched data
        return !empty($result)?$result:false;
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


    function GetAttendanceId($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->attendance);
       
        if($id){
            $array = array('sid' => $id);
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
    function GetAttendanceCount($id,$title)
    {
        $this->db->select('*');
        $this->db->from($this->attendance);
       
        if($id){
            $array = array('sid' => $id,'title'=> $title);
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

    function GetTrainerId($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->users);
        if($id){
            $array = array('id' => $id,'user_type' =>'trainer');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }else{
            $array = array('user_type' =>'trainer');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }    
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function InsertFeedback($auth)
    {
        $insert = $this->db->insert($this->feedback,$auth);
         return $insert?true:false;
    }

    function CheckFeedback($id,$tid)
    {
        $this->db->select('*');
        $this->db->from($this->feedback);
       
            $array = array('student_id' => $id,'tutor_id' =>$tid);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->num_rows();
        
        // return fetched data
        return !empty($result)?$result:false;
    }

}