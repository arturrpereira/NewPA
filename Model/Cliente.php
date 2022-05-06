<?php
  
  class Cliente{

    public $id_cliente;
    public $nome_cliente;
    public $cpf_cliente;
    public $tel_cliente;
    public $cel_cliente;
    public $email_cliente;
    public $end_cliente;
    public $fk_id_usuario;

    public function __construct($id_cliente, $nome_cliente, $cpf_cliente, $tel_cliente, $cel_cliente, $email_cliente, $end_cliente, $fk_id_usuario) {
      $this->id_cliente = $id_cliente;
      $this->nome_cliente = $nome_cliente;
      $this->cpf_cliente = $cpf_cliente;
      $this->tel_cliente = $tel_cliente;
      $this->cel_cliente = $cel_cliente;
      $this->email_cliente = $email_cliente ;
      $this->end_cliente = $end_cliente;
      $this->fk_id_usuario = $fk_id_usuario;
    }  
  }
?>
