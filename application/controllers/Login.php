<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function masuk() {
		if($this->User->checkUser()) {
			$this->session->set_userdata('login', $this->input->post('username'));
			redirect("Landing");
		} else {
			$this->load->view('footer', $data);
		}
	}
}
?>