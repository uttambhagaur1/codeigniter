<?php

/**
 * 
 */
class Home extends CI_Model
{
	
	public function getAll(){

		$q = $this->db->get('customers');

		return $q->result();
	}
	
}

?>