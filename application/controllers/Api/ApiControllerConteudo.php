<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiControllerConteudo extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('DashboadModel/ConteudosModel');

	}
	

	public function GetConteudoProfessorId()
	{
        $this->ConteudosModel->setIdProfessor($this->uri->segment(4));
		$data = $this->ConteudosModel->BuscarConteudosIdProfessor();
        echo json_encode($data);
	}



}
