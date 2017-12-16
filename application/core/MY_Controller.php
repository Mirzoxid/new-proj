<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MY_Controller extends MX_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->module('Templates');
	}

	public function templates($value = null)
	{
		$this->templates->admin_template($value);
	}

	public function login_template($value='')
	{
		$this->templates->login_template();
	}
}