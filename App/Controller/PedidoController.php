<?php

  class PessoaController {

    public static function index() {

        include 'Model/Cargo.php'; 
        
        $model = new Cargo(); 
        $model->getAllRows(); 

        include 'View/modules/Pessoa/ListaCargo.php'; 
    }

    public static function form() {

      include 'Model/Cargo.php'; 
      $model = new Cargo();
      
      if(isset($_GET['id'])) 
        $model = $model->getById( (int) $_GET['id']); 

      include 'View/modules/Pessoa/FormPessoa.php'; 
    }
    
    public static function save()
    {
       include 'Model/Cargo.php'; 

       $model = new Cargo();

       $model->id_cargo =  $_POST['id_cargo'];
       $model->desc_cargo = $_POST['desc_cargo'];
       $model->salario_cargo = $_POST['salario_cargo'];
       $model->nivel_cargo = $_POST['nivel_cargo'];

       $model->save(); 

       header("Location: /cargo"); 
    }

    public static function delete() {

        include 'Model/Cargo.php'; 

        $model = new Cargo();

        $model->delete( (int) $_GET['id_cargo'] ); 

        header("Location: /cargo");
    }
  }
?>
