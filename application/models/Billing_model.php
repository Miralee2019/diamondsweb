<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Billing_model extends CI_Model
{
    function billing_insertdata($data)
    {
        $this->db->insert('billing_detail',$data);
    }

    function show_productvariation($user_id)
    {
        $this->db->select("*");
        $this->db->from('add_cart');
        $this->db->where('add_cart.user_id',$user_id);
        $this->db->join('product', 'add_cart.product_id = product.p_id');
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }

    function order_insertdata($data)
    {
        $this->db->insert('order',$data);
    }

    public function getRows($id = ''){ 
        $this->db->select('*'); 
        $this->db->from('billing_detail'); 
        if($id){ 
            $this->db->where('user_id', $id); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            $this->db->order_by('name', 'asc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
         
        // return fetched data 
        return !empty($result)?$result:false; 
    } 
}