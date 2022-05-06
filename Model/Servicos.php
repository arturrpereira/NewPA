<?php
  
  class Servicos{

    public $id_servicos;
    public $valor_servicos;
    public $desc_servicos;
    public $data_servicos;
    public $fk_id_pet;

    public function __construct($id_servicos, $valor_servicos, $desc_servicos, $data_servicos, $fk_id_pet) {
      $this->id_servicos = $id_servicos;
      $this->valor_servicos = $valor_servicos;
      $this->desc_servicos = $desc_servicos;
      $this->data_servicos = $data_servicos;
      $this->fk_id_pet = $fk_id_pet;
    }  
  }
?>
