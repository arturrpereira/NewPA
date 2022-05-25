<?php

  class ClienteController {

    public static function index() {

        include 'Model/Cliente.php'; 
        
        $model = new Cliente(); 
        $model->getAllRows(); 

        include 'lista_cliente.php'; 
    }

    public static function form() {

      include 'Model/Cliente.php'; 
      $model = new Cliente();
      
      if(isset($_GET['id'])) 
        $model = $model->getById( (int) $_GET['id']); 

      include 'View/modules/Cliente/FormCliente.php'; 
    }
    
    public static function save()
    {
       include 'Model/Cliente.php'; 

       $model = new Cliente();

       $model->id_cliente =  $_POST['id_cliente'];
       $model->nome_cliente = $_POST['nome_cliente'];
       $model->cpf_cliente = $_POST['cpf_cliente'];
       $model->tel_cliente = $_POST['tel_cliente'];
       $model->cel_cliente = $_POST['cel_cliente'];
       $model->email_cliente = $_POST['email_cliente'];
       $model->end_cliente = $_POST['end_cliente'];
       $model->fk_id_usuario = $_POST['fk_id_usuario'];

       $model->save(); 

       header("Location: /index"); 
    }

    public static function delete() {

        include 'Model/Cliente.php'; 

        $model = new Cliente();

        $model->delete( (int) $_GET['id_cliente'] ); 

        header("Location: /cliente");
    }
  }
?>
