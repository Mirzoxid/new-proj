<?php 
defined("BASEPATH") or die("Acces denied!))");

/**
* TV controller
*/
class Tv extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') !== true || $this->session->userdata('logged_in') == null){
			redirect('login');
		}	
	}
// intex actin view
	public function index($value=0)
	{
		$value = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
		$this->load->model('Tv_m');
		$limit = 20;
		$result = $this->Tv_m->all_channels($value, $limit);
		$count = (int)$result['count']->count;
		$this->load->library('pagination');
		$this->pagination->initialize($this->config_pagination($limit, $count));
		$value = [
			'content_v' => "Tv/channels_v",
			'data' => $result['data'],
			'pagenation' => $this->pagination->create_links()
		];
		$this->templates($value);
	}

	public function add($value=null)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', "Channel name", 'required|is_unique[tv.name]');
		$this->form_validation->set_rules('url', "Channel url addres", 'required|is_unique[tv.url]');
		$this->form_validation->set_rules('position', "Channel position", 'required|integer');
		$this->form_validation->set_rules('category', "Channel category", 'required');
		$this->load->model('Tv_m');
		$result = $this->Tv_m->get_cat();
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'png|gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;
            $this->load->library('upload', $config);
		if ($this->form_validation->run() === true) {
            if ( ! $this->upload->do_upload('img')){
                $value = array('msg' => $this->upload->display_errors());
                $value = ['content_v' => "Tv/add_v", 'cat' => $result];
				$this->templates($value);
            }
            else {
                $data = $this->upload->data();
                $ins_data = $this->input->post();
                $ins_data['img'] = $data['file_name'];
                $ins_data['active'] = (!isset($ins_data['active']) || $ins_data['active'] != 'on') ? 0 : 1;
                $this->load->model('Tv_m');
                $val = $this->Tv_m->add_ch($ins_data);
                if ($val == true) {
                	$value = ['content_v' => "Tv/add_v", 'cat' => $result, 'msg' => "Channel created"];
                	
                } else {
                		$value = ['content_v' => "Tv/add_v", 'cat' => $result, 'msg' => "Channel not created"];
                }
                $this->templates($value);
            }
		} else {
			$value = ['content_v' => "Tv/add_v", 'cat' => $result];
			$this->templates($value);
		}
	}

	public function edit($value=0)
	{
		$this->load->model('Tv_m');
		$value = ($value == '' || (int)$value == 0) ? 0 : (int) $value;

		$check = $this->Tv_m->get_once($value);
		if ($check == null) {
			redirect('tv');
		}
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', "Channel id", 'required');
		$this->form_validation->set_rules('name', "Channel name", 'required');
		$this->form_validation->set_rules('url', "Channel url addres", 'required');
		$this->form_validation->set_rules('position', "Channel position", 'required|integer');
		$this->form_validation->set_rules('category', "Channel category", 'required');
		$result = $this->Tv_m->get_cat();
			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'png|gif|jpg|png';
            $config['max_size']             = 1000;
            $config['max_width']            = 2048;
            $config['max_height']           = 2048;
            $this->load->library('upload', $config);
		if ($this->form_validation->run() === true) {
            if(!empty($_FILES['img']['name'])){
            	if ( ! $this->upload->do_upload('img')){
	                $value = array('msg' => $this->upload->display_errors());
	                $value = ['content_v' => "Tv/add_v", 'cat' => $result];
					$this->templates($value);
	            }
	            else {
	                $data = $this->upload->data();
	                $ins_data = $this->input->post();
	                $ins_data['img'] = $data['file_name'];
	                $ins_data['active'] = (!isset($ins_data['active']) || $ins_data['active'] != 'on') ? 0 : 1;
	                $this->load->model('Tv_m');
	                $val = $this->Tv_m->update_ch($ins_data);
	                if ($val == true) {
	                	$value = ['content_v' => "Tv/edit_s_v", 'cat' => $result, 'msg' => "Channel edeted"];
	                	
	                } else {
	                		$value = ['content_v' => "Tv/edit_s_v", 'cat' => $result, 'msg' => "Channel not edeted"];
	                }
	                $this->templates($value);
	            }
            } else {
	                $ins_data = $this->input->post();
	                $ins_data['active'] = (!isset($ins_data['active']) || $ins_data['active'] != 'on') ? 0 : 1;
	                $this->load->model('Tv_m');
	                $val = $this->Tv_m->update_ch($ins_data);
	                if ($val == true) {
	                	$value = ['content_v' => "Tv/edit_s_v", 'cat' => $result, 'msg' => "Channel edeted"];
	                	
	                } else {
	                		$value = ['content_v' => "Tv/edit_s_v", 'cat' => $result, 'msg' => "Channel not edeted"];
	                }
	                $this->templates($value);
            }
		} else {
			$send = [
				'content_v' => 'Tv/edit_v',
				'data' => $check,
				'cat' => $result
			];
			$this->templates($send);
		}

	}

	public function delete_ch($value=0)
	{
		
		$this->load->model('Tv_m');
		$value = ($value == '' || (int)$value == 0) ? 0 : (int) $value;

		$check = $this->Tv_m->get_once($value);
		if ($check == null) {
			redirect('tv');
		} else {
			$res = $this->Tv_m->delete_ch($value);
			redirect('tv');
		}
	}

	public function ch_cat($value=null)
	{
		$this->load->model('Tv_m');
		$result = $this->Tv_m->get_ch_cat();

		$value = [
			'content_v' =>"Tv/ch_categories_v",
			'data' => $result,
		];
		$this->templates($value);
	}

	public function add_cat($value='')
	{
		$this->load->library('form_validation');
		$this->load->model('Tv_m');
		$this->form_validation->set_rules('name', 'Name', 'required|is_unique[tv_categories.name]');

		if ($this->form_validation->run() === true) {
			if ($this->Tv_m->add_cat($this->input->post('name', true))) {
				$value['msg'] = "Inserted!";
			}
			else {
				$value['msg'] = "Not inserted!";
			}
		}
		$value = [
			'content_v' =>"Tv/add_cat_v",
		];
		$this->templates($value);
	}

	public function delete($value=0)
	{
		$value = ($value == '' || (int) $value == 0) ? 0 : (int) $value;
		$this->load->model('Tv_m');
		if($this->Tv_m->delete($value))
			redirect('Tv/ch_cat');
		else 
			exit('Attack');
	}

	private function config_pagination($limit=0, $count=0){
		// var_dump($this->uri->segment(2));die;
		$seg2 = ($this->uri->segment(2) != null) ? $this->uri->segment(2) : "index";
		$config['base_url'] = site_url() . '/' . $this->uri->segment(1) . '/' . $seg2 . '/';
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
}