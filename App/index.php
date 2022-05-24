<?php

include 'Controller/CargoController.php';
include 'Controller/ClienteController.php';
include 'Controller/FuncionarioController.php';
include 'Controller/PedidoController.php';
include 'Controller/PetController.php';
include 'Controller/ServiçosController.php';
include 'Controller/UsuarioController.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url)
{
    case '/':
      include 'login.html'; 
    break;

    case '/index':
      include 'index.html'; 
    break;

    case '/funcionario/form/save':
        FuncionarioController::save();
    break;

    case '/cargo/form/save':
        CargoController::save();
    break;



      
    // case '/pessoa':
        PessoaController::index();
    // break;

    // case '/pessoa/form':
        // PessoaController::form();
    // break;

    // case '/pessoa/form/save':
        // PessoaController::save();
    // break;

    // case '/pessoa/delete':
        // PessoaController::delete();
    // break;

    // default:
        // echo "Erro 404";
    // break;
}

