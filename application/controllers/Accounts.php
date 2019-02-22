<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {

	public $data;
	
	public function __construct(){
		parent::__construct();
		$this->data['js'] = "<script src=\"".base_url("assets/js/accounts.js")."\" ></script>";
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function validate_session_account(){
		if ($this->session->userdata("account"))
			echo json_encode(["code" => "1", "message" => "true"]);
		else
			echo json_encode(["code" => "3", "message" => "false"]);
	}
	
	public function validate_accounts(){
		if($_POST){
			if($_POST['email'] == 'matheusnarciso@hotmail.com'){
				if($_POST['senha'] == '123'){
					echo json_encode(["code" => "1", "message" => "Usuário e Senha estão corretas"]);
					$this->session->set_userdata("account",["Logado" => TRUE, "Email" => $_POST['email']]);
				} else {
					echo json_encode(["code" => "2", "message" => "Senha inválida"]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
			}
		}
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
