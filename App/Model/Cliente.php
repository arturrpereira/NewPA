<?php
  
  class Cliente{

    public $id_cliente;
    public $nome_cliente;
    public $cpf_cliente;
    public $tel_cliente;
    public $cel_cliente;
    public $email_cliente;
    public $end_cliente;
    public $fk_id_usuario;

    public $rows;

    public function save() {

      include 'DAO/ClienteDAO.php';

      $dao = new ClienteDAO();

      if(empty($this->id)){

        $dao->insert($this);
      }
    }

    public function getAllRows() {

      include 'DAO/ClienteDAO.php';
      
      $dao = new ClienteDAO();

      $this->rows = $dao->select();
    }

    public function getById(int $id) {

      include 'DAO/ClienteDAO.php'; 
      
      $dao = new ClienteDAO();

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

        include 'DAO/ClienteDAO.php'; 

        $dao = new ClienteDAO();

        $dao->delete($id);
    }
  }
?>
