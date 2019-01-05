<?php

//You can Extend built in function of Email class here


class MY_Email extends CI_Email {

	// public function __construct()
 //    {
 //        parent::__construct();
 //    }
	public function test()
	{
		echo "Email Library Extended";
	}
}