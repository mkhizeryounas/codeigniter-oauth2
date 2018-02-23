<?php

class Auth_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}
	public function login($email, $pass) {
		$q = 'select * from users where user_email = ? and user_password=?';
		return $this->db->query($q, [$email, pwd($pass)])->row_array();
	}
}