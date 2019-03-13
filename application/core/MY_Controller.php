<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = [];
	
	public $logged = false;

	/* Variável $account 
	 * 
	 * Sem vai exisit em seu conteúdo os valores do usuário
	 *
	 * Index of Array ["Logado", "Email", "CadastroCompleto"]
	 *
	 */
	public $account;

	public function __construct() {
		
		parent::__construct();
		
		if (!$this->isLogged()){
			if ($this->hasCookie())
				$this->logged = true;
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

		if ($hash){
			$usuario = $this->account->getByCookie($hash);
			if (empty($usuario)){
				return false;
			} else {
				$this->session->set_userdata("account",["Logado" => TRUE, "Email" => $usuario->email, "CadastroCompleto" => $usuario->cadastro_completo]);
				$this->account = $this->session->userdata("account");
				return true;
			}
		}
		return false;
	}
}