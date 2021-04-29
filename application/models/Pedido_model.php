<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model {
    private $table = 'tb_pedido';

    public function listAll(){
        $this->db->select('p.*, c.nome as cliente', false);
        $this->db->join('tb_cliente c', 'c.id = p.cliente');
        $this->db->from("{$this->table} p" );
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get($id){
        $this->db->where('id',$id);
        $this->db->from("{$this->table} p" );
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getItens($pedido){
        $this->db->select('pd.*, p.qtd');
        $this->db->where('pedido',$pedido);
        $this->db->join('tb_produtos pd', 'pd.id = p.produto');
        $this->db->from("tb_itens p" );
        $query = $this->db->get();
        return $query->result_array();
    }
}
