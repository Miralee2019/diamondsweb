<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->database();
        $this->load->model('Product_model');
        $this->load->model('Home_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function popup_product($p_id = null)
    {
        //echo 'hii';
        //print_r($p_id);
        $arr['productvariation'] = $this->Product_model->show_productvariation($p_id);
        echo json_encode($arr);
    }
    
    //     public function product($p_id = null)
    // { //echo 'hi';
    //     $user_id = $this->session->userdata('user_id');
    //     $subcategories = $this->Home_model->show_subcategories();
    //     //echo '<pre>';print_r($arr['sub']);
    //     $arr['categories'] = $this->Home_model->showdata_categories();
    //     foreach ($subcategories as $subcat)
    //     {               
    //         $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
    //         // print_r($recent_subcategories);
    //         // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
    //     }
    //     //echo "<pre>";print_r($recent_subcategories);
    //     $arr['subcategorie'] = $recent_subcategories;
    //     $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
    //     $arr['user_id'] = $this->session->userdata('user_id');
    //     $arr['productvariation'] = $this->Product_model->show_productvariation($p_id);
    //     $arr['review'] = $this->Product_model->show_review($p_id);
    //     // echo '<pre>';
    //     // print_r($arr['review']);
    //     // die;
    //     $this->load->view('frontend/header',$arr);
    //     $this->load->view('frontend/mobile_header',$arr);
    //     $this->load->view('frontend/product',$arr);
    // }
    
//         public function product($p_id = null)
//     { //echo 'hi';
//     $user_id = $this->session->userdata('user_id');
//     $subcategories = $this->Home_model->show_subcategories();
//     // echo '<pre>';print_r($arr['sub']);
//     $arr['categories'] = $this->Home_model->showdata_categories();
//     foreach ($subcategories as $subcat)
//     {               
//         $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
//     }
//     $array = array();
//     $arr['subcategorie'] = $recent_subcategories;
//     $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
//     $arr['user_id'] = $this->session->userdata('user_id');
//     $array['productvariation'] = $this->Product_model->show_productvariation($p_id);
//     $arr['saleproduct'] = $this->Product_model->show_currentlivepoduct();
//     $arr['review'] = $this->Product_model->show_review($p_id);



//     function searchForId($search_value, $array, $id_path) {

//         foreach ($array as $key1 => $val1) {

//             $temp_path = $id_path;
//             array_push($temp_path, $key1);
//             if(is_array($val1) and count($val1)) {
//                 foreach ($val1 as $key2 => $val2) {
//                     if($val2 == $search_value) {
//                         array_push($temp_path, $key2);
//                         return true;
//                     }
//                 }
//             } else if($val1 == $search_value) {
//                 return join(" -->false ", $temp_path);
//             }
//         }

//         return null;
//     }

//     foreach($arr['saleproduct'] as $sale){ 
//         foreach($array['productvariation'] as $rows){
//             if(searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'))){
//                 $arr['product'] = $array['productvariation'];
//                 $sale_price = $rows['price'] * $sale['sale_percentage'] / 100;
//                 $sale_count = $rows['price']-$sale_price;
//                 $arr['product'][0]['sale_price'] = $sale_count;
//                 $arr['product'][0]['sale_percentage'] = $sale['sale_percentage'];
//             }
//         }
//     }
// $this->load->view('frontend/header',$arr);
// $this->load->view('frontend/mobile_header',$arr);
// $this->load->view('frontend/product',$arr);
// }


    public function product($p_id = null)
    { //echo 'hi';
    $user_id = $this->session->userdata('user_id');
    $subcategories = $this->Home_model->show_subcategories();
    // echo '<pre>';print_r($arr['sub']);
    $arr['categories'] = $this->Home_model->showdata_categories();
    foreach ($subcategories as $subcat)
    {               
        $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
    }
    $array = array();
    $arr['subcategorie'] = $recent_subcategories;
    $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
    $arr['user_id'] = $this->session->userdata('user_id');
    $array['productvariation'] = $this->Product_model->show_productvariations($p_id);
    $arr['saleproduct'] = $this->Product_model->show_currentlivepoduct();
    $arr['review'] = $this->Product_model->show_review($p_id);
    $arr['diamond_size'] = $this->Product_model->show_diamond_size($p_id);


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
        foreach($array['productvariation'] as $rows){
            $result[] = searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'));
        } 
    }

    $withsale = implode("",$result);

    foreach($arr['saleproduct'] as $sale){ 
        foreach($array['productvariation'] as $rows){            
            if($withsale == 'true'){
                $arr['product'] = $array['productvariation'];
                $sale_price = $rows['price'] * $sale['sale_percentage'] / 100;
                $sale_count = $rows['price']-$sale_price;
                $arr['product'][0]['sale_price'] = $sale_count;
                $arr['product'][0]['sale_percentage'] = $sale['sale_percentage'];
            } else {
                $sale['sale_percentage'] = 0;
                $arr['product'] = $array['productvariation'];
                $sale_price = $rows['price'] * $sale['sale_percentage'] / 100;
                $sale_count = $rows['price']-$sale_price;
                $arr['product'][0]['sale_price'] = $sale_count;
                $arr['product'][0]['sale_percentage'] = $sale['sale_percentage'];
            }
        }
    }

    if($arr['saleproduct'] == null) {
        $arr['product'] = $array['productvariation'];
        $arr['product'][0]['sale_price'] = $array['productvariation'][0]['price'];
        $arr['product'][0]['sale_percentage'] = 0;
    }


    // echo '<pre>';
    // print_r($arr);
    // die;
    $this->load->view('frontend/header',$arr);
    $this->load->view('frontend/mobile_header',$arr);
    $this->load->view('frontend/product',$arr);
}

    public function reviews()
    {
        //$product_id = $this->uri->segment('3');print_r($product_id);
        $user_id = $this->session->userdata('user_id'); //print_r($user_id);

        if($user_id == ''){


            

           //  function popup(){
           //      $popup = '<script language="javascript">';
           //      $popup .= "alert('you are not logged in.. please try after login')";
           //      $popup .= '</script>';
           //      echo $popup;



           //      function moveanotherpage(){
           //         // sleep(4);
           //         return redirect($_SERVER['REQUEST_URI']);
           //     }

           //     moveanotherpage();
           // }

           // popup();
            // usleep(4);

            


            
            // die;

            // if($popup){
            //     sleep(4);
            //     return redirect($_SERVER['REQUEST_URI']);
            // }


            // sleep(3);

            // $now = time();
            // while ($now + 4 > time()) {
            //     // do nothing
            // }
            // return redirect($_SERVER['REQUEST_URI']);
        }
        $data=array();
        // if($this->input->post('submit'))
        // {
            $email = $this->input->post('email');
            $message = $this->input->post('message');
            $product_id = $this->input->post('product_id');
            $rating = $this->input->post('rating');

            $this->form_validation->set_rules('email','Email Id','required');
            $this->form_validation->set_rules('message','message','required');
            $this->form_validation->set_rules('rating','rating','required');

            if($this->form_validation->run()==FALSE)    
            { 
                $res = array(
                    'status' => "fail",
                    'message' => "registration fail"
                );

            }else{
                $data = array(
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'email' => $email,
                    'message' => $message,
                    'rating' => $rating
                );
                //print_r($data); exit;
                $this->Product_model->review_insertdata($data);
                $res = array(
                    'status' => "success",
                    'message' => "Add to cart Successfully"
                );
                redirect('Product/product/'.$product_id);
            }
    }

    // public function product($p_id = null)
    // { //echo 'hi';
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
    //     $arr['user_id'] = $this->session->userdata('user_id');
    //     $arr['productvariation'] = $this->Product_model->show_productvariation($p_id);
    //     $this->load->view('frontend/header',$arr);
    //     $this->load->view('frontend/mobile_header',$arr);
    //     $this->load->view('frontend/product',$arr);
    // }

    // public function reviews()
    // {
    //     //$product_id = $this->uri->segment('3');print_r($product_id);
    //     $user_id = $this->session->userdata('user_id'); //print_r($user_id);
    //     $data=array();
    //     // if($this->input->post('submit'))
    //     // {
    //         $email = $this->input->post('email');
    //         $message = $this->input->post('message');
    //         $product_id = $this->input->post('product_id');

    //         $this->form_validation->set_rules('email','Email Id','required');
    //         $this->form_validation->set_rules('message','message','required');

    //         if($this->form_validation->run()==FALSE)    
    //         { 
    //             $res = array(
    //                 'status' => "fail",
    //                 'message' => "registration fail"
    //             );

    //         }else{
    //             $data = array(
    //                 'user_id' => $user_id,
    //                 'product_id' => $product_id,
    //                 'email' => $email,
    //                 'message' => $message
    //             );
    //             //print_r($data); exit;
    //             $this->Product_model->review_insertdata($data);
    //             $res = array(
    //                 'status' => "success",
    //                 'message' => "Add to cart Successfully"
    //             );
    //             redirect('Product/product/'.$product_id);
    //         }
    // }

    public function add_to_cart($product_id = null)
    {
        $user_id = $this->session->userdata('user_id');
         //print_r($user_id);
        if($this->session->userdata('user_id')) {
            $data=array();
            
            $size = $this->input->post('size');
            $size = explode(',', $size)[0];
            $color = $this->input->post('color');
            $quantity = $this->input->post('quantity');
            $hide_price = $this->input->post('hide_price');

            $data = array(
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'size' => $size,
                'color' => $color,
                'total_price' => $hide_price
            );
                    $cart = $this->Product_model->show_cartdata($user_id); //print_r($cart); exit;
                    if($cart != null)
                    {
                        $availabe = 'false';
                        foreach($cart as $cartdata){ 
                            if($cartdata['product_id'] == $data['product_id']){
                                $availabe = 'true';
                            }
                        } 
                        if($availabe == 'true'){
                            redirect('Product/cart');
                        } else {
                            $this->Product_model->cart_insertdata($data);
                            redirect('Product/cart');
                        }
                    }else{
                        $this->Product_model->cart_insertdata($data);
                        redirect('Product/cart');
                    }
                $res = array(
                    'status' => "success",
                    'message' => "Add to cart Successfully"
                );
            }
        else{
            redirect('Home/login');
        }
    } 

    public function cart()
    {
        $user_id = $this->session->userdata('user_id'); //print_r($user_id);
        $arr['cart'] = $this->Product_model->show_cartdata($user_id);
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $arr['shipping'] = $this->Product_model->show_shipping();//echo "<pre>"; print_r($arr); exit;
        $subcategories = $this->Home_model->show_subcategories();
        // echo '<pre>';print_r($arr['cart']); die;
        $arr['categories'] = $this->Home_model->showdata_categories();
        foreach ($subcategories as $subcat)
        {            
            $recent_subcategories[$subcat['categories_name']][$subcat['subc_id']] =  $subcat['subcategories_name'];
            // $recent_subcategories[$subcat->subcategories_name][] = $subcat->subcategories_name;
        }
        // echo "<pre>";print_r($arr); exit;
        // $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $arr['subcategorie'] = $recent_subcategories;

        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/cart',$arr);
    }

    function delete_cart($cart_id = null)
    {
        $this->Product_model->delete_cartdata($cart_id);
        redirect('Product/cart');
    }

    // function update_quantity()
    // { 
    //     $quantity = $_POST['quantity'];
    //     $id = $_POST['id'];
    //     $price = $_POST['price'];
    //     $total = $price * $quantity;
    //     $total_price = $this->Product_model->updaterecords($id,$quantity,$total);
    //     return $total_price;
    // }
    
    function update_quantity()
    { 
        $quantity = $_POST['quantity'];
        $id = $_POST['id'];

        $arr['saleproduct'] = $this->Product_model->show_currentlivepoduct();
        $array['productvariation'] = $this->Product_model->show_productvariation($id);


        // echo "<script> alert('dasdas') </script>";print_r($array); exit;
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
            foreach($array['productvariation'] as $rows){
                $result[] = searchForId($rows['p_id'],explode(',',$sale['product_id']), array('$'));
            } 
        }

        $withsale = implode("",$result);

        foreach($arr['saleproduct'] as $sale){ 
            foreach($array['productvariation'] as $rows){  
                if($rows['diamond_value'] != ''){
                    if($withsale == 'true'){
                        $arr['product'] = $array['productvariation'];
                        $sale_price = $rows['diamond_value'] * $sale['sale_percentage'] / 100;
                        $sale_count = $rows['diamond_value']-$sale_price;
                        $arr['product'][0]['sale_price'] = $sale_count;
                        // $arr['product'][0]['sale_percentage'] = $sale['sale_percentage'];
                    } else {
                        $sale['sale_percentage'] = 0;
                        $arr['product'] = $array['productvariation'];
                        $sale_price = $rows['diamond_value'] * $sale['sale_percentage'] / 100;
                        $sale_count = $rows['diamond_value']-$sale_price;
                        $arr['product'][0]['sale_price'] = $sale_count;
                        // $arr['product'][0]['sale_percentage'] = $sale['sale_percentage'];
                    }
                } else {
                    if($withsale == 'true'){
                        $arr['product'] = $array['productvariation'];
                        $sale_price = $rows['price'] * $sale['sale_percentage'] / 100;
                        $sale_count = $rows['price']-$sale_price;
                        $arr['product'][0]['sale_price'] = $sale_count;
                        // $arr['product'][0]['sale_percentage'] = $sale['sale_percentage'];
                    } else {
                        $sale['sale_percentage'] = 0;
                        $arr['product'] = $array['productvariation'];
                        $sale_price = $rows['price'] * $sale['sale_percentage'] / 100;
                        $sale_count = $rows['price']-$sale_price;
                        $arr['product'][0]['sale_price'] = $sale_count;
                        // $arr['product'][0]['sale_percentage'] = $sale['sale_percentage'];
                    }
                }      
            }
        }

        if($arr['saleproduct'] == null) {
            foreach($array['productvariation'] as $rows){  
                if($rows['diamond_value'] != ''){
                    if($withsale == 'true'){
                        $arr['product'] = $array['productvariation'];
                        $arr['product'][0]['sale_price'] = $rows['diamond_value'];
                    } else {
                        $arr['product'] = $array['productvariation'];
                        $arr['product'][0]['sale_price'] = $rows['diamond_value'];
                    }
                } else {
                    if($withsale == 'true'){
                        $arr['product'] = $array['productvariation'];
                        $arr['product'][0]['sale_price'] = $rows['price'];
                    } else {
                        $arr['product'] = $array['productvariation'];
                        $arr['product'][0]['sale_price'] = $rows['price'];
                    }
                }      
            }
        }

        $price = $arr['product'][0]['sale_price'];
        $total = $price * $quantity;

        $total_price = $this->Product_model->updaterecords($id,$quantity,$total);
        return $total_price;
    }
}