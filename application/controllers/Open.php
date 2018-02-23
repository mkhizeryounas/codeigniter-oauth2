<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

class Open extends REST_Controller {
	public function index_get() {
		$this->set_response(array(
			'status' => true,
			'message' => 'cartify is an eCommerce multi-tanent back-office software ~ powered by www.shopdesk.co'
		));
	}
	public function check_auth_post() {
		if(authenticate()) {
			$this->set_response(array('logged_in'=>true));
		}
		else {
			$this->set_response(array('logged_in'=>false));
		}
	}
}
