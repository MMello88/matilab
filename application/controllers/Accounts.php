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
		$this->form_validation->set_rules('senha', 'Password', 'trim|required|min_length[6]');
		
		if ($this->form_validation->run() == TRUE) {
			$_usuario = $this->accounts->getByEmail($this->input->post('email'));
			if (!empty($_usuario)){
				if($this->input->post('email') == $_usuario->email){
					if(md5($this->input->post('senha')) == $_usuario->senha){
						$this->session->set_userdata("account",["Logado" => TRUE, "Email" => $_POST['email']]);
						echo json_encode(["code" => "1", "message" => "Usuário e Senha estão corretas"]);
					} else {
						echo json_encode(["code" => "2", "message" => "Senha inválida"]);
					}
				} else {
					echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function register_account(){
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tbl_usuario.email]');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('resenha', 'Confirmar Senha', 'required|min_length[6]|matches[senha]');
		
		if ($this->form_validation->run() === TRUE){
			$return_id = $this->accounts->inserirUsuario();
			if(is_integer($return_id)){
				$this->session->set_userdata("account",["Logado" => TRUE, "Email" => $this->input->post('email')]);
				echo json_encode(["code" => "1", "message" => "Cadastro realizado com sucesso!"]);
			} else {
				echo $return_id;
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function validate_forgot(){
		if (!$this->input->post('hash')) {
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

			if ($this->form_validation->run() === TRUE) {
				$_usuario = $this->accounts->getByEmail($this->input->post('email'));
				if(!empty($_usuario)){
					$hash = md5(date('Y-m-d H:i:s'));
					$this->accounts->changeHash($_usuario->id_usuario, $hash, date('Y-m-d') . ' + 3 days');
					$this->sendemail->enviarEmailRecuperarSenha($_usuario->nome, $_usuario->email, $hash);
					echo json_encode(["code" => "1", "message" => "Link de Recuperar a Senha foi enviado em seu E-mail."]);
				} else {
					echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
			}
		} else {
			$this->form_validation->set_rules('hash', '', 'required');
			$this->form_validation->set_rules('senha', 'Senha', 'trim|required|min_length[6]');			

			if ($this->form_validation->run() === TRUE) {
				$_usuario = $this->accounts->getByHash($this->input->post('hash'));
				if(!empty($_usuario)){
					$this->accounts->changeHash($_usuario->id_usuario, "");
					$this->accounts->changeSenha($_usuario->id_usuario, md5($this->input->post('senha')));
					echo json_encode(["code" => "1", "message" => "Sua senha foi recuperada com sucesso!"]);
				} else {
					echo json_encode(["code" => "2", "message" => "Usuário não foi encontrado."]);
				}
			} else {
				echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
			}
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

	public function forgot($hash = '')
	{
		$this->data['hash'] = $hash;
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/forgot/forgot', $this->data);
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
