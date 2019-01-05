<?php

/**
* 
*/
class Cart extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('cart');
	}

	function index()
	{
		$data['products'] = array(
				array(
					'id' => 'abc',
					'qty' => 1,
					'price' => 300,
					'name' => 'Laptop1'
				),
				array(
					'id' => 'def',
					'qty' => 1,
					'price' => 400,
					'name' => 'Laptop2'
				),
				array(

					'id' => 'xyz',
					'qty' => 1,
					'price' => 500,
					'name' => 'Laptop3'
				)

		);
		if($this->input->get('id') != '')
		{
			$this->cart->insert($data['products'][$this->input->get('id')]);
		}
		$this->load->view('learning/cart_view',$data);
	}
}