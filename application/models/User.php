<?php 
	class User extends CI_Model {

		function Daftar($data) {
			$this->db->insert('user_data', $data);
			$this->db->insert('login', array('username' => $data['username'], 'password' => $data['password']));
		}

		function checkUser() {
			$data['username'] = $this->input->post('username');
			$data['password'] = $this->input->post('password');

			$this->db->where('username', $data['username']);
			$this->db->where('password', $data['password']);

			$query = $this->db->get('login');

			if(!empty($query->row_array())) {
				return TRUE;
			} else {
				return FALSE;
			}
		}

		function daftarPoli() {
			$data['Pasien'] = $_SESSION['login'];
			$data['Poliklinik'] = $this->input->post('pendaftaran');
			$data['Dokter'] = $this->input->post('dokter');
			$data['Pesan'] = $this->input->post('pesan');
			$data['detailKeluhan'] = $this->input->post('detailKeluhan');

			$this->db->insert('daftarpoli', $data);
		}
	}
?>