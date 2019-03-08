<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = [];
	public $logged = false;
	public $account;

	public function __construct() {
		
		parent::__construct();
		
		if (!$this->isLogged()){
			$this->hasCookie();
		} else {
			$this->logged = true;
		}
	}

	public function isLogged(){
		if ($this->session->userdata("account")){
			if ($this->session->userdata("account")['Logado']){
				$this->account = $this->session->userdata("account");
				return true;
			} else {
				return false;	
			}
		}
		return false;
	}


	public function hasCookie(){
		$hash = $this->input->cookie('account', true);

		if ($hash)
		$usuario = $this->account->getByCookie($hash);
	}
}