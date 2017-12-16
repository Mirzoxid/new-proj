<?php
defined("BASEPATH") or die('Acces denied! ))');

/**
* api class with Rest api
*/
class Api extends MY_Controller
{
	public $api_data = [];
	function __construct()
	{
		parent::__construct();
		header('Content-type: application/json');
		if($_SERVER['REQUEST_METHOD'] !== 'POST'){
			exit('Why you need this page?');
		}
		$this->api_data = json_decode(file_get_contents('php://input'));
	}

	public function index($value='')
	{
		echo json_encode([';-/']);
	}

//	All categories
	public function categories($value='')
	{
		$this->load->model('Api_m');
		$json_arr = [];
		if($this->api_data->token != '' ){
			if(/*$this->Api_m->token($this->api_data->token)*/ true){
				$cat = $this->Api_m->cat();
				$json_arr = [
					'code' => 1,
					'msg' => 'TV categories loaded!',
					'data' => $cat
				];
			} else {
				$json_arr = [
					'code' => 0,
					'error' => 'Incoeerct token!'
				];
			}
		} else {
			$json_arr = [
				'code' => 0,
				'error' => 'Empty token!'
			];
		}
		echo(json_encode($json_arr));
	}
//	All channels

	public function channels($value='')
	{
		$this->load->model('Api_m');
		$json_arr = [];
		if($this->api_data->token != '' ){
			if(/*$this->Api_m->token($this->api_data->token)*/ true){
				if ($this->api_data->cat == "" && intval($this->api_data->cat) == 0) {
					$json_arr = [
						'code' => 1,
						'msg' => 'TV Channels loaded!',
						'img_dir' => base_url('uploads/'),
						'data' => $this->Api_m->all_channels()
					];
				} else {
					if($ch = $this->Api_m->channes_in_cat($this->api_data->cat)){
						$json_arr = [
							'code' => 1,
							'msg' => 'TV Channels loaded!',
							'img_dir' => base_url('uploads/'),
							'data' => $ch
						];
					} else {
						$json_arr = [
							'code' => 0,
							'error' => 'Not exist channels in this category!',
						];
					}
				}
			} else {
				$json_arr = [
					'code' => 0,
					'error' => 'Incoeerct token!'
				];
			}
		} else {
			$json_arr = [
				'code' => 0,
				'error' => 'Empty token!'
			];
		}
		echo(json_encode($json_arr));
	}
}
