<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuario_model');
    }
    
	public function login()
	{
        $dados['mensagem'] = '';
        
        if( $this->input->post() ){
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');   

            $exec = $this->usuario_model->find($email, md5( $senha ) );
            if( !empty($exec) ){
                setSession([
                    'admin' => $exec,
                    'loggedAdmin' => true
                ]);

                redirect(base_url('/'));
            } else {
                $dados['mensagem'] = 'Usuário ou senha incorretos';
            }
        }
        
		$this->load->view('painel/login', $dados);
	}

    public function logout()
	{
        setSession([
            'admin' => '',
            'loggedAdmin' => false
        ]);

        redirect(base_url());
    }
}
