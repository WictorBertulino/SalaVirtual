<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AlunosHomeController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('DashboadModel/AlunosModel');

	}
	

	public function index()
	{

		$data = array(
			'alunos'=>$this->AlunosModel->GetAlunos()
		);
       
         $this->load->view('sistema/includes/head');
		 $this->parser->parse('sistema/Alunos',$data);
         $this->load->view('sistema/includes/footer');
	}

	public function NovoAluno()
	{
		$this->AlunosModel->setNome($this->input->post('nome'));
		$this->AlunosModel->setUsuario($this->input->post('usuario'));	
		$this->AlunosModel->setSenha($this->input->post('senha'));	
		$this->AlunosModel->setMateria('-');		
		$registro = $this->AlunosModel->NovoAluno();
		if($registro){
			$this->session->set_flashdata('NovoAlunoSucesso', 'Cadastrado com sucesso!');
			header('Location:../Alunos');
		}else{
			$this->session->set_flashdata('ErroNovoProfessor', 'Ocorreu um erro inesperado!');
			header('Location:../Alunos');
		}
	}

}
