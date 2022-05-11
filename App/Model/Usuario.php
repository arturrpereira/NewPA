<?php
  
  class Usuario{

    public $id_usuario;
    public $nome_usuario;
    public $email_usuario;
    public $tel_usuario;
    public $fk_id_cargo;

    public $rows;

    public function save() {

      include 'DAO/UsuarioDAO.php';

      $dao = new UsuarioDAO();

      if(empty($this->id)){

        $dao->insert($this);
      }
    }

    public function getAllRows() {

      include 'DAO/UsuarioDAO.php';
      
      $dao = new UsuarioDAO();

      $this->rows = $dao->select();
    }

    public function getById(int $id) {

      include 'DAO/UsuarioDAO.php'; 
      
      $dao = new UsuarioDAO();

      $obj = $dao->selectById($id); 

      return ($obj) ? $obj : new Cargo(); 

        /*if($obj)
        {
            return  $obj;
        } else {
            return new PessoaModel();
        }*/
    }

    public function delete(int $id) {

        include 'DAO/UsuarioDAO.php'; 

        $dao = new UsuarioDAO();

        $dao->delete($id);
    }
  }
?>
