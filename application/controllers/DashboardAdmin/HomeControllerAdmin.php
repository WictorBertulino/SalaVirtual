<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeControllerAdmin extends CI_Controller {

	public function index()
	{
        $this->load->helper('url');
        $this->load->view('sistema/includes/head');
		$this->load->view('sistema/Home');
        $this->load->view('sistema/includes/footer');
	}
}
