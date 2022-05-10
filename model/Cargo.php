<?php
  
  class Cargo{

    public $id_cargo;
    public $desc_cargo;
    public $salario_cargo;
    public $nivel_cargo;

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

    public function Insert(){
      
      return "INSERT INTO Cargo (desc_cargo, salario_cargo, nivel_cargo) VALUES (?,?,?)";
      
          
    }

    public function Update(){

    }

    public function Delete(){

    }
    
    public function Select(){

    }




  }
?>
