<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Pendaftaran extends CI_Controller {
	function index() {
		$data['data'] = $this->User->getPoli();
		$this->load->view('header_login');
		$this->load->view('pendaftaran', $data);
		$this->load->view('footer');
	}

	function daftarPoli() {
		$this->User->daftarPoli();
		$this->session->set_flashdata('berhasil', TRUE);
		$this->index();
	}
}
?>