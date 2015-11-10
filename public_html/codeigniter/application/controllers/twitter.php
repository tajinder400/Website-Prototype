<?php

class Twitter extends CI_Controller {
	function index() {
		
		$this->load->model('twitter_model');
		$data['tweets'] = $this->twitter_model->get_user_timeline();
		
                $this->load->view('header');
                $this->load->view('navbar');
                $this->load->view('twitter', $data);
                $this->load->view('footer');
	}

	function test() {
		echo "test";
	}
}