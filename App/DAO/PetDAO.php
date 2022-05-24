<?php

    class PetDAO {
        
        private $conexao;

        public function __construct() {
            
            $endereco = '172.22.4.174';
            $banco = 'db_pa';
            $usuario = 'postgres';
            $senha = '031298';

            $this->conexao = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function insert(Pet $model) {

            $sql = "INSERT INTO Pet (nome_pet, idade_pet, raca_pet, porte_pet, cor_pet, fk_id_cliente, fk_id_usuario) VALUES (?, ?, ?, ?, ?, ?, ?) ";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome_pet);
            $stmt->bindValue(2, $model->idade_pet);
            $stmt->bindValue(3, $model->raca_pet);
            $stmt->bindValue(4, $model->porte_pet);
            $stmt->bindValue(5, $model->cor_pet);
            $stmt->bindValue(6, $model->fk_id_cliente);
            $stmt->bindValue(7, $model->fk_id_usuario);

            $stmt->execute();
        }

        public function update(Pet $model) {

            $sql = "UPDATE Pet SET nome_pet=?, idade_pet=?, raca_pet=?, porte_pet=?, cor_pet=?, fk_id_cliente=?, fk_id_usuario=? WHERE id_pet=?";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome_pet);
            $stmt->bindValue(2, $model->idade_pet);
            $stmt->bindValue(3, $model->raca_pet);
            $stmt->bindValue(4, $model->porte_pet);
            $stmt->bindValue(5, $model->cor_pet);
            $stmt->bindValue(6, $model->fk_id_cliente);
            $stmt->bindValue(7, $model->fk_id_usuario);
            $stmt->bindValue(8, $model->id_pet);

            $stmt->execute();
        }

        public function select() {

            $sql = "SELECT * FROM Pet ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);        
        }


        public function selectById(int $id) {

            include_once 'Model/Pet.php';

            $sql = "SELECT * FROM Pet WHERE id_pet = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("PessoaModel"); 
        }


        public function delete(int $id) {

            $sql = "DELETE FROM Pet WHERE id_pet = ? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }
?>
