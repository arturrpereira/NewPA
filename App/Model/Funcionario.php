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

      $dao = new FuncionarioDAO();

      if(empty($this->id)){

        $dao->insert($this);
      }
    }

    public function getAllRows() {

      include 'DAO/FuncionarioDAO.php';
      
      $dao = new FuncionarioDAO();

      $this->rows = $dao->select();
    }

    public function getById(int $id) {

      include 'DAO/FuncionarioDAO.php'; 
      
      $dao = new FuncionarioDAO();

      $obj = $dao->selectById($id); 

      return ($obj) ? $obj : new Funcionario(); 

        /*if($obj)
        {
            return  $obj;
        } else {
            return new PessoaModel();
        }*/
    }

    public function delete(int $id) {

        include 'DAO/FuncionarioDAO.php'; 

        $dao = new FuncionarioDAO();

        $dao->delete($id);
    }
  }
?>
