<?php 
	class User extends CI_Model {

		function Daftar($data) {
			$this->db->insert('user_data', $data);
			$this->db->insert('login', array('username' => $data['username'], 'password' => $data['password']));
		}
	}
?>