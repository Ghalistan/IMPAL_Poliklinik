<?php 
	class Landing extends CI_Controller { 

		public function index() { 
			$this->load->view('header'); 
			$this->load->view('landingpage');
			$this->load->view('footer');
		} 
	} 
?>