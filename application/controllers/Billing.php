<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Home_model');
        $this->load->model('Billing_model');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->library('Paypal_lib');
    }
    
    public function checkout($user_id)
    {//echo 'hii';
        //$total = $this->input->get('hidden'); print_r($total);
        $data=array();
        if($this->input->post('submit'))
        {
            $order_id = $this->input->post('order_id');
            $userid = $this->input->post('user_id');
            $f_name = $this->input->post('fname');
            $l_name = $this->input->post('lname');
            $company_name = $this->input->post('company');
            $address = $this->input->post('address');
            $country = $this->input->post('country');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $zip = $this->input->post('zip');
            $email_id = $this->input->post('email_id');
            $phone_no = $this->input->post('phone_no');

            $this->form_validation->set_rules('fname','First Name','required');
            $this->form_validation->set_rules('lname','Last Name','required');
            $this->form_validation->set_rules('company','Company Name','required');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('country','Country','required');
            $this->form_validation->set_rules('state','State','required');
            $this->form_validation->set_rules('city','City','required');
            $this->form_validation->set_rules('zip','Zip','required');
            $this->form_validation->set_rules('email_id','Email','required|valid_email');
            $this->form_validation->set_rules('phone_no','Phone','required|min_length[10]|max_length[10]|numeric');

            if($this->form_validation->run()==FALSE)
            { 
                $res = array(
                    'status' => "fail",
                    'message' => "registration fail"
                );

            } else {
                $data = array(
                    'order_id' => $order_id,
                    'user_id' => $userid,
                    'f_name' => $f_name,
                    'l_name' => $l_name,
                    'company_name' => $company_name,
                    'address' => $address,
                    'country' => $country,
                    'state' => $state,
                    'city' => $city,
                    'zip' => $zip,
                    'email_id' => $email_id,
                    'phone_no' => $phone_no
                );
                // print_r($data); exit;
                $this->Billing_model->billing_insertdata($data);
                $res = array(
                    'status' => "success",
                    'message' => "Add billing detail Successfully"
                );
                redirect('Billing/buy/'.$user_id);
            }
        }
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
        // $arr['productvariation'] = $this->Billing_model->show_productvariation($user_id);
        $arr['productvariation'] = $this->Product_model->show_cartdata($user_id);
        $arr['shipping'] = $this->Product_model->show_shipping();
        $arr['Countries'] = $this->Home_model->getAllCountries();
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);

        // echo '<pre>'; print_r($arr); die;
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/checkout',$arr);
    }

    function order()
    {
        //echo 'hii';
        $this->session->set_userdata('subtotal',$_POST["subtotal"]);
        
    }

    function orderdata_insert()
    {

        // $total = $this->session->userdata('subtotal');
        $user_id = $_POST['user_id'];
        $shipping_id = $_POST['shipping_id'];
        $sub_total = $_POST['sub_total'];
        $order_id = $_POST['order_id'];
        $total = $_POST['total'];
        $data = array(
            'order_id' => $order_id,
            'user_id' => $user_id,
            'shipping_id' => $shipping_id,
            'sub_total' => $sub_total,
            'total' => $total
        );
        // print_r($data);
        // exit;
        $this->Billing_model->order_insertdata($data);
        echo json_encode($data);
    }

    function buy($id){ 
        // Set variables for paypal form 
        $returnURL = base_url().'paypal/success'; //payment success url 
        $cancelURL = base_url().'paypal/cancel'; //payment cancel url 
        $notifyURL = base_url().'paypal/ipn'; //ipn url 
         
        // Get product data from the database 
        $product = $this->Billing_model->getRows($id); //print_r($product); exit;
        $total = $this->session->userdata('subtotal');
        // Get current user ID from the session (optional) 
        $userID = !empty($_SESSION['user_id'])?$_SESSION['user_id']:1; 
         
        // Add fields to paypal form 
        $this->paypal_lib->add_field('return', $returnURL); 
        $this->paypal_lib->add_field('cancel_return', $cancelURL); 
        $this->paypal_lib->add_field('notify_url', $notifyURL); 
        $this->paypal_lib->add_field('item_name', $product['f_name']); 
        $this->paypal_lib->add_field('custom', $userID); 
        $this->paypal_lib->add_field('item_number',  $product['bill_id']); 
        $this->paypal_lib->add_field('amount',  $total); 
         
        // Render paypal form 
        $this->paypal_lib->paypal_auto_form(); 
    } 

   
}