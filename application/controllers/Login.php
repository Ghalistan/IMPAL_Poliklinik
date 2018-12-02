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
			$this->session->set_userdata('fail', 'fail');
			$this->load->view('header'); 
			$this->load->view('landingpage');
			$this->load->view('footer');
		}
	}

	public function logout() {
		$this->session->unset_userdata('login');
		$this->session->sess_destroy();
		redirect("Landing");
	}

	public function edit_data() {
		if($this->input->post('password') == $this->input->post('password2')) {
			$this->User->updateData();
			$this->session->set_flashdata('edit_success', 'success');
			redirect("Userpage/profile");
		} else {
			$this->session->set_flashdata('failedit', 'fail');
			redirect("Userpage/profile");
		}
	}
}
?>