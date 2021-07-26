<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    function show_productvariation($p_id)
    {
        $this->db->select("*");
        $this->db->from('add_cart');
        $this->db->where('add_cart.product_id', $p_id);
        $this->db->join('variation', 'add_cart.product_id = variation.p_id');
        $this->db->join('product', 'product.p_id = add_cart.product_id');
        $this->db->join('diamond_size', 'diamond_size.id = add_cart.size', 'LEFT OUTER');
        
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }


    function show_productvariations($p_id)
    {
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where('product.p_id',$p_id);
        $this->db->join('variation', 'product.p_id = variation.p_id', 'LEFT OUTER');


        // $this->db->from('add_cart');
        // $this->db->where('add_cart.product_id', $p_id);
        // $this->db->join('variation', 'add_cart.product_id = variation.p_id');
        // $this->db->join('product', 'product.p_id = add_cart.product_id');
        // $this->db->join('diamond_size', 'diamond_size.id = add_cart.size', 'LEFT OUTER');
        
        $query = $this->db->get();
        $arr = $query->result_array();
        return $arr;
    }

    
    function show_review($p_id)
    {
        $this->db->select("*");
        $this->db->from('review');
        $this->db->where('review.product_id',$p_id);
        $this->db->join('registration', 'review.user_id = registration.user_id');
        $query = $this->db->get();
        $arr = $query->result_array();
        return $arr;
    }

    function show_diamond_size($p_id){
        $this->db->select("*");
        $this->db->from('diamond_size');
        $this->db->where('product_id',$p_id);
        $query = $this->db->get();
        $arr = $query->result_array();
        return $arr;
    }
    
    function show_currentlivepoduct(){
        $this->db->select("*");
        $this->db->from('sale_product');
        $query = $this->db->get();
        $arr = $query->result_array();
        return $arr;
    }

    function review_insertdata($data)
    {
        $this->db->insert('review',$data);
    }

//     function show_cartdata($user_id)
//     {
//         $this->db->select("*");
//         $this->db->from('add_cart');
//         $this->db->where('add_cart.user_id',$user_id);
//         $this->db->join('product', 'product.p_id = add_cart.product_id');
//         $query = $this->db->get();
//         $arr = $query->result_array(); //print_r($arr);exit;
// 		return $arr;
//     }


 function show_cartdata($user_id)
    {
        $this->db->select("*");
        $this->db->from('add_cart');
        $this->db->where('add_cart.user_id',$user_id);
        $this->db->join('product', 'product.p_id = add_cart.product_id', 'LEFT OUTER');
        $this->db->join('diamond_size', ' diamond_size.id = add_cart.size', 'LEFT OUTER');
        $query = $this->db->get();
        $arr['cart'] = $query->result_array(); 

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
                    return join(" -->false ", $temp_path);
                }
            }

            return null;
        }

        $cartdata = array();
           
            foreach($arr['cart'] as $rows){
                $sales = 0;
                if($rows['diamond_value'] != null){
                        $single_product_sale_price = $rows['diamond_value'];
                    } else {
                        $single_product_sale_price = $rows['price'];
                    }
                
                foreach($arr['saleproduct'] as $sale){
                    if(searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'))){
                        if($rows['diamond_value'] != ''){
                            $sales = $sale['sale_percentage'];
                            $sale_price = $rows['diamond_value'] * $sales / 100;
                            $single_product_sale_price = $rows['diamond_value']-$sale_price;
                        } else {
                            $sales = $sale['sale_percentage'];
                            $sale_price = $rows['price'] * $sales / 100;
                            $single_product_sale_price = $rows['price']-$sale_price;
                        }
                    }
                }

                if($arr['saleproduct'] == null){
                    if($rows['diamond_value'] != null){
                        // echo '1';
                        $single_product_sale_price = $rows['diamond_value'];
                    } else {
                        // echo '2';
                        $single_product_sale_price = $rows['price'];
                    }
                }

                $rows['sales'] = $sales;

                if($rows['product_id'] == ''){
                    $productids = $rows['p_id'];
                } else {
                    $productids = $rows['product_id'];
                }

                $cartdata[] = array(
                    "p_id" => $rows['p_id'],
                    "sale_percentage" => $sales,
                    "quantity" => $rows['quantity'],
                    "cart_id" => $rows['cart_id'],
                    'user_id' => $rows['user_id'],
                    "product_id" => $productids,
                    "size" => $rows['size'],
                    "color" => $rows['color'],
                    "total_price" => $single_product_sale_price * $rows['quantity'],
                    "c_id" => $rows['c_id'],
                    "subc_id" => $rows['subc_id'],
                    "pname" => $rows['pname'],
                    "price" => $rows['price'],
                    "single_product_sale_price" => $single_product_sale_price,
                    "image" => $rows['image'],
                    "weight" => $rows['weight'],
                    "stock" => $rows['stock'],
                    "sale" => $rows['sale'],
                    "size_id" => $rows['id'],
                    "diamond_size" => $rows['diamond_size'],
                    "diamond_value" => $rows['diamond_value'],
                );
            }

            // echo '<pre>'; print_r($cartdata); die;
        return $cartdata;
    }


    function show_cartdatacount($user_id)
    {
        $this->db->select("*");
        $this->db->from('add_cart');
        $this->db->where('add_cart.user_id',$user_id);
        $this->db->join('product', 'product.p_id = add_cart.product_id');
        $query = $this->db->get();
        $arr = $query->num_rows(); //print_r($arr);exit;
		return $arr;
    }

    function delete_cartdata($cart_id='')
	{
		$this->db->where('cart_id',$cart_id);
		$this->db->delete('add_cart');
		//echo $this->db->last_query();
    }

    function show_shipping()
    {
        $this->db->select("*");
        $this->db->from('shipping');
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }

    function cart_insertdata($data)
    {
        $this->db->insert('add_cart',$data);
    }

    function updaterecords($id,$quantity,$total)
	{
		$query="UPDATE `add_cart` SET `quantity`='$quantity',`total_price`='$total' WHERE product_id=$id";
		$arr = $this->db->query($query);
		return $arr;
        //print_r($arr);
	}
}