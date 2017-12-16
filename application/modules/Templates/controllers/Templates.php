<?php 
defined("BASEPATH") or exit('Error');

/**
* Temlate module!
*/
class Templates extends MY_Controller
{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('Templates_m');
	}

	public function index($value=null){
		// var_dump($this->session->user);
	}

	public function admin_template($value=null)
	{
		$this->load->view('admin_template_v', $value);
	}

	public function login_template($value=null)
	{
		$this->load->view('login_template_v');
	}
}
