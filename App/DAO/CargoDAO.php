<?php

    class CargoDAO {
        
        private $conexao;

        public function __construct() {
            
            $dsn = "mysql:host=localhost:3306;dbname=db_mvc";

            $this->conexao = new PDO($dsn, 'root', 'cajuru@2022');
        }

        public function insert(Cargo $model) {

            $sql = "INSERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?) ";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->cpf);
            $stmt->bindValue(3, $model->data_nascimento);

            $stmt->execute();
        }

        public function update(Cargo $model) {

            $sql = "UPDATE pessoa SET nome=?, cpf=?, data_nascimento=? WHERE id=? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->cpf);
            $stmt->bindValue(3, $model->data_nascimento);
            $stmt->bindValue(4, $model->id);
            $stmt->execute();
        }

        public function select() {

            $sql = "SELECT * FROM pessoa ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);        
        }


        public function selectById(int $id) {

            include_once 'Model/Cargo.php';

            $sql = "SELECT * FROM pessoa WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("PessoaModel"); 
        }


        public function delete(int $id) {

            $sql = "DELETE FROM pessoa WHERE id = ? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }
?>