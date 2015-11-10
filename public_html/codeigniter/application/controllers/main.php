<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
  /* The default function that gets called when visiting the page */
  public function index() {       
      
      $this->home();
  }
  

	public function home(){
                $this->load->model('get_db');
                
		$data["results"] = $this->get_db->getRandom();
		$this->load->view('header');
                $this->load->view('navbar');
                $this->load->view("pageData", $data);
                $this->load->view('footer'); 
        }		

}?>