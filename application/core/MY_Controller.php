<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = [];
	
	public $logged = false;

	/* Variável $account 
	 * 
	 * Sem vai exisit em seu conteúdo os valores do usuário
	 *
	 * Object of account ["Logado", "Email"]
	 *
	 */
	public $account;
	public $session_account;

	public function __construct() {
		
		parent::__construct();
		
		if (!$this->isLogged()){
			$this->logged = false;
		} else {
			$this->logged = true;
		}
		
		if (!$this->logged){
			$this->logged = $this->hasCookie();
		}
	}

	public function isLogged(){
		if ($this->session->userdata("session_account")){
			$this->session_account = (object)$this->session->userdata("session_account");
			$this->account = $this->accounts->getByEmail($this->session_account->email);
			$this->data["_usuario"] = $this->account;
			return true;
		}
		return false;
	}


	public function hasCookie(){
		$hash = $this->input->cookie('ci_session');
		if ($hash){
			$usuario = $this->accounts->getByCookie($hash);
			if (empty($usuario)){
				return false;
			} else {
				$this->session->set_userdata("account",["email" => $usuario->email, "cookie" => True]);
				$this->session_account = (object)$this->session->userdata("session_account");
				return true;
			}
		}
		return false;
	}

	public function loadViewLogged($nome){
		$this->load->view('dashboard/comuns/header', $this->data);
		$this->load->view('dashboard/comuns/navbar', $this->data);
		$this->load->view('dashboard/comuns/menu', $this->data);
		$this->load->view($nome, $this->data);
		$this->load->view('dashboard/comuns/footer', $this->data);
	}
}