<?php
/**
 * Created by PhpStorm.
 * User: Mirzohid
 * Date: 18.12.2017
 * Time: 16:24
 */
defined("BASEPATH") or die("Access denied");
class Alter extends MY_Controller
{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->model('Alter_m');
        $res = $this->Alter_m->alter();
        $this->load->view('alter_v', array('res' => $res));
    }
}