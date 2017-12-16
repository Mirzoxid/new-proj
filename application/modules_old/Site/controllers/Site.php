<?php
defined("BASEPATH") or die('Access error!))');

/**
* Site controller
*/
class Site extends MY_Controller
{
	public $whr = 0;
	function __construct()
	{
		parent::__construct();
			if($this->session->userdata('logged_in') !== true || $this->session->userdata('logged_in') == null){
				redirect('Login');
			}
	}

	public function index($value='')
	{
		$value = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
		$this->load->model('Site_m');
		$this->load->library('pagination');
		$limit = 20;
		$res = $this->Site_m->get_all_movies($value, $limit);
		$count = (int)$res['count'];
		$this->pagination->initialize($this->config_pagination($limit, $count));
		$values = [
			'content_v' => "Site/movies_v",
			'data' => $res['data'],
			'pagenation' => $this->pagination->create_links()
		];
		$this->templates($values);
	}


	public function serials($value = '')
	{
		$value = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
		$this->whr = $value;
		$this->load->model('Site_m');
		$this->load->library('pagination');
		$limit = 20;
		$res = $this->Site_m->get_all_serials($value, $limit);
		$count = (int)$res['count'];
		$this->pagination->initialize($this->config_pagination($limit, $count));
		$values = [
		    'back' => $value,
			'content_v' => "Site/serials_v",
			'data' => $res['data'],
			'pagenation' => $this->pagination->create_links()
		];
		$this->templates($values);
	}

	public function manual1($value = null)
	{
        $value = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
        if ($value == 0) {
            redirect('Site/notextructed');
        }
        //		/(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[-A-Z0-9+&@#\/%=~_|$?!:,.])*(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[A-Z0-9+&@#\/%=~_|$])/igm
        $this->load->library('form_validation');
        $this->form_validation->set_rules('movie1', "Movie 1", 'required');
        $this->form_validation->set_rules('url1', "Movie 1", 'required');
        $this->load->model('Site_m');
        if ($this->form_validation->run() === true) {
            $i = 0;
            $mydata = array();
            foreach ($this->input->post() as $key => $val) {
                $mydata[$i++] =$val;
                if ($val !== '' && strpos($key, 'rl')) {
                    if ($this->Site_m->insert_movie(['movies'=>substr($val,-1),'name' => $mydata[$i-2],'url' => $mydata[$i-2], 'post_id' => $value])) {
						$this->Site_m->update_post_extruct($value);
					} else {
						exit("error");
					}
				}
			}
			redirect('Site/manual1/');
		} else {
			$art = $this->Site_m->get_movie($value);
			require_once('simple_html_dom.php');
			$q = new simple_html_dom;
			$q = str_get_html($art->full_story);
			$list = [];
			if ($art->full_story !== '') {
				if($q->innertext!='' and count($q->find('div'))) {
					foreach ($q->find('a') as $item) {
						if(!strpos($item->getAttribute('href'), '.jpg') && !strpos($item->getAttribute('href'), 'avascript'))
							$list[] = $item->getAttribute('href');
					}
				}
			}
			$value = ['content_v' => "Site/manual_v", 'art' => $list];
			$this->templates($value);
		}
	}

    public function manual2($value = null)
    {
        $value = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
        if ($value == 0) {
            redirect('Site/notextructed');
        }
        //		/(?:(?:https?|ftp|file):\/\/|www\.|ftp\.)(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[-A-Z0-9+&@#\/%=~_|$?!:,.])*(?:\([-A-Z0-9+&@#\/%=~_|$?!:,.]*\)|[A-Z0-9+&@#\/%=~_|$])/igm
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name11', "Name Add", 'required');
        $this->form_validation->set_rules('url11', "Url Add", 'required');
        $this->load->model('Site_m');
        if ($this->form_validation->run() === true) {
            $value1 = [];
            $i = 0;
            $season = 0;
            $mydata = array();
            foreach ($this->input->post() as $key => $val) {
                $season = $this->getseason($key, $season);
                $mydata[$i++] = $val;
                if (strpos($key,'rl') && $val != '') {
                    if ($this->Site_m->insert_serial(['serial'=>substr($key,4,2),'name' => $mydata[$i-2],'url' => $mydata[$i-1], 'season_id' => $season, 'post_id' => $value])) {
                        $this->Site_m->update_post_extruct($value);
                    } else {
                        exit("error");
                    }
                } else {}
            }
                redirect('Site/manual1/');
        } else {
            $art = $this->Site_m->get_movie($value);
            require_once('simple_html_dom.php');
            $q = new simple_html_dom;
            $q = str_get_html($art->full_story);
            $list = [];
            if ($art->full_story !== '') {
                if($q->innertext!='' and count($q->find('div'))) {
                    foreach ($q->find('a') as $item) {
                        if(!strpos($item->getAttribute('href'), '.jpg') && !strpos($item->getAttribute('href'), 'avascript'))
                            $list[] = $item->getAttribute('href');
                    }
                }
            }
            $value = ['content_v' => "Site/manual_v", 'art' => $list];
            $this->templates($value);
        }
    }

	public function notextructed($value = null)
	{
		$value = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
		$this->load->model('Site_m');
		$this->load->library('pagination');
		$limit = 20;
		$res = $this->Site_m->get_all_notextructed($value, $limit);
		$count = (int)$res['count'];
		$this->pagination->initialize($this->config_pagination($limit, $count));
		$value = [
			'content_v' => "Site/notextructed_v",
			'data' => $res['data'],
			'pagenation' => $this->pagination->create_links()
		];

		$this->templates($value);
	}

	public function sorting($value=0, $link = '')
	{
		$this->load->model('Site_m');
		$value = ($value == '' || (int) $value == 0) ? 0 : (int)$value;
		$result = $this->Site_m->get_movie($value);
		// $this->load->module('simple_html_dom');
		// $query = $this->simple_html_dom->srt_get_html($result->full_story);
		require_once('simple_html_dom.php');
		$q = new simple_html_dom;
		$q = str_get_html($result->full_story);
		$seasons = [];
		if($q->innertext!='' and count($q->find('div'))) {
		 	$s = 0;
			foreach($q->find('div a') as $item){
			    // Match '.s[0-9]e[0-9].'
			    if (preg_match('/[sS](\d+)[eE](\d+)/', $item, $matches)) {
			        $seasonN = $matches[1]; // Season number from preg_match
			        $seasons[$seasonN][] = str_replace('"', "", str_replace("\\", "", $item->getAttribute('href')));
			    }
			}
		}

		if($seasons != null){
			$i=0;
			foreach ($seasons as $key => $value1) {
				$i = (int)$key;
				$s = 0;
				foreach ($value1 as $serial) {
				    $s++;
					if ($this->Site_m->insert_serial(['serial' => $s,'url' => $serial, 'season_id' => $i, 'post_id' => $value])) {
						$this->Site_m->update_post_extruct($value);
					} else {
						exit("error");
					}
				}
			}
		} else {
			$this->Site_m->update_post_not_extruct($value);
		}

		redirect('Site/serials/'.$link);
	}

	public function clear_u($value=0,$link = '')
	{
		$value = ($value == '' || (int) $value == 0) ? 0 : $value;
		$this->load->model('Site_m');
		if($this->Site_m->update_delete_ext($value))
			redirect('Site/'.$link);
		else
			exit('error');

	}

	public function one_movie($id=0)
	{
		$id = (int) $id;
		$this->load->model("Site_m");
		$res = $this->Site_m->get_one_view($id);
		$this->templates(['content_v' => 'Site/one_movie_v', 'data' => $res]);
	}

	private function config_pagination($limit=0, $count=0){
		$seg2 = '';
		$seg2 .= ($this->uri->segment(1) == '') ? 'site' : $this->uri->segment(1);
		$seg2 .= '/';
		$seg2 .= ($this->uri->segment(2) != null) ? $this->uri->segment(2) : "index";
		$seg2 .= '/';
		$config['base_url'] = site_url() . '/' . $seg2;
		$config['total_rows'    ]  = $count;
		$config['per_page'      ]  = $limit;
		$config['first_tag_open']  = "<div class='pagination_first'>";
		$config['first_tag_close'] = "</div>";
		$config['last_tag_open' ]  = "<div class='pagination_first'>";
		$config['last_tag_close']  = "</div>";
		$config['next_tag_open' ]  = "<div class='pagination_next'>";
		$config['next_tag_close']  = "</div>";
		$config['prev_tag_open' ]  = "<div class='pagination_next'>";
		$config['prev_tag_close']  = "</div>";
		$config['num_tag_open'  ]  = "<div class='pagination_next'>";
		$config['num_tag_close' ]  = "</div>";
		$config['cur_tag_open'  ]  = "<div class='pagination_cur'>";
		$config['cur_tag_close' ]  = "</div>";
		return $config;
	}

    public function getseason($key = '', $season = 0){
        if ($season !== 0 || strpos($key, 'ame1')){
            switch ($key){
                case 'name11' : return 1; break;
                case 'name21' : return 2; break;
                case 'name31' : return 3; break;
                case 'name41' : return 4; break;
                case 'name51' : return 5; break;
                case 'name61' : return 6; break;
                case 'name71' : return 7; break;
                case 'name81' : return 8; break;
                case 'name91' : return 9; break;
                case 'name101' : return 10; break;
                default : return $season;
            }
        } else {
            return 0;
        }
    }

}
