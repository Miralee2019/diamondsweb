<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Userlogin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function check_user($emailid,$password)
	{
		$emailid=$this->input->post('email_id');	
		$password=$this->input->post('password');
		$this->db->where('email_id',$emailid);
		$this->db->where('password',$password);
		$qry=$this->db->get('registration');
		//echo $this->db->last_query();
		return $qry;
		
    }

    function registration_insertdata($data)
    {
        $this->db->insert('registration',$data);
    }
}