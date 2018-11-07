<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Pendaftaran extends CI_Controller {
	function index() {
		$this->load->view('header_login');
		$this->load->view('pendaftaran');
		$this->load->view('footer');
	}

	function daftarPoli() {
		$this->User->daftarPoli();
		$this->session->set_flashdata('berhasil', TRUE);
		$this->index();
	}
}
?>