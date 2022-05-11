<?php

  class UsuarioController {

    public static function index() {

        include 'Model/Usuario.php'; 
        
        $model = new Usuario(); 
        $model->getAllRows(); 

        include 'View/modules/Pessoa/ListaUsuario.php'; 
    }

    public static function form() {

      include 'Model/Usuario.php'; 
      $model = new Usuario();
      
      if(isset($_GET['id'])) 
        $model = $model->getById( (int) $_GET['id']); 

      include 'View/modules/Pessoa/FormUsuario.php'; 
    }
    
    public static function save()
    {
       include 'Model/Usuario.php'; 

       $model = new Usuario();

       $model->nome_usuario = $_POST['nome_usuario'];
       $model->email_usuario = $_POST['email_usuario'];
       $model->tel_usuario = $_POST['tel_usuario'];
       $model->fk_id_cargo = $_POST['fk_id_cargo'];

       $model->save(); 

       header("Location: /usuario"); 
    }

    public static function delete() {

        include 'Model/Usuario.php'; 

        $model = new Usuario();

        $model->delete( (int) $_GET['id_usuario'] ); 

        header("Location: /usuario");
    }
  }
?>
