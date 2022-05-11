<?php
  
  class Cargo{

    public $id_cargo;
    public $desc_cargo;
    public $salario_cargo;
    public $nivel_cargo;

    public $rows;

    public function save() {

      include 'DAO/CargoDAO.php';

      $dao = new CargoDAO();

      if(empty($this->id)){

        $dao->insert($this);
      }
    }

    public function getAllRows() {

      include 'DAO/CargoDAO.php';
      
      $dao = new CargoDAO();

      $this->rows = $dao->select();
    }

    public function getById(int $id) {

      include 'DAO/CargoDAO.php'; 
      
      $dao = new CargoDAO();

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

        include 'DAO/CargoDAO.php'; 

        $dao = new CargoDAO();

        $dao->delete($id);
    }
  }
?>
