<?php
  
  class Pet{

    public $id_pet;
    public $nome_pet;
    public $sexo_pet;
    public $tipo_pet;
    public $raca_pet;
    public $fk_id_cliente;
    public $fk_id_usuario;

    public $rows;

    public function save() {

      include 'DAO/PetDAO.php';

      $dao = new PetDAO();

      if(empty($this->id)){

        $dao->insert($this);
      }
    }

    public function getAllRows() {

      include 'DAO/PetDAO.php';
      
      $dao = new PetDAO();

      $this->rows = $dao->select();
    }

    public function getById(int $id) {

      include 'DAO/PetDAO.php'; 
      
      $dao = new PetDAO();

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

        include 'DAO/PetDAO.php'; 

        $dao = new PetDAO();

        $dao->delete($id);
    }
  }
?>
