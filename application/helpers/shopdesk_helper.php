<?php

function pwd($s) {
	return sha1($s.'ff4a930256fc215f4a7ab126df868494');
}

function authenticate() {
	if(get_cookie()) {
		return get_cookie();
	}
	else {
		return false;
	}
}

function set_cookie($value) {
	setcookie('sd_user', json_encode($value), time() + (86400 * 30), "/"); // 86400 = 1 day
}

function get_cookie() {
	return (isset($_COOKIE['sd_user']) && $_COOKIE['sd_user'] !== '' ? json_decode($_COOKIE['sd_user'], true) : false);
}

function delete_cookie() {
	setcookie('sd_user', "", time() + (86400 * 30), "/"); // 86400 = 1 day	
}

function fullpath() {
	$currentURL = current_url();
	$params   = $_SERVER['QUERY_STRING'];
	return $currentURL . '?' . $params;
}

function sd_encrypt($str) {
	$ci =& get_instance();
	$ci->load->library('encryption');
	return $ci->encryption->encrypt($str);
}
function sd_decrypt($hash) {
	$ci =& get_instance();
	$ci->load->library('encryption');
	return $ci->encryption->decrypt($hash);
}