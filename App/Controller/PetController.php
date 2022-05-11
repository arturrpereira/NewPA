<?php

  class PetController {

    public static function index() {

        include 'Model/Pet.php'; 
        
        $model = new Pet(); 
        $model->getAllRows(); 

        include 'View/modules/Pessoa/ListaPet.php'; 
    }

    public static function form() {

      include 'Model/Pet.php'; 
      $model = new Pet();
      
      if(isset($_GET['id'])) 
        $model = $model->getById( (int) $_GET['id']); 

      include 'View/modules/Pessoa/FormPet.php'; 
    }
    
    public static function save()
    {
       include 'Model/Pet.php'; 

       $model = new Pet();

       $model->id_cargo =  $_POST['id_cargo'];
       $model->desc_cargo = $_POST['desc_cargo'];
       $model->salario_cargo = $_POST['salario_cargo'];
       $model->nivel_cargo = $_POST['nivel_cargo'];

       $model->save(); 

       header("Location: /pet"); 
    }

    public static function delete() {

        include 'Model/Cargo.php'; 

        $model = new Cargo();

        $model->delete( (int) $_GET['id_cargo'] ); 

        header("Location: /cargo");
    }
  }
?>
