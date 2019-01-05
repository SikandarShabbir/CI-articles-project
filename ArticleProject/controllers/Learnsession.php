<?php

/**
* 
*/
class Learnsession extends CI_Controller
{
	
	// public function __construct(argument)
	// {
	// 	# code...
	// }

	public function index()
	{
		$data = array('username' => "Test");
		$this->session->set_userdata($data);
		echo "<h4>Welcome". $this->session->userdata('username')."</h4>";
	// echo "Yeh lo". $this->session->has_userdata('username'); exit;

		echo "<a href='".base_url()."Learnsession/logout' >Logout</a>";
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		echo "<h4>Logout Successfully</h4>";
		echo "Welcome".$this->session->userdata('username');
		// redirect('user/index');
	}
}