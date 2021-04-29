<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pedido_model');
    }

    public function index() {
        
        $dados['dados'] = $this->pedido_model->listAll();
        $this->template->load('template/template', 'pedido/listagem', $dados);
    }
    
}
