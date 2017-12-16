<?php
defined("BASEPATH") or die("acces denied!))");
/**
* Site modeli
*/
class Site_m extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

    /**
     * @param int $value
     * @param int $limit
     * @return array
     */
    public function get_all_posts($value = 0, $limit = 20)
	{
		$skip = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
		$limit = ($limit == '' || (int) $limit == 0) ? 20 : (int) $limit;
		$query = $this->db->order_by('id','ASC')->select(array('id', 'title', 'autor', 'date', 'full_story', 'sorted', 'is_url_extruct', 'short_story'))->get('dle_post', $limit, $skip);
		$count = $this->db->select('count(id) as count')->get('dle_post');
		$obj = [
			'count' => $count->result()[0]->count,
			'data' => $query->result()
		];
		return $obj;
	}

	public function color($id = 0){
        $movie = $this->db->query("SELECT count(id) has FROM movie WHERE post_id = {$id}")->result();
        $serial = $this->db->query("SELECT count(id) has FROM serials WHERE post_id = {$id}")->result();
        if($movie[0]->has > 0){
            return 1;
        } elseif ($serial[0]->has > 0){
            return 2;
        } else {
            return 0;
        }
    }

    /**
     * @param int $value
     * @param int $limit
     * @return array
     */
    public function get_all_serials($value = 0, $limit = 20)
	{
		$skip = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
		$limit = ($limit == '' || (int) $limit == 0) ? 20 : (int) $limit;
		$query = $this->db->order_by('id','ASC')->select(['id', 'type','full_story', 'title', 'autor', 'date', 'sorted', 'is_url_extruct'])->like('category', '30', 'both', true)->get('dle_post', $limit, $skip);
		// $query = $this->db->query("SELECT `dle_post`.id, `dle_post`.title, `dle_post`.autor, `dle_post`.`date`, `dle_post`.sorted, `dle_post`.is_url_extruct FROM `dle_post` LEFT JOIN `dle_files` ON `dle_files`.news_id = `dle_post`.id WHERE `dle_files`.news_id IS NULL LIMIT $skip, $limit");
		$count = $this->db->select('count(id) as count')->like('category', '30', 'both', true)->get('dle_post');
		// $count = $this->db->query("SELECT count(`dle_post`.id) as count FROM `dle_post` LEFT JOIN `dle_files` ON `dle_files`.news_id = `dle_post`.id WHERE `dle_files`.news_id IS NULL");
		// $count = $this->db->select('count(id) as count')->get('dle_post');
		$obj = [
			'count' => $count->result()[0]->count,
			'data' => $query->result()
		];
		return $obj;
	}

    /**
     * @param int $value
     * @param int $limit
     * @return array
     */
    public function get_all_movies($value = 0, $limit = 20)
    {
        $skip = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
        $limit = ($limit == '' || (int) $limit == 0) ? 20 : (int) $limit;
        $query = $this->db->order_by('id','ASC')->select(['id', 'type','full_story', 'title', 'autor', 'date', 'sorted', 'is_url_extruct'])->not_like('category', '30', 'both', true)->get('dle_post', $limit, $skip);
        // $query = $this->db->query("SELECT `dle_post`.id, `dle_post`.title, `dle_post`.autor, `dle_post`.`date`, `dle_post`.sorted, `dle_post`.is_url_extruct FROM `dle_post` LEFT JOIN `dle_files` ON `dle_files`.news_id = `dle_post`.id WHERE `dle_files`.news_id IS NULL LIMIT $skip, $limit");
        $count = $this->db->select('count(id) as count')->not_like('category', '30', 'both', true)->get('dle_post');
        // $count = $this->db->query("SELECT count(`dle_post`.id) as count FROM `dle_post` LEFT JOIN `dle_files` ON `dle_files`.news_id = `dle_post`.id WHERE `dle_files`.news_id IS NULL");
        // $count = $this->db->select('count(id) as count')->get('dle_post');
        $obj = [
            'count' => $count->result()[0]->count,
            'data' => $query->result()
        ];
        return $obj;
    }

    /**
     * @param int $value
     * @param int $limit
     * @return array
     */
    public function get_separated($value = 0, $limit = 20, $link)
    {
        $skip = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
        $limit = ($limit == '' || (int) $limit == 0) ? 20 : (int) $limit;
        $count = $this->db->query("SELECT DISTINCTROW dle_post.id, dle_post.type, dle_post.title, dle_post.date, dle_post.sorted,dle_post.autor FROM dle_post RIGHT JOIN {$link} ON {$link}.post_id = dle_post.id ORDER BY id ASC");
        $obj = [
            'count' => $count->num_rows(),
            'data' => $count->result()
        ];
        return $obj;
    }

    /**
     * @param int $value
     * @return mixed
     */
    public function get_movie($value = 0)
	{
		$value = ($value == '' || (int) $value == 0) ? 0 : (int)$value;
		$query = $this->db->select('*')->get_where('dle_post', ['id' => $value]);
		$result = $query->result()[0];
		return $result;
	}

    /**
     * @param int $id
     * @return array
     */
    public function get_one_view($id=0)
	{
		$id = (int) $id;
		$query2 = $this->db->select(['id', 'autor', 'description', 'date', 'full_story', 'title', 'descr', 'description', 'category', 'sorted', 'is_url_extruct'])->get_where('dle_post', ['id' => $id]);
		$query = $this->db->select('*')->get_where('serials', ['post_id' => $id]);
		$query3 = $this->db->select('*')->get_where('movie', ['post_id' => $id]);
		$result = [
			'post' => $query2->result()[0],
			'urls' => $query->result(),
			'movie' => $query3->result()
		];
		return $result;
	}

    /**
     * @param null $value
     * @return bool
     */
    public function insert_serial($value=null)
	{
		if ($this->db->insert('serials', $value)) {
			return true;
		}
		return false;
	}

    /**
     * @param null $value
     * @return bool
     */
    public function insert_movie($value=null)
    {
        if ($this->db->insert('movie', $value)) {
            return true;
        }
        return false;
    }

    /**
     * @param $id
     * @param $desc
     * @return bool
     */
    public function update_desc($id, $desc){
        $this->db->set('description', $desc);
        $this->db->where('id', $id);
        if($this->db->update('dle_post')){
            return true;
        }
        return false;
    }

    /**
     * @param int $value
     */
    public function update_post_extract($value=0)
	{
		$this->db->set('sorted', '1');
		$this->db->where('id', $value);
		$this->db->update('dle_post');
        if ($this->db->get_where('post',['id'=>$value])->result() == null){
            $q = $this->db->select(['id','autor','date', 'description', 'full_story', 'title','category','is_url_extruct','sorted','descr','xfields', 'type'])->get_where('dle_post', ['id' => $value])->result()[0];
            $this->db->insert('post',$q);
            $this->db->set('sorted', '1');
            $this->db->where('id', $value);
            $this->db->update('dle_post');
        }
	}

    /**
     * @param int $value
     */
    public function update_post_not_extract($value=0)
	{
		$this->db->set('is_url_extruct', '1');
		$this->db->where('id', $value);
		$this->db->update('dle_post');
	}

    /**
     * @param int $value
     * @param $limit
     * @return array
     */
//    public function get_all_movies($value=0, $limit)
//	{
//		$skip = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
//		$limit = ($limit == '' || (int) $limit == 0) ? 20 : (int) $limit;
//		$query = $this->db->order_by('id','ASC')->select(array('id', 'type', 'title', 'autor', 'date', 'sorted', 'is_url_extruct'))->get('dle_post', $limit, $skip);
//		$count = $this->db->select('count(id) as count')->get_where('dle_post');
//		$obj = [
//			'count' => $count->result()[0]->count,
//			'data' => $query->result()
//		];
//		return $obj;
//	}

    /**
     * @param int $value
     * @return bool
     */
    public function update_delete_ext($value=0)
	{
		if ($value == 0) {
			return flase;
		}
		$this->db->delete('serials', ['post_id' => $value]);
        $this->db->delete('movie', ['post_id' => $value]);
		$this->db->set('sorted', '0');
		$this->db->set('is_url_extruct', '0');
        $this->db->where('id', $value) && $this->db->update('post');
        $this->db->set('sorted', '0');
        $this->db->set('is_url_extruct', '0');
        $q = $this->db->where('id', $value) && $this->db->update('dle_post');
        return $q;
	}

	public function delite_serials($value){
        return $this->db->delete('serials', ['post_id' => $value]);
    }

    public function delite_movies($value){
        return $this->db->delete('movie', ['post_id' => $value]);
    }
}
