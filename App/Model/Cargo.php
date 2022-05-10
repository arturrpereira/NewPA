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

/*    public function __construct($id_cargo, $desc_cargo, $salario_cargo, $nivel_cargo) {
      $this->id_cargo = $id_cargo;
      $this->desc_cargo = $desc_cargo;
      $this->salario_cargo = $salario_cargo;
      $this->nivel_cargo = $nivel_cargo;
}  */

    /*public function getId_cargo(){
      return $this->id_cargo;
    }

    public function getDesc_cargo(){
      return $this->desc_cargo;
    }

    public function getId_cargo(){
      return $this->id_cargo;
    }
    public function getId_cargo(){
      return $this->id_cargo;
    }*/

/*    public function Insert(){
      
      return "INSERT INTO Cargo (desc_cargo, salario_cargo, nivel_cargo) VALUES (?,?,?)";
      
          
    }

    public function Update(){

    }

    public function Delete(){

    }
    
    public function Select(){

    }

  } */
?>
