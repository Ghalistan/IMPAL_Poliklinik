<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Userpage extends CI_Controller {
		public function profile() {
			$data['data'] = $this->User->getData();
			$this->load->view('header_login');
			$this->load->view('userprofile', $data);
			$this->load->view('footer');
		}
	}
?>