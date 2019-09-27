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
        var_dump($data);
        //  $this->load->view('sistema/includes/head');
		//  $this->parser->parse('sistema/Professores',$data);
        //  $this->load->view('sistema/includes/footer');
	}

	// public function NovoProfessor()
	// {
	// 	$this->ProfessoresModel->setNome($this->input->post('nome'));
	// 	$this->ProfessoresModel->setUsuario($this->input->post('usuario'));	
	// 	$this->ProfessoresModel->setSenha($this->input->post('senha'));	
	// 	$this->ProfessoresModel->setMateria($this->input->post('materia'));		
	// 	$registro = $this->ProfessoresModel->NovoProfessor();
	// 	if($registro){
	// 		$this->session->set_flashdata('NovoProfessorSucesso', 'Cadastrado com sucesso!');
	// 		header('Location:../Professores');
	// 	}else{
	// 		$this->session->set_flashdata('ErroNovoProfessor', 'Ocorreu um erro inesperado!');
	// 		header('Location:../Professores');
	// 	}
	// }

}
