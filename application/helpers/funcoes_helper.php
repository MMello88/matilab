<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function base_url_assets($uri = '', $protocol = NULL) {
	$CI =& get_instance();

	$uri = 'assets/looper/dist/' . $uri;

	return $CI->config->base_url($uri, $protocol);
}