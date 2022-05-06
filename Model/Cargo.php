<?php
  
  class Cargo{

    public $id_cargo;
    public $desc_cargo;
    public $salario_cargo;
    public $nivel_cargo;

    public function __construct($id_cargo, $desc_cargo, $salario_cargo, $nivel_cargo) {
      $this->id_cargo = $id_cargo;
      $this->desc_cargo = $desc_cargo;
      $this->salario_cargo = $salario_cargo;
      $this->nivel_cargo = $nivel_cargo;
    }  
  }
?>
