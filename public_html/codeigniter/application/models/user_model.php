<?php

class user_model extends CI_Model {

	public function login_auth($username, $password)
	{
		$this->load->library('encrypt');

		//$user_query = $this->db->get_where('users', array('username' => $username, 'password' => $this->encrypt->encode($password)));
		$user_query = $this->db->get_where('users', array('username' => $username, 'password' => $password));


		if($user_query->result())
		{
			return $user_query->row();
		}
		else
		{
			return false;
		}
	}

}