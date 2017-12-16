<?php 
defined("BASEPATH") or die('Acces denied! ))');

/**
* api_m class with api module
*/
class Api_m extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	public function token($value='')
	{
		if($value == '')
			return false;
		return $this->db->get_where('dle_token', ['token' => $value])->result()[0];
	}

	public function cat($value='')
	{
		return $this->db->select(['id', 'name'])->get('tv_categories')->result();
	}

	public function all_channels($value='')
	{
		return $this->db->get('tv')->result();
	}

	public function channes_in_cat($value=0)
	{
		$value = (int) $value;
		return $this->db->get_where('tv', ['category' => $value])->result();
	}
}
