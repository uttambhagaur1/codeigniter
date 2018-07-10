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
	
	public function save(){
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['zip'] = $this->input->post('zip');
		$this->db->insert('customers',$data);
	}
}

?>