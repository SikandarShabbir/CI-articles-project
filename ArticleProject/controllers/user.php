<?php

class User extends MY_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		// phpinfo(); exit;
		// $newdata = array(
		//         'username'  => 'johndoe',
		//         'email'     => 'johndoe@some-site.com',
		//         'logged_in' => TRUE
		// );

		// $this->session->set_userdata($newdata);
		// $this->session->set_flashdata('item', 'value');
		// print_r($_SESSION);exit;
		// echo "item";
		// print_r(isset($_SESSION['username']));
		// $this->session->has_userdata($newdata);
		// $a = $this->session->userdata($newdata); 
		// echo $a;
		// $sections = array(
		//         'query_toggle_count'  => TRUE
		//         // 'queries' => TRUE
		// );
		// $this->load->library('calendar');
		// $prefs = array(
		//         // 'start_day'    => 'saturday',
		//         // 'month_type'   => 'long',
		//         // 'day_type'     => 'short',
		//         // 'local_time' =>  time(),
		//         'show_next_prev' => 'True',
		//         'next_prev_url'   => base_url('user/index/')
		//         // 'show_other_days' => 'TRUE'
		// );

		// $prefs['template'] = array(
		//         'table_open'           => '<table class="calendar">',
		//         'cal_cell_start'       => '<td class="day">',
		//         'cal_cell_start_today' => '<td class="today">'
		// );

		// $this->load->library('calendar', $prefs);

		// echo $this->calendar->generate();



		// $prefs['template'] = '

		//         {table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

		//         {heading_row_start}<tr>{/heading_row_start}

		//         {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		//         {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
		//         {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

		//         {heading_row_end}</tr>{/heading_row_end}

		//         {week_row_start}<tr>{/week_row_start}
		//         {week_day_cell}<td>{week_day}</td>{/week_day_cell}
		//         {week_row_end}</tr>{/week_row_end}

		//         {cal_row_start}<tr>{/cal_row_start}
		//         {cal_cell_start}<td>{/cal_cell_start}
		//         {cal_cell_start_today}<td>{/cal_cell_start_today}
		//         {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

		//         {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
		//         {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

		//         {cal_cell_no_content}{day}{/cal_cell_no_content}
		//         {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

		//         {cal_cell_blank}&nbsp;{/cal_cell_blank}

		//         {cal_cell_other}{day}{/cal_cel_other}

		//         {cal_cell_end}</td>{/cal_cell_end}
		//         {cal_cell_end_today}</td>{/cal_cell_end_today}
		//         {cal_cell_end_other}</td>{/cal_cell_end_other}
		//         {cal_row_end}</tr>{/cal_row_end}

		//         {table_close}</table>{/table_close}
		// ';


		// $this->load->library('calendar', $prefs);
		// $this->output->set_profiler_sections($sections);
		// $this->db->save_queries = FALSE;
		// $this->output->enable_profiler(TRUE);

		// $this->load->library('email');

		// $this->email->from('your@example.com', 'Your Name');
		// $this->email->to('someone@example.com'); 
		// $this->email->cc('another@another-example.com'); 
		// $this->email->bcc('them@their-example.com'); 

		// $this->email->subject('Email Test');
		// $this->email->message('Testing the email class.');	

		// $this->email->send();

		// echo $this->email->print_debugger(); exit;


		// $this->load->helper('custome');
		// test();exit;
		// $this->load->helper('array');
		// test();exit;
		// $this->load->library('test');
		// $this->test->custome_library();exit;
		// $this->load->library('email');
		// // $this->email->test();exit;
		// $this->load->library('Email');
		// $this->email->overriden_library();exit;

		$this->load->helper('form');
		$this->load->model('articlesmodel','article');
		// $this->load->view("public/articles_list");
		///////////////////////////////////////////////////
			// $this->load->library('pagination');

			// $config['base_url'] = base_url('index.php/user/index/');
			// $config['total_rows'] = 200;
			// $config['per_page'] = 20; 

			// $this->pagination->initialize($config); 

			// echo $this->pagination->create_links(); exit;
		/////////////////////////////////////////////

		$this->load->library('pagination');
		$config = [
				// 'base_url' => 'http://localhost:8080/Codeigniter/index.php/admin/dashboard',
				'base_url' => base_url('index.php/user/index'),
				'per_page' => 10,
				'total_rows' => $this->article->count_all_articles(),
				'anchor_class' => 'class="page-link" ',
				'full_tag_open' => "<ul class='pagination'>",
				'full_tag_close' => "</ul>",
				'first_tag_open' => "<li class='page-item'>",
				'first_tag_close' =>"</li>",
				'first_link' => 'Pehla',
				'last_link' => 'Akhri',
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
		// $this->benchmark->mark('cat');
		// print_r($config); exit;
		$this->pagination->initialize($config);
		$articles = $this->article->all_articles_list($config['per_page'], $this->uri->segment(3) );
		// $this->benchmark->mark('bird');
		// echo "<pre>";
		// print_r($articles); exit;
		// $articles = $this->article->articles_list()
		$this->load->view('public/articles_list',compact('articles'));
		// echo $this->benchmark->elapsed_time('dog', 'cat'); 
		// echo $this->benchmark->elapsed_time('cat', 'bird'); 
		// echo $this->benchmark->elapsed_time('dog', 'bird'); exit;


	}

	public function search()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query','Query','required');
		if (!$this->form_validation->run())
		{ 
			return $this->index();
		}
		$query = $this->input->post('query');
		
		return redirect("user/search_result/$query");
	}
	public function search_result( $query )
	{
			$this->load->helper('form');
			$this->load->model('articlesmodel','article');
			$this->load->library('pagination');
			$config = [
				// 'base_url' => 'http://localhost:8080/Codeigniter/index.php/admin/dashboard',
				'base_url' => base_url("index.php/user/search_result/$query"),
				'per_page' => 5,
				'total_rows' => $this->article->count_search_articles($query),
				'anchor_class' => 'class="page-link" ',
				'full_tag_open' => "<ul class='pagination'>",
				'full_tag_close' => "</ul>",
				'uri_segment' => 4,
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
				// print_r($config); exit;
				$this->pagination->initialize($config);
				$articles = $this->article->search($query, $config['per_page'], $this->uri->segment(4) );
				// echo "<pre>";
				// print_r($this->uri->segment(4)); exit;
				$this->load->view('public/search_results',compact('articles'));
	}

	public function article($id)
	{
		$this->load->helper('form');
		$this->load->model('articlesmodel','article');
		$articles = $this->article->find($id);
		$this->load->view('public/article_detail',compact('articles'));
	}
}
