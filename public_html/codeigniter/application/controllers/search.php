<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
    public function index()
{
$searchterm = $this->search_model2->searchterm_handler($this->input->get_post('searchterm', TRUE));
$limit = ($this->uri->segment(3) > 0)?$this->uri->segment(3):0;

$config['base_url'] = base_url() . 'search';
$config['total_rows'] = $this->search_model2->search_record_count($searchterm);
$config['per_page'] = 20;
$config['uri_segment'] = 3;
$choice = $config['total_rows']/$config['per_page'];
$config['num_links'] = round($choice);	
$this->pagination->initialize($config);

$data['results'] = $this->search_model2->search($searchterm,$limit);
$data['links'] = $this->pagination->create_links();
$data['searchterm'] = $searchterm;
$this->load->helper('text');

$this->load->view('header');
$this->load->view('navbar');  
$this->load->view('search',$data);
$this->load->view('footer');


}
 function get_search(){
    $this->load->model('search_model');
    if (isset($_GET['term'])){
      $q = strtolower($this->input->get('term'));
      $this->search_model->get_search($q);
    }
  }
  
   public function __construct() {
        parent:: __construct();
        $this->load->helper("url");        
        $this->load->library("pagination");
        $this->load->model('search_model2');
    }
}