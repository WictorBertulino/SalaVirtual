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
       $dadosDB = array(
        "idUsuario"=>$this->session->userdata('idSession'),
        "nomeUsuario"=>$this->session->userdata('nameUserSession')
       );

       var_dump($dadosDB);

       var_dump($_FILES);
       
        //   $configuracao = array(
        //     'upload_path'   => './assets/conteudos',
        //     'allowed_types' => 'pdf|png|jpeg|jpg',
        //     'file_name'     => 'testee.pdf',
        //     'max_size'      => '80000'
        //  );

        //  $this->load->library('upload',$configuracao);
        //  if( !$this->upload->do_upload('userFile') ){
        //     $error = array( 'error' => $this->upload->display_errors() );
        //    echo $this->upload->display_errors();
		//     }
		// else{
        //     echo "true";
		// 	$data = array( 'upload_data' => $this->upload->data() );
		// }
    

	}
	
}
