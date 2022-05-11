<?php
  
  class Usuario{

    public $id_usuario;
    public $nome_usuario;
    public $email_usuario;
    public $tel_usuario;
    public $fk_id_cargo;

    public function __construct($id_usuario, $nome_usuario, $email_usuario, $tel_usuario, $fk_id_cargo) {
      $this->id_usuario = $id_usuario;
      $this->nome_usuario = $nome_usuario;
      $this->email_usuario = $email_usuario;
      $this->tel_usuario = $tel_usuario;
      $this->fk_id_cargo = $fk_id_cargo;
    }  
  }
?>
