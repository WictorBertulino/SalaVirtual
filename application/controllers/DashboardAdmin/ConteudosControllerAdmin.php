<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConteudosControllerAdmin extends CI_Controller {

	
	public function index()
	{
        $this->load->model('DashboadModel/ConteudosModel');

        $this->load->view('sistema/includes/head');

        $dados = array(
            'conteudos'=>$this->ConteudosModel->BuscarConteudos()
        );
        $this->parser->parse('sistema/Conteudos',$dados);
        $this->load->view('sistema/includes/footer');

	}
    public function NovoConteudo()
	{
       $dadosDB = array(
        "idUsuario"=>$this->session->userdata('idSession'),
        "nomeUsuario"=>$this->session->userdata('nameUserSession'),
        "tituloArquivo"=>$this->input->post("titulo"),
        "NomeArquivo"=>$this->input->post("titulo")
       );
          $configuracao = array(
            'upload_path'   => './assets/conteudos',
            'allowed_types' => '*',
            'file_name'     => $this->input->post("titulo"),
            'max_size'      => '80000'
         );
         $this->load->library('upload',$configuracao);
         if( !$this->upload->do_upload('userFile') ){
            $error = array( 'error' => $this->upload->display_errors() );
           echo $this->upload->display_errors();

		}else{    
            $this->load->model('DashboadModel/ConteudosModel');
            $this->ConteudosModel->setIdProfessor($dadosDB["idUsuario"]);
            $this->ConteudosModel->setTitulo($dadosDB["tituloArquivo"]);
            $this->ConteudosModel->setNomeAquivo($dadosDB["NomeArquivo"]);
            
            if($this->ConteudosModel->NovoConteudo()){
                $this->session->set_flashdata('UploadCompleto', 'Arquivo '.$dadosDB["NomeArquivo"].' Foi Cadastrado com sucesso!');
                header('Location:../Conteudos');
                
            }
        }
    


    } 
    public  function DownloadConteudo()
    {
        
        $this->load->helper('url');
        $this->load->helper('download');
        $nomeConteudo = $this->uri->segment(4);
        $path = file_get_contents('./assets/conteudos/'.$nomeConteudo.'.pdf');
        $name =$nomeConteudo;
        force_download($name, $path ); 
    }
	
}
