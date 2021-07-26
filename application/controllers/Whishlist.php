<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Whishlist extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('Whishlist_model');
        $this->load->model('Home_model');
        $this->load->model('Product_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function add_whishlist($product_id)
    {
        $user_id = $this->session->userdata('user_id'); //print_r($user_id);
        $data=array();

                $data = array(
                    'user_id' => $user_id,
                    'product_id' => $product_id
                ); //print_r($data); exit;
                $whishlist = $this->Whishlist_model->show_whishlistdata($user_id); //print_r($whishlist);
                if($whishlist != null)
                 { //echo 'hii'; exit;
                    foreach($whishlist as $arr){
                        if($arr['product_id'] == $data['product_id'])
                        {
                            $this->session->set_flashdata('message', 'Already add Whishlist!');
                            redirect('Whishlist/whishlist/'.$product_id);
                        }
                        else {
                            $this->Whishlist_model->whishlist_insertdata($data);
                            redirect('Whishlist/whishlist');
                        }
                    }
                }else{
                    $this->Whishlist_model->whishlist_insertdata($data);
                    redirect('Whishlist/whishlist');
                }
                //print_r($whishlist); exit();
                //$this->Whishlist_model->whishlist_insertdata($data);
                //print_r($data); exit;
                //redirect('Whishlist/whishlist');
    }

    public function whishlist()
    { 
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
        $user_id = $this->session->userdata('user_id'); 
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        $arr['whishlist'] = $this->Whishlist_model->show_whishlistdata($user_id);
        $arr['user_id'] = $this->session->userdata('user_id'); //print_r($arr);
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/whishlist',$arr);
    }

    function delete_whishlist($whishlist_id = null)
    {
        $this->Whishlist_model->delete_whishdata($whishlist_id);
        redirect('Whishlist/whishlist');
    }
}