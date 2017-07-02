<?php

class Users_model extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
		$this->load->database("lanterdb");
	}
	
	public function get_all_users()
	{
		$query = $this->db->get('user');
		return $query->result();
	}
	
	public function insert_users_to_db($data)
	{
		return $this->db->insert('user', $data);
	}

}

?>
