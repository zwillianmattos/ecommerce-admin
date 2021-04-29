<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Model {
    private $table = 'tb_produtos';


    public function listAll(){
        $this->db->select('p.*, c.id as codCor, c.descricao AS cor, c.valor, ( c.valor * 1.2 ) as desconto, COALESCE( (
            select SUM(qtd) from tb_tamanho where produto = p.id
        ),0 ) as qtd_estoque', false);
        $this->db->from("{$this->table} p" );
        $this->db->join("tb_cor c", "c.produto = p.id" );
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listaTamanhoTenis( $id , $cor = false ){
        $this->db->select("t.descricao AS tamanho, t.indisponivel, t.qtd, p.id AS produto");
        $this->db->from("tb_tamanho t" );
        $this->db->join("tb_produtos p", "p.id = t.produto" );
        $this->db->join("tb_cor c", "c.id = t.cor" );
        $this->db->where("p.id", $id );
        $this->db->order_by('t.descricao');
        if( $cor ){
            $this->db->where("c.descricao", $cor );
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listaImagensProduto( $id , $cor = false ){
        $this->db->select("i.id, i.url, c.id AS cor");
        $this->db->from("tb_imagens i" );
        $this->db->join("tb_cor c", "c.id = i.cor" );
        $this->db->join("{$this->table} p", "c.produto = p.id" );
        $this->db->where("c.produto", $id );
        if( $cor ){
            $this->db->where("c.descricao", $cor );
        }
        $query = $this->db->get();
        return $query->result_array();
    }

    public function listaCoresTenis( $id ){
        $this->db->select("c.*");
        $this->db->from("tb_cor c" );
        $this->db->join("{$this->table} p", "c.produto = p.id" );
        $this->db->where("c.produto", $id );
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get($id, $cor = false) {
        $this->db->where('p.id', $id);
        if( $cor )
            $this->db->where('c.descricao', $cor);
        
        return $this->listAll();
    }

    /**
     * Busca os ultimos produtos cadastrados
     */
    public function buscaUltimos() {
        $this->db->limit(8);
        $this->db->order_by('p.id', 'desc');

        return $this->listAll();
    }

    public function buscaUltimosMaisCaros() {
        $this->db->limit(3);
        $this->db->order_by('p.id, c.valor', 'desc');
        return $this->listAll();
    }

    public function update($dados, $cor, $imagens)
    {
        $err = [];
        $cod = $dados['id'];
        unset($dados['id']);

        $this->db->trans_start();

        $this->db->where('id', $cod)->update($this->table, $dados);
        $err[] = $this->db->error();

        $this->db->where('produto', $cod)->update('tb_cor', [
            'descricao' => $cor['cor'],
            'valor' => $cor['valor']
        ]);

        $err[] = $this->db->error();

        
        foreach ($imagens as $img) {
            $this->db->where('cor', $cor['cor'])->where('url',$img)->update('tb_imagens', [
                'url' => $img,
                'cor' => $cor['cor'],
            ]);
            $err[] = $this->db->error();
        }


        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return $err;
        }

        return  $cod;
    }

    public function insert($dados, $cor, $imagens)
    {
        $err = [];

        $this->db->trans_start();

        $this->db->insert($this->table, $dados);
        $err[] = $this->db->error();

        $cod = $this->db->insert_id();

        $this->db->insert('tb_cor', [
            'produto' => $cod,
            'descricao' => $cor['cor'],
            'valor' => $cor['valor']
        ]);

        $err[] = $this->db->error();
        $codCor = $this->db->insert_id();

        $data = [];

        foreach ($imagens as $img) {
            $data[] = [
                'cor' => $codCor,
                'url' => $img['id'],
            ];
        }

        $this->db->insert_batch('tb_imagens', $data);
        $err[] = $this->db->error();

        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            return $err;
        }

        return  $cod;
    }
}
