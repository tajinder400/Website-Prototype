<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}


public function get_news($page = FALSE)
{
	if ($page === FALSE)
	{
		$query = $this->db->get('pageData');
		return $query->result_array();
	}

	$query = $this->db->get_where('pageData', array('page' => $page));
	return $query->row_array();
}
}