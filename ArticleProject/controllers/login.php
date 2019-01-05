<?php

/**
* 
*/
class Login extends MY_controller
{
	public function index()
	{
		if( $this->session->userdata('user_id') ) {
			return redirect('admin/dashboard');
		}
		$this->load->helper('form');
		$this->load->view("public/admin_login");
	}
	public function admin_login()
	{
		// echo "Reached Admin login function";
		$this->load->library('form_validation');		
		// $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]|alpha|trim');
		// $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<h6 class="text-danger">','</h6>');

		if ($this->form_validation->run('admin_login'))
		{
			// echo "Validation Success";
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			// echo "Username: $username Password: $password";
			$this->load->model('loginmodel');
			$login_id = $this->loginmodel->login_valid($username,$password);
			if($login_id)
			{
				//credentials Valid..Login Uder
				// echo "Password Match";
				//$this->load->library('session');

				$this->session->set_userdata('user_id',$login_id);
				return redirect('admin/dashboard');
			}
			else
			{
				//Failed
				//echo "Password Do Not Match";
				$this->session->set_flashdata('login_failed', 'Invalid Username/Password.');
				return redirect('login');
			}
		}
		else
		{
			$this->load->view("public/admin_login");
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}


