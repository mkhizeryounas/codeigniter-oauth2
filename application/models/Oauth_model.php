<?php

class Oauth_model extends CI_Model {
	public function __construct() {
		$this->load->database();
    }
    public function getUser($id) {
        return $this->db->query('SELECT * FROM `users` WHERE user_id=?', [$id])->row_array();
    }
    public function getApp($id) {
        return $this->db->query('SELECT * FROM `apps` WHERE app_client_id=?', [$id])->row_array(); 
    }
    
}