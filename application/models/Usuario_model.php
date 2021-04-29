<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    private $table = 'tb_usuarios';

    public function find($email, $senha){
        $this->db->from("{$this->table}" );
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        $query = $this->db->get();
        return $query->result_array();
    }  

    public function insert($dados){
        $dados['senha'] = md5($dados['senha']);
        $this->db->insert($this->table, $dados);
        
        return true;
    }

}
