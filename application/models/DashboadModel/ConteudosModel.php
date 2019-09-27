<?php

class ConteudosModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database('default');
    }

    public $id;
    public $id_professor;
    public $nome_arquivo;
    public $titulo;

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }
    function getIdProfessor() {
        return $this->id_professor;
    }

    function setIdProfessor($id_professor) {
        $this->id_professor = $id_professor;
    }

    function getNomeAquivo() {
        return $this->nome_arquivo;
    }

    function setNomeAquivo($nome_arquivo) {
        $this->nome_arquivo = $nome_arquivo;
    }
    function getTitulo() {
        return $this->titulo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function NovoConteudo(){
        $data  = array(
            'id_professor'=>$this->getIdProfessor(),
            'nome_arquivo'=>$this->getNomeAquivo(),
            'titulo'=>$this->getTitulo()
          
        );
        $insert = $this->db->insert('conteudos',$data);
        return $insert;
     }




  



}