<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConteudosControllerAdmin extends CI_Controller {

	
	public function index()
	{
    
        $this->load->view('sistema/includes/head');
        $this->load->view('sistema/Conteudos');
        $this->load->view('sistema/includes/footer');

	}

	
}
