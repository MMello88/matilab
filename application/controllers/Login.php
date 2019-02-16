<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function login()
	{
		$this->load->view('user/includes/header');
		$this->load->view('user/login/login');
		$this->load->view('user/includes/footer');
	}

	public function logout()
	{
		$this->load->view('user/includes/header');
		$this->load->view('user/logout/logout_success');
		$this->load->view('user/includes/footer');
	}

	public function forgot()
	{
		$this->load->view('user/includes/header');
		$this->load->view('user/forgot/forgot');
		$this->load->view('user/includes/footer');
	}

	public function register()
	{
		$this->load->view('user/includes/header');
		$this->load->view('user/register/register');
		$this->load->view('user/includes/footer');
	}

	public function register_ativado()
	{
		$this->load->view('user/includes/header');
		$this->load->view('user/register/register_ativado');
		$this->load->view('user/includes/footer');
	}

	public function register_success()
	{
		$this->load->view('user/includes/header');
		$this->load->view('user/register/register_success');
		$this->load->view('user/includes/footer');
	}

}
