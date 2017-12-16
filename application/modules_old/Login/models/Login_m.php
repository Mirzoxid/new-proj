<?php 
defined("BASEPATH") or die("Access denied!))");

/**
* login Model
*/
class Login_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_login($value = '')
	{
		$query = $this->db->get_where('dle_users', array('name' => $value));
		return $query->result();
	}
}