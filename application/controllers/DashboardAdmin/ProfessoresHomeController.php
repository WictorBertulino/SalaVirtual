<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfessoresHomeController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('DashboadModel/ProfessoresModel');

	}
	

	public function index()
	{

		$data = array(
			'professores'=>$this->ProfessoresModel->GetProfessores()
		);
	
         $this->load->view('sistema/includes/head');
		 $this->parser->parse('sistema/Professores',$data);
         $this->load->view('sistema/includes/footer');
	}
}
