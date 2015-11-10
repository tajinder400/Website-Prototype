<?php

	class Get_db extends CI_Model{
		function getRandom(){
			$query = $this->db->query('SELECT * FROM pageData ORDER BY rand()');
                        return $query->result();
		}
                		function getData($page){
			$query = $this->db->get_where("about", array("page" => $page));
			return $query->result();
		}
                
                
	}
	
	?>
	