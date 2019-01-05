<?php

/**
* 
*/
class Learning extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		// $this->load->library('encrypt');
	}
	function index()
	{
		$this->load->view('encrypt_view');
	}
	function encode()
	{
		print_r($this->input->post());
	}
}