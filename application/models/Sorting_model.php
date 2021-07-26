<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sorting_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function subcategories_product($c_id)
    {
        $this->db->select("*");
        $this->db->from('sub_categories');
        $this->db->where('sub_categories.subc_id',$c_id);
        $this->db->join('product', 'product.subc_id = sub_categories.subc_id');
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }

    // function filter_data($range)
    // {
    //     $query = "SELECT * FROM product WHERE price <= ".$range." ORDER BY price desc";  
    //     $arr = $query->result_array();
	// 	return $arr;
    // }

}