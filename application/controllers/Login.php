<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
      
    }
	public function index()
	{
		$this->load->view('Login');
	}
	
	public function ValidandoLogin(){
		$this->load->model('LoginModel');
		$this->LoginModel->setUsuario($this->input->post('user'));
		$this->LoginModel->setSenha($this->input->post('password'));
		
		$validate = $this->LoginModel->VerificarLogin();
		
		if($validate){
			$this->session->set_userdata('idSession',$validate['id']);
			$this->session->set_userdata('nameUserSession',$validate['nome']);
			$this->session->set_userdata('userSession',$validate['usuario']);
			$this->session->set_userdata('TypeSession',$validate['tipo']);
			header("Location: ../Dashboard/Home");
		}else{
			$this->session->set_flashdata('errorLogin','Usuário ou senha Inválidos');
			header("Location: /SalaVirtual");
		}




		

	}

}
