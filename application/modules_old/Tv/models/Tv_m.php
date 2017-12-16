<?php 
defined('BASEPATH') or die('Acces denied!');

/**
* TV model class
*/
class Tv_m extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function all_channels($value = 0, $limit = 0)
	{
		$limit = ($limit == '' || (int) $limit == 0 ) ? 0 : (int) $limit;
		$value = ($value == '' || (int) $value == 0 ) ? 0 : (int) $value;
		$query = $this->db->get('tv',$limit, $value);
		$count = $this->db->select('count(id) as count')->get('tv',$limit, $value);
		$obj = [
			'data' => $query->result(),
			'count' => $count->result()[0],
		];
		return $obj;
	}

	public function get_ch_cat($value='')
	{
		return $this->db->get('tv_categories')->result();
	}

	public function add_cat($value='')
	{
		if($value === '') return false;
		return $this->db->insert('tv_categories', ['name' => $value]);
	}

	public function get_cat($value='')
	{
		return $this->db->get('tv_categories')->result();
	}

	public function add_ch($value=null)
	{
		if ($value == null) {
			return false;
		}
		return $this->db->insert('tv', $value);
	}

	public function get_once($value=0)
	{
		return $this->db->get_where('tv', ['id' => $value])->result()[0];
	}

	public function update_ch($value=null)
	{
		if($value==null)
			return false;
		$this->db->where('id', $value['id']);
		return $this->db->update('tv', $value);
	}

	public function delete_ch($value=0)
	{
		return $this->db->delete('tv', ['id' => $value]);
	}

	public function delete($value=0)
	{
		if($value == 0)
			return false;
		return $this->db->delete('tv_categories', ['id' => $value]);
	}
}