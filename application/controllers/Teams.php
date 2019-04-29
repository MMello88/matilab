<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends MY_Controller {
	
	public function __construct(){
		
		parent::__construct();
	}

	public function save_teams(){
		echo json_encode(["code" => "2", "message" => json_encode($_POST));
	}