<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounts_model extends CI_Model {

    public function  __construct() {
        parent::__construct();
    }

    public function inserirUsuario(){
    	$data = [
    		'id_usuario' => '',
    		'nome' => $this->input->post('nome'),
    		'email' => $this->input->post('email'),
    		'senha' => md5($this->input->post('senha')),
    		'Ativo' => '1',
    		'dt_cadastro' => date('Y-m-d H:i:s'),
            'cadastro_completo' => '0',
    	];

    	if ($this->db->insert('usuario', $data)) {
    		return $this->db->insert_id();
    	} else {
    		return ['code' => $this->db->error()['code'], 'message' => $this->db->error()['message']];
    	}
    }

    public function getByEmail($email) {
        $query = $this->db->get_where('usuario', array('email' => $email));
        $result = $query->result_object();
        return empty($result) ? "" : $result[0];
    }

    public function getByHash($hash) {
        $query = $this->db->get_where('usuario', array('hash' => $hash));
        $result = $query->result_object();
        return empty($result) ? "" : $result[0];
    }

    public function changeHash($id_usuario, $hash = "", $date = ""){
        return $this->db->update('usuario', ['hash' => $hash, 'dt_hash_exp' => $date], ['id_usuario' => $id_usuario]);
    }

    public function changeSenha($id_usuario, $senha){
        return $this->db->update('usuario', ['senha' => $senha], ['id_usuario' => $id_usuario]);
    }
}