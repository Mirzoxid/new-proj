<?php

defined("BASEPATH") or die('Acces !denied))');

/**
* Admin login controller
*/
class Login extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') === true && $this->input->get('out') !== "logout"){
			redirect('Site');
		}
	}

	public function index($value=null)
	{
		$this->login_template();
	}

	public function check($value=null)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$this->login_template();
		} else {
			$this->load->model('login_m');
			$res = (isset($this->login_m->get_login($this->input->post('name'))[0]))?$this->login_m->get_login($this->input->post('name'))[0]:null;
			if(isset($res->name)){
				if ($this->input->post('password') && $res->password && $this->password_verify($this->input->post('password'), $res->password)) {
						$this->session->set_userdata(['logged_in' => true, 'user_name' => $res->name, 'user_id' => $res->user_id, 'user_email' => $res->email]);
						redirect('Site');
				} elseif($this->is_md5hash($res->password)) {
					if($res->password === md5( md5( $this->input->post('password') ) ) ){
						$this->session->set_userdata(['logged_in' => true, 'user_name' => $res->name, 'user_id' => $res->id, 'user_email' => $res->email]);
						redirect('Site');
					} else{
						$this->login_template();
					}
				} else {
					$this->login_template();
				}
			} else {
				$this->login_template();
			}
		}
	}

	private function password_verify($password, $hash) {
        if (!function_exists('crypt')) {
            die("Crypt must be loaded for password_hash to function");
        }

        $ret = crypt($password, $hash);
        if (!is_string($ret) || $this->strlen_8bit($ret) != $this->strlen_8bit($hash) || $this->strlen_8bit($ret) <= 13) {
            return false;
        }

        $status = 0;
        for ($i = 0; $i < $this->strlen_8bit($ret); $i++) {
            $status |= (ord($ret[$i]) ^ ord($hash[$i]));
        }

        return $status === 0;
    }

    private function strlen_8bit($binary_string) {
        if (function_exists('mb_strlen')) {
            return mb_strlen($binary_string, '8bit');
        }
        return strlen($binary_string);
    }

    private function substr_8bit($binary_string, $start, $length) {
        if (function_exists('mb_substr')) {
            return mb_substr($binary_string, $start, $length, '8bit');
        }
        return substr($binary_string, $start, $length);
    }

    private function is_md5hash( $md5 = '' ) {
 		return strlen($md5) == 32 && ctype_xdigit($md5);
	}

	public function logout(){
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		unset($_SESSION['user_email']);
		unset($_SESSION['logged_in']);
		session_destroy();
		redirect('Site');
	}
}
