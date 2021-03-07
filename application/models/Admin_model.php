<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model

{
	 function __construct() {
        $this->users   = 'users';
        $this->category   = 'categories';
        $this->products   = 'products';
          $this->order  ='orders';

        $this->requirement   = 'requirement';
    }

 
    public function Authentication($auth)
    {   
        $this->db->select('*');
        $this->db->from($this->users);
        $array = array('user_email' => $auth['user_email'],'user_password' => $auth['user_password'],'user_type' => 'admin');
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

    public function GetOrder($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->order);
       
        if($id){
            $array = array('id' => $id);
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
             $this->db->order_by("date_modified", "desc");
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }


    public function GetUser($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->users);
       
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

    public function GetCategoryId($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
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

     public function GetProductId($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->products);
       
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

    public function GetCategory($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->category);
       
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

    public function GetProduct($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->products);
       
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

    public function GetQueryListLimit()
    {
         $this->db->select('*');
        $this->db->from($this->requirement);
        
        $this->db->order_by("date_modified", "desc");  
         $query  = $this->db->get();
        $result = $query->result_array();  
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function DeleteRequirement($reg='')
    {
       $this->db->where('id',$reg);
        $update = $this->db->delete($this->requirement);
       return $update?true:false;
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

    public function UpdateSList($reg)
    {   
        $this->db->where('id',$reg['id']);
        $update = $this->db->update('speciallist',$reg);
        return $update?true:false;
        
    }


    public function Subscripcancel($reg)
    {
        $this->db->where('id',$reg);
        $update = $this->db->delete($this->order);
       return $update?true:false;
    }


     public function GetVendor($id ='')
    {
        $this->db->select('*');
        $this->db->from($this->users);
       
        if($id){
            $array = array('id' => $id,'user_type'=>'vendor');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->row_array();
        }else{
            $array = array('user_type'=>'vendor');
            $this->db->where($array);
            $query  = $this->db->get();
            $result = $query->result_array();
        }
        
        // return fetched data
        return !empty($result)?$result:false;
    }

    public function ChangeVendor($reg)
    {   
        if ($reg['id']) {
            $array = array('id' => $reg['id'],'user_type'=>'vendor');
            $this->db->where($array);
            $update = $this->db->update($this->users,$reg);
            return $update?true:false;
        }
        else{
            $insert = $this->db->insert($this->users,$reg);
            return $insert?true:false;
        }
    }



    public function DeleteVendor($reg)
    {
        $this->db->where('id', $reg);
        $update = $this->db->delete($this->users);
       return $update?true:false;
    }

}