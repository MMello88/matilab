<?php defined('BASEPATH') OR exit('No direct script access allowed.');


class Sendemail {

	protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

	public function enviarEmailRecuperarSenha($nome, $email, $hash){
    	$link = base_url("forgot/$hash");
    	$html = 
		"<!DOCTYPE html>
		<html lang=\"pt-br\">
		  <head>
		  </head>
		  <body> 
		    <h3><b>Olá,  {$nome}.</b></h3>
		    <p>Você solicitou a recuperação de senha do <b>MatiLab</b>?</p>
		    <p>
		    Se foi você quem solicitou a recuperação de senha por favor <a href='{$link}'>Clique Aqui</a> para registrar uma nova senha. <br>
		    Se não foi você quem solicitou a recuperação de senha por favor <a href='{$link}'>Clique Aqui</a> para desfazer este pedido. <br>
		    Obrigado!
		    </p>
		    <br/>
		    <p><smal>**Por favor, não responder para este e-mail</smal></p>
		  </body>
		</html>";

		if (ENVIRONMENT === 'development'){
		    $this->CI->load->library('email');
		    $this->email
		    	->from('matheus.gnu@gmail.com', 'MatiLab')
		    	->to($email)
		    	->subject("MatiLab - Pedido de Recuperação de Senha.")
		    	->message($html)
		    	->send();
		}
    }
}