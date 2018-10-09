<?php 
	class Daftar extends CI_Controller {

		public function index() {

			$this->form_validation->set_rules('Username', 'username', 'required');

			if($this->form_validation->run() == FALSE) {

			} else {
				if($this->input->post("password") == $this->input->post("password2")){
					$data = array(
						'username' => $this->input->post('Username'),
						'nama_depan' => $this->input->post('namadepan'),
						'nama_belakang' => $this->input->post('namabelakang'),
						'email' => $this->input->post('email'),
						'tgl_lahir' => $this->input->post('tgllahir'),
						'password' => $this->input->post('password')
					);
					$this->User->Daftar($data);
					redirect('Landing');
				} else {
					
				}
			}
		}
	}
?>