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
       
          $configuracao = array(
            'upload_path'   => './assets',
            'allowed_types' => 'pdf|png|jpeg|jpg',
            'file_name'     => 'testee.pdf',
            'max_size'      => '500'
         );
         $this->load->library('upload',$configuracao);


         if( !$this->upload->do_upload('userFile') ){
			$error = array( 'error' => $this->upload->display_errors() );
		    }
		else{
			$data = array( 'upload_data' => $this->upload->data() );
		}
    
	}
	
}
