<?php

  class FuncionarioController {

    public static function index() {

        include 'Model/Funcionario.php'; 
        
        $model = new Funcionario(); 
        $model->getAllRows(); 

        include 'View/modules/Pessoa/ListaCargo.php'; 
    }

    public static function form() {

      include 'Model/Funcionario.php'; 
      $model = new Funcionario();
      
      if(isset($_GET['id'])) 
        $model = $model->getById( (int) $_GET['id']); 

      include 'View/modules/Pessoa/FormPessoa.php'; 
    }
    
    public static function save()
    {
       include 'Model/Funcionario.php'; 

       $model = new Funcionario();

       $model->id_funcionario=  $_POST['id_cargo'];
       $model->id_cargo =  $_POST['id_cargo'];
       $model->id_cargo =  $_POST['id_cargo'];
       $model->id_cargo =  $_POST['id_cargo'];
       $model->id_cargo =  $_POST['id_cargo'];
       $model->id_cargo =  $_POST['id_cargo'];
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
