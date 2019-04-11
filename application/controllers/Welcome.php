<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		if ($this->logged){
			if ($this->account->cadastro_completo == "0"){
				redirect("accounts/continue");
			} else {
				if ($this->account->ver_cad_usuario == "1"){
					redirect("accounts/view/perfil");
				} else {
					$this->loadViewLogged('dashboard/main/layout-main');
				}
			}
		} else {
			$this->load->view('welcome_message', $this->data);
		}
	}

}

