<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
  /* The default function that gets called when visiting the page */
  public function index() {       
      
       $this->load->model('get_db');
                
		$data["results"] = $this->get_db->getData("about");
		$this->load->view('header');
                $this->load->view('navbar');
                $this->load->view("about", $data);
                $this->load->view('footer'); 
  }
  

	

}?>