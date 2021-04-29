<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {
    private $table = 'tb_cliente';
    
    public function listAll(){
        $this->db->from("{$this->table}" );
        $query = $this->db->get();
        return $query->result_array();
    }
}
