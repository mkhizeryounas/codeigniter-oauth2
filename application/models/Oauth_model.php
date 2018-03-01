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
    public function addToken($data) {
        $q = "INSERT INTO `tokens`(`app_id`, `user_id`, `access_token`, `refresh_token`, `token_ expires_at`, `token_code`, `scope`, `callback_url`, `token_grant_type`, `token_code_active`) VALUES (?,?,?,?,?,?,?,?,?,?)";        
        return $this->db->query($q, $data);
    }
    
}