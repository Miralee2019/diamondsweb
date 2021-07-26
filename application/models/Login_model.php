<?php

class Login_model extends CI_Model
{
    function insertdata_admin($data)
    {
        $this->db->insert('admin',$data);
    }

    function check_user($emailid,$password)
	{
		$emailid=$this->input->post('email');	
		$password=$this->input->post('password');
		$this->db->where('email',$emailid);
		$this->db->where('password',$password);
		$qry=$this->db->get('admin');
		//echo $this->db->last_query();
		return $qry;
		
    }
}