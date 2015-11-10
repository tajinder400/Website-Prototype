<?php
class Content extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

public function index()
{
	$data['pageData'] = $this->news_model->get_news();
	$data['title'] = 'News archive';

	$this->load->view('header');
        $this->load->view('navbar');
	$this->load->view('index', $data);
	$this->load->view('footer');
}

public function view($page)
{
	$this->load->helper('text');
        $data['news_item'] = $this->news_model->get_news($page);
        $this->load->model('get_db');
                
		$data["results"] = $this->get_db->getRandom();

	if (empty($data['news_item']))
	{
		show_404();
	}

	$data['title'] = $data['news_item']['title'];

	$this->load->view('header');
        $this->load->view('navbar');
	$this->load->view('view', $data);
	$this->load->view('footer');
}
}