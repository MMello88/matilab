<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	public $data;
	
	public function __construct(){
		parent::__construct();
		$this->data['js'] = "<script src=\"".base_url("assets/js/accounts.js")."\" ></script>";
	}

	public function validate_session_account(){
		if ($this->session->userdata("account")){
			if ($this->session->userdata("account")['Logado'])
				echo json_encode(["code" => "1", "message" => "true"]);
			else
				echo json_encode(["code" => "3", "message" => "false"]);
		}
		else
			echo json_encode(["code" => "3", "message" => "false"]);
	}
	
	public function validate_accounts(){
		$this->session->unset_userdata("account");

		$this->form_validation->set_rules('email', 'Usuário', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'Password', 'trim|required|min_length[8]');
		
		if ($this->form_validation->run() == true) {
			//buscar
			if($this->input->post('email') == 'matheusnarciso@hotmail.com'){
				if($this->input->post('senha') == '123'){
					$this->session->set_userdata("account",["Logado" => TRUE, "Email" => $_POST['email']]);
					echo json_encode(["code" => "1", "message" => "Usuário e Senha estão corretas"]);
				} else {
					echo json_encode(["code" => "2", "message" => "Senha inválida"]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function register_account(){
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_usuario.email]');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('resenha', 'Confirmar Senha', 'required|min_length[8]|matches[senha]');
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');

		if ($this->form_validation->run() === FALSE){
			//registrar
			$this->session->set_userdata("account",["Logado" => FALSE, "Email" => $this->input->post('email')]);
			echo json_encode(["code" => "1", "message" => "Cadastro realizado com sucesso!"]);
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function logout_account(){
		$this->session->unset_userdata("account");
	}
	
	public function accounts()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/accounts/accounts');
		$this->load->view('accounts/includes/footer', $this->data);
	}

	public function logout()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/logout/logout_success');
		$this->load->view('accounts/includes/footer', $this->data);
	}

	public function forgot()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/forgot/forgot');
		$this->load->view('accounts/includes/footer', $this->data);
	}

	public function register()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/register/register');
		$this->load->view('accounts/includes/footer', $this->data);
	}

	public function register_ativado()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/register/register_ativado');
		$this->load->view('accounts/includes/footer', $this->data);
	}

	public function register_success()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/register/register_success');
		$this->load->view('accounts/includes/footer', $this->data);
	}

}
