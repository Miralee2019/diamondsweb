<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    function show_subcategories()
    {
        //SELECT * from categories,sub_categories WHERE categories.id=sub_categories.c_id;
        $query=$this->db->query("SELECT * from categories,sub_categories WHERE categories.id=sub_categories.c_id");
        $arr = $query->result_array();
        return $arr;
    }
    
    function showdata_categories()
    {
        $qry=$this->db->get('categories');
        $arr=$qry->result_array();
        return $arr;
    }

    function showdata_product()
    {
        $qry=$this->db->select('*')->order_by('p_id',"desc")->limit(2)->get('product');
		$arr=$qry->result_array();
		return $arr;
    }

    function showdata_slider()
    {
        $qry=$this->db->get('slider');
		$arr=$qry->result_array();
		return $arr;
    }

    

    function categories_product($c_id)
    {
        $id= $this->Product_model->show_currentlivepoduct();

        $arrays = array();
        foreach ($id as $value) {
            $arrays[] =  explode(',', $value['product_id']);
        }
        if($arrays != null){
        $myarray = call_user_func_array('array_merge', $arrays);
        } else {
            $myarray = [];
        }



        if($myarray == null){
        $this->db->select("*");
        $this->db->from('categories');
        $this->db->where('categories.id',$c_id);
        $this->db->join('product', 'product.c_id = categories.id');
        $querys = $this->db->get();
        } else{

        $query = " SELECT * FROM product, categories";
            $query .= " WHERE p_id NOT IN (";

            $count = 0;
            foreach($myarray as $item) {
                $query .= $item;
                if ($count != count($myarray) - 1)
                    $query .= ",";
                $count++;
            }

            $query .= ")";
            $query .= " AND categories.id = $c_id AND product.c_id = categories.id";
            // print_r($query);
            $querys = $this->db->query($query); 
        }
        
        $arr = $querys->result_array();

        // echo '<pre>';
        // print_r($arr);
        // die;
		return $arr;
    }

    function subcategories_product($c_id)
    {
        $id= $this->Product_model->show_currentlivepoduct();

        $arrays = array();
        foreach ($id as $value) {
            $arrays[] =  explode(',', $value['product_id']);
        }
        if($arrays != null){
        $myarray = call_user_func_array('array_merge', $arrays);
        } else {
            $myarray = [];
        }



        if($myarray == null){
        $this->db->select("*");
        $this->db->from('sub_categories');
        $this->db->where('sub_categories.subc_id',$c_id);
        $this->db->join('product', 'product.subc_id = sub_categories.subc_id');
        $querys = $this->db->get();
        } else {

        $query = " SELECT * FROM product, sub_categories";
            $query .= " WHERE p_id NOT IN (";

            $count = 0;
            foreach($myarray as $item) {
                $query .= $item;
                if ($count != count($myarray) - 1)
                    $query .= ",";
                $count++;
            }

            $query .= ")";
            $query .= " AND sub_categories.subc_id = $c_id AND product.subc_id = sub_categories.subc_id";
            // print_r($query);
            $querys = $this->db->query($query); 
        }
        
        $arr = $querys->result_array();

        // echo '<pre>';
        // print_r($arr);
        // die;
        return $arr;
    }

  //   function subcategories_product($c_id)
  //   {
  //       $this->db->select("*");
  //       $this->db->from('sub_categories');
  //       $this->db->where('sub_categories.subc_id',$c_id);
  //       $this->db->join('product', 'product.subc_id = sub_categories.subc_id');
  //       $query = $this->db->get();
  //       $array['subcategories'] = $query->result_array();

  //       $arr['saleproduct'] = $this->Product_model->show_currentlivepoduct();

  //       function searchForId($search_value, $array, $id_path) {
  //           foreach ($array as $key1 => $val1) {

  //               $temp_path = $id_path;
  //               array_push($temp_path, $key1);
  //               if(is_array($val1) and count($val1)) {
  //                   foreach ($val1 as $key2 => $val2) {
  //                       if($val2 == $search_value) {
  //                           array_push($temp_path, $key2);
  //                           return true;
  //                       }
  //                   }
  //               } else if($val1 == $search_value) {
  //                   return 'true';
  //               }
  //           }

  //           return null;
  //       }
  //       $result = array();
  //       foreach($arr['saleproduct'] as $sale){ 
  //           foreach($array['subcategories'] as $rows){
  //               $result[] = searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'));
  //           } 
  //       }

  //       $withsale = implode("",$result);

  //       foreach($array['subcategories'] as $rows){
  //           $sales = 0;
  //           $single_product_sale_price = $rows['price'];
  //           foreach($arr['saleproduct'] as $sale){
  //               if(searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'))){
  //                   $sales = $sale['sale_percentage'];
  //                   $sale_price = $rows['price'] * $sales / 100;
  //                   $single_product_sale_price = $rows['price']-$sale_price;
  //               }
  //           }

  //           $rows['sales'] = $sales;

  //           $cartdata[] = array(
  //               "p_id" => $rows['p_id'],
  //               "sale_percentage" => $sales,
  //               "c_id" => $rows['c_id'],
  //               "subc_id" => $rows['subc_id'],
  //               "pname" => $rows['pname'],
  //               "price" => $rows['price'],
  //               "sale_price" => $single_product_sale_price,
  //               "image" => $rows['image'],
  //               "weight" => $rows['weight'],
  //               "stock" => $rows['stock'],
  //               "sale" => $rows['sale'],
  //           );
  //       }

  //       if($array['subcategories'] == null){
  //           $cartdata = [];
  //       }


  //       echo '<pre>';
  //       print_r($cartdata);
  //       die;
		// return $cartdata;
  //   }

    function getAllCountries()
    {
        $qry=$this->db->get('country');
		$arr=$qry->result_array();
		return $arr;
    }

    function insertOrder_Product(){

    }

    public function getStates() {
        $this->db->select(array('s.id as state_id', 's.country_id', 's.name as state_name'));
        $this->db->from('states as s');
        $this->db->where('s.country_id', $this->_countryID);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCities() {
        $this->db->select(array('i.id as city_id', 'i.name as city_name', 'i.state_id'));
        $this->db->from('cities as i');
        $this->db->where('i.state_id', $this->_stateID);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function contactus_insertdata($data)
    {
        $this->db->insert('contactus',$data);
    }

//     public function show_all_product()
//     {
//         $this->db->select("*");
//         $this->db->from('product');
//         $this->db->join('categories', 'categories.id = product.c_id');
//         $query = $this->db->get();
//         $arr = $query->result_array();
// 		return $arr;
//     }

    public function show_all_product($id)
    {
        // $this->db->select("*");
        // $this->db->from('product');
        // $this->db->join('categories', 'categories.id = product.c_id');
        // $query = $this->db->get();

        if($id == null){
            $query = " SELECT * FROM product, categories WHERE categories.id = product.c_id";
        } else{

        $query = " SELECT * FROM product, categories";
            $query .= " WHERE p_id NOT IN (";

            $count = 0;
            foreach($id as $item) {
                $query .= $item;
                if ($count != count($id) - 1)
                    $query .= ",";
                $count++;
            }

            $query .= ")";
            $query .= " AND categories.id = product.c_id";
        }
        $qry = $this->db->query($query); 
        $arr = $qry->result_array();
		return $arr;
    }

    function show_saleproduct()
    {
        date_default_timezone_set("Asia/Kolkata");
        $datetimes = date('Y-m-d H:i:s');
        $query = $this->db->query("SELECT * FROM sale_product WHERE starttime <= '$datetimes'"); 
        // $query = $this->db->get('sale_product');
        $arr['sale_product'] = $query->result_array();
        // echo '<pre>';
        // print_r($arr); exit;
        $product_id = array();
        foreach($arr['sale_product'] as $row)
        {
            $product_id[] = explode(',',$row['product_id']);
        }
        if($product_id != null){
        $product_id = call_user_func_array('array_merge', $product_id);
        $arrs['product'] = array();
        foreach($product_id as $rowid)
        {
            $this->db->select('*');
            $this->db->from('product');
            
            $this->db->where('p_id', $rowid);
            $querys = $this->db->get();
            $res=$querys->result_array();
            
            array_push($arrs['product'],$querys->result_array());
        }
        $data = array_merge($arr,$arrs);
        } else {
            $data = [];
        }
        // echo '<pre>'; print_r($data); exit;
        return $data;
    }
    
    function searching_data($search)
    {
        $result = $this->db->like('pname', $search)
             ->get('product');
        return $result->result_array();
    }

    function show_reviewdata()
    {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('registration', 'registration.user_id = review.user_id');
        $this->db->join('product', 'product.p_id = review.product_id');
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }
    // function show_product($c_id)
    // {
    //     $this->db->where('c_id',$c_id);
    //     $qry=$this->db->get('product');
	// 	$arr=$qry->result_array();
	// 	return $arr;
    // }

    // function show_productvariation($p_id)
    // {
    //     $this->db->select("*");
    //     $this->db->from('product');
    //     $this->db->where('product.p_id',$p_id);
    //     $this->db->join('variation', 'product.p_id = variation.p_id');
    //     $query = $this->db->get();
    //     $arr = $query->result_array();
	// 	return $arr;
    // }

    // function registration_insertdata($data)
    // {
    //     $this->db->insert('registration',$data);
    // }

    // function check_user($emailid,$password)
	// {
	// 	$emailid=$this->input->post('email_id');	
	// 	$password=$this->input->post('password');
	// 	$this->db->where('email_id',$emailid);
	// 	$this->db->where('password',$password);
	// 	$qry=$this->db->get('registration');
	// 	//echo $this->db->last_query();
	// 	return $qry;
		
    // }

    // function showdata_user($user_id)
    // {
    //     $this->db->where('user_id',$user_id);
    //     $qry=$this->db->get('registration');
	// 	$arr=$qry->result_array();
	// 	return $arr;
    // }

    // function billing_insertdata($data)
    // {
    //     $this->db->insert('billing_detail',$data);
    // }

    // function shipping_insertdata($data)
    // {
    //     $this->db->insert('shipping_detail',$data);
    // }

    // function cart_insertdata($data)
    // {
    //     $this->db->insert('add_cart',$data);
    // }

}