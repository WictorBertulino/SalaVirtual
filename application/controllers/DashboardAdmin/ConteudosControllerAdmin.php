<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConteudosControllerAdmin extends CI_Controller {

	
	public function index()
	{
    
        $this->load->view('sistema/includes/head');
        $this->load->view('sistema/Conteudos');
        $this->load->view('sistema/includes/footer');

	}
    public function NovoConteudo()
	{
        $this->load->library('upload');
        $curriculo    = $_FILES['curriculo'];
          $configuracao = array(
            'upload_path'   => 'http://genius3.ddns.net/SalaVirtual/assets/conteudos',
            'allowed_types' => 'pdf',
            'file_name'     => 'testee.pdf',
            'max_size'      => '500'
         );

        $this->upload->initialize($configuracao);
        if ($this->upload->do_upload('curriculo')){
            echo "db";
        }else{
            echo "dr";
            echo $this->upload->display_errors();
        }
	}
	
}
