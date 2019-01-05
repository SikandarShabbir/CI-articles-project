<?php

class Admin extends MY_Controller{
	
	public function __construct()
	{
		parent:: __construct();
		if ( ! $this->session->userdata('user_id')) {
			return redirect('login');
		}
		$this->load->helper('form');
		$this->load->model('articlesmodel','article');
	}
	public function dashboard()
	{
		// echo "Admin Panel:";
		// $this->load->helper('form');
		// $this->load->model('articlesmodel','article');
		$this->load->library('pagination');
		// $config['anchor_class'] = 'class="number" ';
		$config = [
				// 'base_url' => 'http://localhost:8080/Codeigniter/index.php/admin/dashboard',
				'base_url' => base_url('index.php/admin/dashboard'),
				'per_page' => 10,
				'total_rows' => $this->article->num_rows(),
				'anchor_class' => 'class="page-link" ',
				'full_tag_open' => "<ul class='pagination'>",
				'full_tag_close' => "</ul>",
				'first_tag_open' => "<li class='page-item'>",
				'first_tag_close' =>"</li>",
				'last_tag_open' =>  "<li class='page-item'>" ,
				'last_tag_close' => "</li>",
				'next_tag_open' =>  "<li class='page-item'>",
				'next_tag_close' => "</li>",
				'prev_tag_open' =>  "<li class='page-item disable'>",
				'prev_tag_close' => "</li>",
				'num_tag_open' =>   "<li class='page-item'>",
				'num_tag_close' =>  "</li>",
				'cur_tag_open' =>   "<li class='page-item active'><a class='page-link'>",
				'cur_tag_close' =>  "</a></li>",
		];
		// print_r($this->article->num_rows()); exit;
		$this->pagination->initialize($config);
		$articles = $this->article->articles_list($config['per_page'], $this->uri->segment(3) );
		// echo "<pre>";
		// print_r($articles); exit;
		// $articles = $this->article->articles_list()
		$this->load->view('admin/dashboard',['articles'=>$articles]);
		// echo "<pre>";
		// echo "$string";
	}
	public function add_article()
	{
		// $this->load->helper('form');
		$this->load->view('admin/add_article');
	}
	public function store_article()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<h6 class="text-danger">','</h6>');
		// if($this->form_validation->run('add_article_rules'))
		if ($this->form_validation->run('add_article_rules'))
		{
			// echo "Success";
			$post = $this->input->post();
			unset($post['submit']);
			// print_r($post); exit;
			// $this->load->model('articlesmodel','article');
			if($this->article->add_article($post))
			{
				//flash msg insert successful
				//echo "Insert Successful";
				$this->session->set_flashdata('feedback','Article Added Successfully');
				$this->session->set_flashdata('feedback_class','alert-primary');
			}			
			else
			{
				//flash msg insert false
				//echo "Insert Failed";
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback','Failed to Add, Please Try Again:');
			}
			return redirect('admin/dashboard');
		}
		else
		{
			//echo "validation not working";
			$this->load->view('admin/add_article');

			// return redirect('admin/add_article');
		}
	}
	public function edit_article($article_id)
	{
		// echo "$article_id";
		// $this->load->model('articlesmodel','articles');
		$row = $this->article->find_article($article_id);
		// print_r($row);
		// $this->load->helper('form');
		$this->load->view('admin/edit_article',['row'=>$row]);
	}

	public function update_article($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<h6 class="text-danger">','</h6>');
		// if($this->form_validation->run('add_article_rules'))
		if ($this->form_validation->run('add_article_rules'))
		{
			// echo "Success";
			$post = $this->input->post();
			// print_r($post); exit;
			// unset($post['submit']);
			// print_r($post); exit;
			// $this->load->model('articlesmodel','article');
			if($this->article->update_article($id,$post))
			{
				//flash msg insert successful
				//echo "Insert Successful";
				$this->session->set_flashdata('feedback','Article Updated Successfully');
				$this->session->set_flashdata('feedback_class','alert-primary');
			}			
			else
			{
				//flash msg insert false
				//echo "Insert Failed";
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback','Failed to Update, Please Try Again:');
			}
			return redirect('admin/dashboard');
		}
		else
		{	//echo "validation not working";
			$this->load->view('admin/edit_article');
			// return redirect('admin/add_article');
		}
	}
	public function delete_article()
	{
		$id = $this->input->post('article_id');
		// $this->load->model('articlesmodel','article');
			if($this->article->delete_article($id))
			{
				//flash msg insert successful
				//echo "Insert Successful";
				$this->session->set_flashdata('feedback','Article Deleted Successfully');
				$this->session->set_flashdata('feedback_class','alert-primary');
			}			
			else
			{
				//flash msg insert false
				//echo "Insert Failed";
				$this->session->set_flashdata('feedback_class','alert-danger');
				$this->session->set_flashdata('feedback','Failed to Delete, Please Try Again:');
			}
			return redirect('admin/dashboard');
	}
	public function article($id)
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel','article');
		$articles = $this->article->find($id);
		$this->load->view('admin/article_details',compact('articles'));
	}

} 