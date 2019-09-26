<?php

class ProfessoresModel extends CI_Model
{
    public function __construct()
    {

        parent::__construct();
        $this->load->database('default');
    }
        public $id;
        public $nome;
        public $usuario;
        public $senha;
        public $materia;
        public $tipo;

        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getUsuario() {
            return $this->usuario;
        }

        function getSenha() {
            return $this->senha;
        }

        function getMateria() {
            return $this->materia;
        }

        function getTipo() {
            return $this->tipo;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        function setSenha($senha) {
            $this->senha = $senha;
        }

        function setMateria($materia) {
            $this->materia = $materia;
        }

        function setTipo($tipo) {
            $this->tipo = $tipo;
        }

    public function GetProfessores(){
       
        $query = $this->db->get_where('usuarios', array('tipo'=> 2));
          
        return $query->result();
       
    }



}