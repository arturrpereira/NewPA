<?php

  require_once 'model/Cargo.php';
  require_once 'ConnectionBD.php';
  include("ConnectionBD.php");
  
  class CargoController {

    public function Insert($desc_cargo, $salario_cargo, $nivel_cargo){

      $new_connection = new ConnectionBD();
      $cargo = new Cargo($desc_cargo, $salario_cargo, $nivel_cargo);
      $query = $new_connection->Connection()->prepare($cargo->Insert);

      if($query->execute($desc_cargo, $salario_cargo, $nivel_cargo)){
        echo "Usuário Cadastrado com sucesso!";
      }
    }

    public function listar(){
      $cargo = new Cargo();
      $cargos = $cargo->Select();

      $_REQUEST['cargos'] = $cargos;

      require_once 'view/cargo_view.php';
    }

    public function listar(){
      $cargo = new Cargo();
      $cargos = $cargo->Select();

      $_REQUEST['cargos'] = $cargos;

      require_once 'view/cargo_view.php';
    }

    public function listar(){
      $cargo = new Cargo();
      $cargos = $cargo->Select();

      $_REQUEST['cargos'] = $cargos;

      require_once 'view/cargo_view.php';
    }
  }



?>
