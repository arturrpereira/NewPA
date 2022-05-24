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
       $model->nome_funcionario =  $_POST['nome_funcionario'];
       $model->rg_funcionario =  $_POST['rg_funcionario'];
       $model->cpf_funcionario =  $_POST['cpf_funcionario'];
       $model->endereco_funcionario =  $_POST['endereco_funcionario'];
       $model->dataAdmissao_funcionario =  $_POST['dataAdmissao_funcionario'];
       $model->dataNasc_funcionario =  $_POST['dataNasc_funcionario'];
       $model->genero_funcionario = $_POST['genero_funcionario'];
       $model->telefone_funcionario = $_POST['telefone_funcionario'];

       $model->save(); 

       header("Location: /index"); 
    }

    public static function delete() {

        include 'Model/Cargo.php'; 

        $model = new Cargo();

        $model->delete( (int) $_GET['id_cargo'] ); 

        header("Location: /index");
    }
  }
?>
