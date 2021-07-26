<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Home_model');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $subcategories = $this->Home_model->show_subcategories(); //echo '<pre>'; print_r($subcategories);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               //echo '<pre>'; print_r($subcat);
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories; //echo '<pre>'; print_r($arr['subcategorie']);
        $arr['product']=$this->Home_model->showdata_product();
        $arr['slider'] = $this->Home_model->showdata_slider();
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $arr['saleproduct'] = $this->Home_model->show_saleproduct(); //echo '<pre>';print_r($arr['saleproduct']);
        // echo '<pre>';
        // print_r($arr);
        // die;
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/homepage',$arr);
    }

    public function searching()
    {
        $search = $this->input->post('search');
        $user_id = $this->session->userdata('user_id');
        $subcategories = $this->Home_model->show_subcategories();
        //echo '<pre>';print_r($arr['sub']);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $arr['searching'] = $this->Home_model->searching_data($search); //echo '<pre>';print_r($arr['searching']);
        $arr['all_product'] = $this->Home_model->show_all_product();//echo '<pre>';print_r($arr['all_product']);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/searching',$arr);
    }



    public function insertOrder_Product($order_id)
    {
        // $order_id = 'order_607d5ff920761';
        $user_id = $this->session->userdata('user_id');
        $this->db->select("*");
        $this->db->from('add_cart');
        $this->db->where('add_cart.user_id',$user_id);
        $this->db->join('product', 'product.p_id = add_cart.product_id');
        $this->db->join('diamond_size', 'diamond_size.id = add_cart.size', 'LEFT OUTER');
        $querys = $this->db->get();
        $arrr = $querys->result_array();

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

        $arr = array();
           
            foreach($arrr as $rows){
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

                $arr[] = array(
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



        // echo '<pre>';
        // print_r($arr);
        // die;
        for($i=0; $i<count($arr); $i++) {
            $updateStock = "UPDATE product SET Stock= '".$arr[$i]['stock']-$arr[$i]['quantity']."' WHERE p_id= '".$arr[$i]['p_id']."'";
            $this->db->query($updateStock);
        }

        $sqlQuery ="INSERT INTO order_product(user_id, order_id, product_id, pname, price, diamond_size, diamond_value, quentity, color, weight) VALUES ";
            for($i=0; $i<count($arr); $i++) {
             $sqlQuery .="('".$user_id."', '".$order_id."', '".$arr[$i]['p_id']."', '".$arr[$i]['pname']."', '".$arr[$i]['price']."', '".$arr[$i]['diamond_size']."', '".$arr[$i]['diamond_value']."', '".$arr[$i]['quantity']."', '".$arr[$i]['color']."', '".$arr[$i]['weight']."'),";
         }
         $sqlQuery = rtrim($sqlQuery, ',');
         $arrs = $this->db->query($sqlQuery);

         if($arrs == 1){
            $this->db->where('user_id',$user_id);
            $this->db->delete('add_cart');
        } else {
            echo 'catch some error.';
        }
    }

    public function categories($categories_id)
    {
        //print_r($categories_id);
        $user_id = $this->session->userdata('user_id');
        $subcategories = $this->Home_model->show_subcategories();
        //echo '<pre>';print_r($arr['sub']);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $arr['category']=$this->Home_model->categories_product($categories_id); //print_r($arr);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/categories',$arr);
    }

    public function subcategories($subcategories_id)
    {
        $user_id = $this->session->userdata('user_id');
        //print_r($categories_id);
        $subcategories = $this->Home_model->show_subcategories();
        //echo '<pre>';print_r($arr['sub']);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $arr['category']=$this->Home_model->subcategories_product($subcategories_id); 
        // echo '<pre>';
        // print_r($arr);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/subcategories',$arr);
    }

    public function contactus()
    {
        $user_id = $this->session->userdata('user_id');
        $subcategories = $this->Home_model->show_subcategories();
        //echo '<pre>';print_r($arr['sub']);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/contactus');
    }

    public function add_contactusdata()
    {
        $user_id = $this->session->userdata('user_id'); //print_r($user_id);
        $data=array();

            $fname = $this->input->post('fname');
            $lname = $this->input->post('lname');
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $message = $this->input->post('message');

            $this->form_validation->set_rules('fname','First name','required');
            $this->form_validation->set_rules('lname','Last name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('phone','Phone no','required');
            $this->form_validation->set_rules('message','Message','required');

            if($this->form_validation->run()==FALSE)    
            { 
                $res = array(
                    'status' => "fail",
                    'message' => "registration fail"
                );

            }else{
                $data = array(
                    'f_name' => $fname,
                    'l_name' => $lname,
                    'email' => $email,
                    'phone_no' => $phone,
                    'message' => $message
                );
                //print_r($data); exit;
                $this->Home_model->contactus_insertdata($data);
                $res = array(
                    'status' => "success",
                    'message' => "Add to cart Successfully"
                );
                redirect('Home/contactus');
            }
    }

    public function aboutus()
    {
        $user_id = $this->session->userdata('user_id');
        $subcategories = $this->Home_model->show_subcategories();
        //echo '<pre>';print_r($arr['sub']);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/aboutus');
    }

    public function login()
    {
        $user_id = $this->session->userdata('user_id');
        $subcategories = $this->Home_model->show_subcategories();
        //echo '<pre>';print_r($arr['sub']);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories;
        $arr['Countries'] = $this->Home_model->getAllCountries();
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/login',$arr);
    }

    public function getstates() {
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $data['state']=$this->db->get('state')->result_array();
        $this->load->view('frontend/get_state',$data);
    }
 
    function getcities() {
        $id = $this->input->post('id');
        $this->db->where('id',$id);
        $data['city']=$this->db->get('city')->result_array();
        $this->load->view('frontend/get_city',$data);
    }

    // public function shop()
    // {
    //     $user_id = $this->session->userdata('user_id');
    //     $subcategories = $this->Home_model->show_subcategories();
    //     //echo '<pre>';print_r($arr['sub']);
    //     $arr['categories'] = $this->Home_model->showdata_categories();
    //     foreach ($subcategories as $subcat)
    //     {               
    //         $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
    //         // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
    //     }
    //     //echo "<pre>";print_r($recent_subcategories);
    //     $arr['subcategorie'] = $recent_subcategories;
    //     $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
    //     $arr['all_product'] = $this->Home_model->show_all_product(); //echo '<pre>';  print_r($arr['all_product']); exit();
    //     $arr['show_reviewdata'] = $this->Home_model->show_reviewdata();
    //     $this->load->view('frontend/header',$arr);
    //     $this->load->view('frontend/mobile_header',$arr);
    //     $this->load->view('frontend/shop',$arr);
    // }
    
    
        public function shop()
    {
        $user_id = $this->session->userdata('user_id');
        $subcategories = $this->Home_model->show_subcategories();
        //echo '<pre>';print_r($arr['sub']);
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {               
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        //echo "<pre>";print_r($recent_subcategories);
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $data = $this->Product_model->show_currentlivepoduct();
        $arrays = array();
        foreach ($data as $value) {
            $arrays[] =  explode(',', $value['product_id']);
        }
        if($arrays != null){
        $myarray = call_user_func_array('array_merge', $arrays);
        } else {
            $myarray = [];
        }
        $arr['all_product'] = $this->Home_model->show_all_product($myarray);

        $arr['show_reviewdata'] = $this->Home_model->show_reviewdata();
        
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/shop',$arr);
    }

    public function logout()
    {
        session_destroy();
        redirect('Home');
    }
    
}