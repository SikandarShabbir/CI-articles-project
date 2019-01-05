<?php

/**
* 
*/
class Email extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('learning/contact');
	}

	function sendMail()
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
	  'smtp_user' => 'xxx@gmail.com', // change it to yours
	  'smtp_pass' => 'xxx', // change it to yours
	  'mailtype' => 'html',
	  'charset' => 'iso-8859-1',
	  'wordwrap' => TRUE
	);

		$message = '';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
	      $this->email->from('xxx@gmail.com'); // change it to yours
	      $this->email->to('xxx@gmail.com');// change it to yours
	      $this->email->subject('Resume from JobsBuddy for your Job posting');
	      $this->email->message($message);
	      if($this->email->send())
	      {
	      	echo 'Email sent.';
	      }
	      else
	      {
	      	show_error($this->email->print_debugger());
	      }
	  }

	  public function sent()
	  {
	  	$name = $this->input->post('name');
	  	$from = $this->input->post('from');
	  	$subject = $this->input->post('subject');
	  	$message = $this->input->post('message');
		// echo $name." \n" .$from." \n" .$subject."\n " .$message;exit;
	  	$config = Array(
	  		'protocol' => 'smtp',
	  		'smtp_host' => 'ssl://smtp.googlemail.com',
	  		'smtp_port' => 465,
		  'smtp_user' => 'sikandarshabbir11@gmail.com', // change it to yours
		  'smtp_pass' => 'sikandar#123', // change it to yours
		  'mailtype' => 'html',
		  'charset' => 'iso-8859-1',
		  'wordwrap' => TRUE
		);

		 //$message = 'This is message';
	  	$this->load->library('email', $config);
	  	$this->email->set_newline("\r\n");
      $this->email->from($from,'Name'); // change it to yours
      $this->email->to('webtech1100@gmail.com');// change it to yours
      $this->email->subject($subject);
      $this->email->message($message);
      if($this->email->send())
      {
      	echo 'Email sent.';
      }
      else
      {
      	show_error($this->email->print_debugger());
      }


		// $message = $this->input->post('message');
		// echo $message;
		// unset($data['submit']);
		// print_r($data); exit;
	// 	$config['protocol'] = 'smtp';
	// 	$config['smtp_host'] = 'ssl:/gmail.smtp.com';
	// 	$config['smtp_port'] = 465;
	// 	$config['smtp_user'] = 'sikandarshabbir11.com';
	// 	$config['smtp_pass'] = 'sikandar#123';

	// 	$this->load->library('email',$config);
	// 	$this->email->from($from, $name);
	// 	$this->email->subject($subject);
	// 	$this->email->to('sikandarshabbir11@gmail.com');
	// 	$this->email->message($message);
	// 	if($this->email->send())
	// 	{
	// 		echo "Email Send";
	// 	}
	// 	else
	// 	{
	// 		echo "Email Not Send";
	// 	}
	// 	// $this->load->view();
  }
}