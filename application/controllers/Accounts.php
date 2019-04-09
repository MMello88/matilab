<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends MY_Controller {
	
	public function __construct(){
		
		parent::__construct();

		$this->data['js'] = "<script src=\"".base_url("assets/js/accounts.js")."\" ></script>";
	}

	public function validate_session_account(){
		if ($this->logged)
			echo json_encode(["code" => "1", "message" => "true"]);
		else
			echo json_encode(["code" => "3", "message" => "false"]);
	}
	
	public function validate_accounts(){
		$this->logout_account();

		$this->form_validation->set_rules('email', 'Usuário', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'Password', 'trim|required|min_length[6]');
		
		if ($this->form_validation->run() == TRUE) {
			$_usuario = $this->accounts->getByEmail($this->input->post('email'));
			if (!empty($_usuario)){
				if($this->input->post('email') == $_usuario->email){
					if(md5($this->input->post('senha')) == $_usuario->senha){
						$this->accounts->changeHash($_usuario->id_usuario);
						$this->session->set_userdata("account",["Email" => $_POST['email'], "CadastroCompleto" => $_usuario->cadastro_completo, "cookie" => $this->input->post('lembrar') == 'on' ? True : False]);
						if ($this->input->post('lembrar') == 'on'){
							$this->accounts->setByCookie($this->input->cookie("ci_session"), $_POST['email']);
						}
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
				$this->session->set_userdata("account",["Email" => $this->input->post('email'), "CadastroCompleto" => "0", "cookie" => False]);
				echo json_encode(["code" => "1", "message" => "Perfil cadastrado com sucesso!"]);
			} else {
				echo $return_id;
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function change_name(){
		$this->form_validation->set_rules('nome', 'Nome Completo', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() === TRUE){
			if (empty($this->accounts->getByEmail($this->input->post('email')))){
				echo json_encode(["code" => "3", "message" => "Cadastro não encontrado!"]);
			} else {
				if($this->accounts->updateNome($this->input->post('nome'))){
					echo json_encode(["code" => "1", "message" => "Alteração realizada com sucesso!"]);
				} else {
					echo json_encode(["code" => "2", "message" => "Tente novamente em alguns instantes. Obrigado!"]);
				}
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function validate_hash_email(){
		$this->form_validation->set_rules('hash_email', 'Chave de Segurança', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() === TRUE){
			$_usuario = $this->accounts->getByEmail($this->input->post('email'));
			if (empty($_usuario)){
				echo json_encode(["code" => "3", "message" => "Chave não foi encontrado"]);
			} else {
				if($_usuario->hash_email === $this->input->post("hash_email")){
					if($this->accounts->updateHashEmail("1")){
						echo json_encode(["code" => "1", "message" => "Chave de Segurança validado com sucesso!"]);
					} else {
						echo json_encode(["code" => "2", "message" => "Tente novamente em alguns instantes. Obrigado!"]);
					}
				} else {
					echo json_encode(["code" => "2", "message" => "Chave de Segurança inválida!"]);
				}
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}

	public function validate_cadastro(){
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('agreement', 'Acordo de Termos', 'trim|required');
		if ($this->form_validation->run() === TRUE){
			$_usuario = $this->accounts->getByEmail($this->input->post('email'));
			if ($_usuario->ativo == '1' && $_usuario->cadastro_completo == '1' && $_usuario->super_usuario !== ''
				&& $_usuario->hash_email == '' && $_usuario->email_valid == '1'){
				echo json_encode(["code" => "1", "message" => "Cadastro concluido com sucesso! <br/> Seja bem Vindo ao MatiLab."]);
			} else {
				echo json_encode(["code" => "4", "message" => "Seu cadastro precisa ser concluído para dar continuidade."]);
			}
		} else {
			echo json_encode(["code" => "2", "message" => validation_errors(null,null)]);
		}
	}
	
	public function change_perfil(){
		$this->form_validation->set_rules('dt_nascimento', 'Data Nascimento', 'trim|required');
		$this->form_validation->set_rules('celular', 'Número Celular', 'trim|required');
		$this->form_validation->set_rules('sexo', 'Sexo', 'trim|required');
		$this->form_validation->set_rules('super_usuario', 'Super Usuário', 'trim|required|is_unique[tbl_usuario.super_usuario]');
		if ($this->form_validation->run() === TRUE){
			if($this->accounts->updateContinuacao()){
				$this->session->set_userdata("account",["Email" => $this->account->Email, "CadastroCompleto" => "1", "cookie" => False]);
				echo json_encode(["code" => "1", "message" => "Perfil cadastrado com sucesso!"]);
			} else {
				echo json_encode(["code" => "2", "message" => "Tente novamente em alguns instantes. Obrigado!"]);
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
					$this->accounts->changeHash($_usuario->id_usuario, $hash, date_format(date_add(new DateTime("now"), date_interval_create_from_date_string('3 days')), 'Y-m-d'));
					$this->sendemail->enviarEmailRecuperarSenha($_usuario->nome, $_usuario->email, $hash);
					echo json_encode(["code" => "1", "message" => "Link de Recuperação da senha foi enviado em seu E-mail."]);
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
					$this->accounts->changeHash($_usuario->id_usuario);
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
		$this->account = null;
	}
	
	public function accounts()
	{
		$this->load->view('accounts/accounts/auth-signin-v1', $this->data);
	}

	public function logout()
	{
		$this->logout_account();
		$this->load->view('accounts/logout/auth-signin-v2', $this->data);
	}

	public function forgot($hash = '')
	{
		if(!empty($hash)){
			$_usuario = $this->accounts->getByHash($hash);

			if(!empty($_usuario)){
				if ($_usuario->dt_hash_exp < date("Y-m-d")){
					$this->data['hash_msg'] = 'Sua solicitação para recuperar a senha expirou. <br/> Solicite novamente!';
					$hash = '';
				}
			} else {
				$this->data['hash_msg'] = 'Não existe solicitação para recuperar senha.';
				$hash = '';
			}
		}
		
		$this->data['hash'] = $hash;
		$this->load->view('accounts/forgot/auth-recovery-password', $this->data);
	}

	public function register()
	{
		$this->load->view('accounts/register/auth-signup', $this->data);
		
	}

	public function register_ativado()
	{
		$this->load->view('accounts/includes/header');
		$this->load->view('accounts/register/register_ativado');
		$this->load->view('accounts/includes/footer', $this->data);
	}

	public function continuar()
	{
		if ($this->logged){
			if ($this->account->CadastroCompleto == "0"){
				$_usuario = $this->accounts->getByEmail($this->account->Email);
				$this->data['_usuario'] = $_usuario;
				$this->loadViewLogged('accounts/register/continuar');
				
			} else redirect();
		} else redirect();
	}
}