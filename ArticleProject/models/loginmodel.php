<?php

/**
* 
*/
class Loginmodel extends CI_Model{
	
	public function login_valid($username,$password)
	{
		// $password = md5($password);
		$q = $this->db->where(['uname'=>$username,'pword'=>$password])
					  ->get('users');
					// print_r($q->row());
		
		if( $q->num_rows() )
		{
			// echo "<pre>";
			// print_r($q->row()); exit;
			return $q->row()->id;
			// return TRUE;	
		}
		else 
		{
			return FALSE;
		}		
	}
}