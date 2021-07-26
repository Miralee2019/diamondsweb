<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Whishlist_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function whishlist_insertdata($data)
    {
        $this->db->insert('whishlist',$data);
    }

//     function show_whishlistdata($user_id)
//     {
//         $this->db->select("*");
//         $this->db->from('whishlist');
//         $this->db->where('whishlist.user_id',$user_id);
//         $this->db->join('product', 'product.p_id = whishlist.product_id');
//         $query = $this->db->get();
//         $arr = $query->result_array(); //print_r($arr);exit;
// 		return $arr;
//     }

    function show_whishlistdata($user_id)
    {
        $this->db->select("*");
        $this->db->from('whishlist');
        $this->db->where('whishlist.user_id',$user_id);
        $this->db->join('product', 'product.p_id = whishlist.product_id');
        $query = $this->db->get();
        $array['whishlist'] = $query->result_array(); //print_r($arr);exit;

        $arr['saleproduct'] = $this->Product_model->show_currentlivepoduct();

        function searchForId($search_value, $array, $id_path) {
            foreach ($array as $key1 => $val1) {

                $temp_path = $id_path;
                array_push($temp_path, $key1);
                if(is_array($val1) and count($val1)) {
                    foreach ($val1 as $key2 => $val2) {
                        if($val2 == $search_value) {
                            array_push($temp_path, $key2);
                            return true;
                        }
                    }
                } else if($val1 == $search_value) {
                    return 'true';
                }
            }

            return null;
        }
        $result = array();
        foreach($arr['saleproduct'] as $sale){ 
            foreach($array['whishlist'] as $rows){
                $result[] = searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'));
            } 
        }

        $withsale = implode("",$result);

        foreach($array['whishlist'] as $rows){
            $sales = 0;
            $single_product_sale_price = $rows['price'];
            foreach($arr['saleproduct'] as $sale){
                if(searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'))){
                    $sales = $sale['sale_percentage'];
                    $sale_price = $rows['price'] * $sales / 100;
                    $single_product_sale_price = $rows['price']-$sale_price;
                }
            }

            $rows['sales'] = $sales;

            $cartdata[] = array(
                "whishlist_id" => $rows['whishlist_id'],
                "p_id" => $rows['p_id'],
                "sale_percentage" => $sales,
                'user_id' => $rows['user_id'],
                "product_id" => $rows['product_id'],
                "c_id" => $rows['c_id'],
                "subc_id" => $rows['subc_id'],
                "pname" => $rows['pname'],
                "price" => $rows['price'],
                "sale_price" => $single_product_sale_price,
                "image" => $rows['image'],
                "weight" => $rows['weight'],
                "stock" => $rows['stock'],
                "sale" => $rows['sale'],
            );
        }

        if($array['whishlist'] == null){
            $cartdata = [];
        }

        return $cartdata;
    }

    function delete_whishdata($whishlist_id='')
	{
		$this->db->where('whishlist_id',$whishlist_id);
		$this->db->delete('whishlist');
		//echo $this->db->last_query();
    }
}