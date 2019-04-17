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
		$this->data['arrJS'] = [];
		
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
			if (empty($this->account))
				return false;
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

	public function loadViewLogged($nome, $arrJS = []){
		$this->data['arrJS'] = [];
		//<!-- BEGIN BASE JS -->
		$this->addAssetsJsLooper("jquery.min.js","assets/vendor/jquery/");
		$this->addAssetsJsLooper("popper.min.js","assets/vendor/bootstrap/js/");
		$this->addAssetsJsLooper("bootstrap.min.js","assets/vendor/bootstrap/js/"); //<!-- END BASE JS -->
		//<!-- BEGIN PLUGINS JS -->
		$this->addAssetsJsLooper("pace.min.js","assets/vendor/pace/");
		$this->addAssetsJsLooper("stacked-menu.min.js","assets/vendor/stacked-menu/");
		$this->addAssetsJsLooper("perfect-scrollbar.min.js","assets/vendor/perfect-scrollbar/");
		$this->addAssetsJsLooper("parsley.min.js","assets/vendor/parsleyjs/");
		$this->addAssetsJsLooper("vanillaTextMask.js","assets/vendor/text-mask/");
		$this->addAssetsJsLooper("textMaskAddons.js","assets/vendor/text-mask/addons/"); //<!-- END PLUGINS JS -->
		//<!-- BEGIN THEME JS -->
		$this->addAssetsJsLooper("theme.min.js","assets/javascript/"); //<!-- END THEME JS -->
		//<!-- BEGIN PAGE LEVEL JS -->
		$this->addAssetsJs("submit-form.js"); //<!-- END PAGE LEVEL JS -->

		$this->data['arrJS'] = array_merge($this->data['arrJS'], $arrJS);

		$this->load->view('dashboard/comuns/header', $this->data);
		$this->load->view('dashboard/comuns/navbar', $this->data);
		$this->load->view('dashboard/comuns/menu', $this->data);
		$this->load->view($nome, $this->data);
		$this->load->view('dashboard/comuns/footer', $this->data);
	}

	private function addJS($js, $dir){
		array_push($this->data['arrJS'], "$dir$js");
	}

	protected function addAssetsJs($js){
		$this->addJS($js, base_url("assets/js/"));
	}

	protected function addAssetsJsLooper($js, $dir){
		$this->addJS($js, base_url_assets($dir));
	}
}