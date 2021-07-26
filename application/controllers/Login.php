<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $res = array();
        if($this->session->userdata('id'))
        {
            //redirect('admin/Dashbord/index');
        }
        if($this->input->post('submit'))
        {
            $emailid=$this->input->post('email');
            $password=$this->input->post('password');
            
            $check_login=$this->login_model->check_user($emailid,$password);
            //redirect('admin/dashbord');
            $num=$check_login->num_rows();
            if($num==1)     
            {
                $row=$check_login->row_array();
                $this->session->set_userdata('id',$row['id']);
                $this->session->set_userdata('email',$row['email']);
                $this->session->set_userdata('password',$row['password']);
                //print_r ($this->session->set_userdata());
                redirect('admin/Admin');
            }
            else
            {
                echo "Invalid credentioal";
            }
            
        }
        $this->load->view('admin/login');
    }

    public function registration()
    {   
        $data=array();
		if($this->input->post('submit'))
		{
            $fname = $this->input->post('fname');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            
            $this->form_validation->set_rules('fname','First name','required');
            $this->form_validation->set_rules('email','Email','required');
            $this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
							$arr=array(
                            'fname'=>$fname,
                            'email'=>$email,
                            'password'=>$password
                        );
                        //print_r($arr); exit;
                          $this->login_model->insertdata_admin($arr);
                          redirect('admin/Admin/view_admin');
                           
				}
            }
            $this->load->view('admin/add_admin');
    }
    
    public function logout()
    {
        session_destroy();
        redirect("Login");
    }
}