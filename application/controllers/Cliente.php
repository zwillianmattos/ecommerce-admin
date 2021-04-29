<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends MY_Controller {
    public function __construct()
	{
		parent::__construct();
    }
    
	public function index()
	{
        $this->load->model('clientes_model');
        $dados['dados'] = $this->clientes_model->listAll();
		$this->template->load('template/template', 'cliente/listagem', $dados);
	}
}
