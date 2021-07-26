<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Userlogin_model');
        $this->load->library('form_validation');
        $this->load->model('Home_model');
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->load->library('email');
    }

    public function index()
    { 
        $res = array();
            if($this->session->userdata('user_id'))
            {
                //redirect('admin/Dashbord/index');
            }
            if($this->input->post('submit'))
            {
                $emailid=$this->input->post('email_id');
                $password=$this->input->post('password');
                //print_r($this->input->post());
                $check_login=$this->Userlogin_model->check_user($emailid,$password);
                //redirect('admin/dashbord');
                $num=$check_login->num_rows();
                //print_r($num);
                if($num==1)     
                {
                    $row=$check_login->row_array(); //print_r($row);
                    $this->session->set_userdata('user_id',$row['user_id']);
                    $this->session->set_userdata('email_id',$row['email_id']);
                    $this->session->set_userdata('password',$row['password']);
                    //echo '<pre>'; print_r($this->session->userdata('user_id'));exit;
                    redirect('Home');
                }
                else
                {
                    redirect('Home/login');
                }
                
            }
    }

    public function user_registration()
    {
        $data=array();
            
        if($this->input->post('submit'))
        {
            $f_name = $this->input->post('f_name');
            $l_name = $this->input->post('l_name');
            $company_name = $this->input->post('company_name');
            $address = $this->input->post('address');
            $country = $this->input->post('country');
            $state = $this->input->post('state');
            $city = $this->input->post('city');
            $zip = $this->input->post('zip');
            $email_id = $this->input->post('email_id');
            $password = $this->input->post('password');
            $phone_no = $this->input->post('phone_no');

           // print_r($this->input->post());
            
            $this->form_validation->set_rules('f_name','First Name','required');
            $this->form_validation->set_rules('l_name','Last Name','required');
            $this->form_validation->set_rules('company_name','Company Name','required');
            $this->form_validation->set_rules('address','Address','required');
            $this->form_validation->set_rules('country','Country','required');
            $this->form_validation->set_rules('state','State','required');
            $this->form_validation->set_rules('city','City','required');
            $this->form_validation->set_rules('zip','Zip','required');
            $this->form_validation->set_rules('email_id','Email','required|valid_email');
            $this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[8]');
            $this->form_validation->set_rules('phone_no','Phone','required|min_length[10]|max_length[10]|numeric');

            if($this->form_validation->run()==FALSE)
            { echo 'hi';
                $res = array(
                    'status' => "fail",
                    'message' => "registration fail"
                );

            }else{
                $data = array(
                    'f_name' => $f_name,
                    'l_name' => $l_name,
                    'company_name' => $company_name,
                    'address' => $address,
                    'country' => $country,
                    'state' => $state,
                    'city' => $city,
                    'zip' => $zip,
                    'email_id' => $email_id,
                    'password' => $password,
                    'phone_no' => $phone_no
                );
                //print_r($data); exit;
                $this->Userlogin_model->registration_insertdata($data);
                redirect('Home/login');
            }
        }
    } 

    public function forgotpassword()
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
        $arr['slider'] = $this->Home_model->showdata_slider();
        $arr['cart_data'] = $this->Product_model->show_cartdatacount($user_id);
        if($this->input->post('submit'))
        {
            $ci = get_instance();
            $ci->load->library('email');
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.gmail.com";
            $config['smtp_port'] = "465";
            $config['smtp_user'] = "mirapansuriya10198@gmail.com"; 
            $config['smtp_pass'] = "123";
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $config['newline'] = "\r\n";

            $ci->email->initialize($config);

            $ci->email->from('mirapansuriya10198@gmail.com', 'mira');
            $list = $this->input->post('confirmpassword');
            $ci->email->to($list);
            $key = random_int(0, 9999999);
            $key = str_pad($key, 8, 0, STR_PAD_LEFT);
            $ci->email->subject('This is an email test');
            $ci->email->message($key);
            //$ci->email->send();
            if ($ci->email->send()) {
                echo 'Your email was sent, thanks chamil.';
            } else {
                show_error($this->email->print_debugger());
            }
        }
        $this->load->view('frontend/header',$arr);
        $this->load->view('frontend/mobile_header',$arr);
        $this->load->view('frontend/forgotpassword');
        $this->load->view('frontend/footer');
    }
}