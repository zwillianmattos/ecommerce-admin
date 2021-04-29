<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    public function __construct()
	{
        parent::__construct();
        if( getSession('loggedAdmin') == false) {
            redirect(base_url('painel/login'));
        }
    }
}
