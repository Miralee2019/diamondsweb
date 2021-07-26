<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Footerlink extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Product_model');
        $this->load->library('session');
    }
    function privacy_policy()
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
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('footerlink/privacypolicy');
        $this->load->view('frontend/footer');
    }

    function delivery_information()
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
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('footerlink/deliveryinfo');
        $this->load->view('frontend/footer');
    }

    function terms_conditions()
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
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('footerlink/termsconditions');
        $this->load->view('frontend/footer');
    }

    function returns_exchange_policy()
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
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('footerlink/returnexchange');
        $this->load->view('frontend/footer');
    }

    function diamond_education()
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
        $arr['subcategorie'] = $recent_subcategories;
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('footerlink/diamondeducation');
        $this->load->view('frontend/footer');
    }

}