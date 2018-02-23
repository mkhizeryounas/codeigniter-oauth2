<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';

class App extends REST_Controller {
	public function index_get() {
		$this->set_response([
			"status" => true,
			"message"=> "RESTful API is working fine",
		]);
	}
	

}