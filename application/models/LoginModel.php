

<?php

class LoginModel extends CI_Model
{
    public $id;
    public $nome;
    public $usuario;
    public $senha;
    public $materia;
    public $tipo;
    public function __construct()
    {

        parent::__construct();
        $this->load->database('default');
    }
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
  

    public function VerificarLogin()
    {
    $query = $this->db->get_where('usuarios', array('usuario' => $this->getUsuario(),'senha'=>$this->getSenha()));

        if($query->num_rows()){
            $this->db->close();
            return $query->row_array();
        }else{
            $this->db->close();
            return false;
        }


        
    
    }


} 