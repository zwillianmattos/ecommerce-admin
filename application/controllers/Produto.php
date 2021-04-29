<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produto extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('produtos_model');
	}


	public function view()
	{
		$registro = $this->produtos_model->get($this->uri->segment(3))[0];

		if (empty($registro)) {
			redirect(base_url());
		}
		$cor = !empty($this->uri->segment(4)) ? $this->uri->segment(4) : $registro['cor'];
		$dados['registro']  = $registro;
		$dados['registro']['imagens'] = $this->produtos_model->listaImagensProduto($registro['id'],  $cor);
		$dados['registro']['tamanhos'] = $this->produtos_model->listaTamanhoTenis($registro['id'],  $cor);
		$this->template->load('template/template', 'produto/form', $dados);
	}

	public function index()
	{

		$dados['dados'] = $this->produtos_model->listAll();

		$this->template->load('template/template', 'produto/listagem', $dados);
	}


	public function form()
	{
		$dados['edicao'] = false;

		$dados['registro'] = [
			'id' => '',
			'titulo' => '',
			'descricao' => '',
			'valor' => '',
			'cor' => '',
			'imagens' => [
				['url' => ''],
				['url' => ''],
				['url' => '']
			]
		];

		if ($this->uri->segment(3)) {
			$dados['edicao'] = true;
			$dados['registro'] = $this->produtos_model->get($this->uri->segment(3))[0];
			
			if (empty($dados['registro'])) {
				redirect(base_url('produto'));
			}
			$dados['registro']['imagens'] = $this->produtos_model->listaImagensProduto($dados['registro']['id'], $dados['registro']['cor']);
		}

		$this->template->load('template/template', 'produto/form', $dados);
	}

	public function gravar()
	{

		$dados = [
			'titulo' => $this->input->post('titulo'),
			'descricao' => $this->input->post('descricao'),
			'id' => $this->input->post('id')
		];

		$imagens = $this->input->post('imagem');
		
		$cor = [
			'cor' => $this->input->post('cor'),
			'valor' => $this->input->post('valor')
		];

		if (!empty($this->input->post('id'))) { 
			$exec = $this->produtos_model->update($dados, $cor, $imagens);
		} else {
			$exec = $this->produtos_model->insert($dados, $cor, $imagens);
		}

		redirect(base_url('produto/view/'. $exec));
	}
}
