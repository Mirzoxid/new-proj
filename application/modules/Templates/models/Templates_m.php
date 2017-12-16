<?php 
defined("BASEPATH") or die("Acces denied!))");

/**
* 
*/
class Templates_m extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_posts($value=null)
	{
		$query = $this->db->get('dle_post');
		return $query->result();
	}
}