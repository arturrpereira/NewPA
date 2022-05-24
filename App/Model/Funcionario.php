<?php
  
  class Funcionario{

    public $id_funcionario;
    public $nome_funcionario;
    public $rg_funcionario;
    public $cpf_funcionario;
    public $endereco_funcionario;
    public $dataAdmissao_funcionario;
    public $dataNasc_funcionario;
    public $genero_funcionario;
    public $telefone_funcionario;

    public $rows;

    public function save() {

      include 'DAO/FuncionarioDAO.php';

      $dao = new CargoDAO();

      if(empty($this->id)){

        $dao->insert($this);
      }
    }

    public function getAllRows() {

      include 'DAO/FuncionarioDAO.php';
      
      $dao = new CargoDAO();

      $this->rows = $dao->select();
    }

    public function getById(int $id) {

      include 'DAO/FuncionarioDAO.php'; 
      
      $dao = new CargoDAO();

      $obj = $dao->selectById($id); 

      return ($obj) ? $obj : new Cargo(); 

        /*if($obj)
        {
            return  $obj;
        } else {
            return new PessoaModel();
        }*/
    }

    public function delete(int $id) {

        include 'DAO/FuncionarioDAO.php'; 

        $dao = new CargoDAO();

        $dao->delete($id);
    }
  }
?>
