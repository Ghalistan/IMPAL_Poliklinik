<?php 
	class Landing extends CI_Controller { 

		public function index() { 
			if (isset($_SESSION['login'])) {
				$this->load->view('header_login');
				$this->load->view('landingpage');
				$this->load->view('footer');
			} else {
				$this->load->view('header'); 
				$this->load->view('landingpage');
				$this->load->view('footer');
			}
		} 
	} 
?>