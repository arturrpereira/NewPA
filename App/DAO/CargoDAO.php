<?php

    class CargoDAO {
        
        private $conexao;

        public function __construct() {
            
            $endereco = '172.22.4.174';
            $banco = 'db_pa';
            $usuario = 'postgres';
            $senha = '031298';

            $this->conexao = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function insert(Cargo $model) {

            $sql = "INSERT INTO Cargo (desc_cargo, salario_cargo, nivel_cargo) VALUES (?, ?, ?) ";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->desc_cargo);
            $stmt->bindValue(2, $model->salario_cargo);
            $stmt->bindValue(3, $model->nivel_cargo);

            $stmt->execute();
        }

        public function update(Cargo $model) {

            $sql = "UPDATE Cargo SET desc_cargo=?, salario_cargo=?, nivel_cargo=? WHERE id=? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->desc_cargo);
            $stmt->bindValue(2, $model->salario_cargo);
            $stmt->bindValue(3, $model->nivel_cargo);
            $stmt->bindValue(4, $model->id_cargo);
            $stmt->execute();
        }

        public function select() {

            $sql = "SELECT * FROM Cargo ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);        
        }


        public function selectById(int $id) {

            include_once 'Model/Cargo.php';

            $sql = "SELECT * FROM Cargo WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("Cargo"); 
        }


        public function delete(int $id) {

            $sql = "DELETE FROM Cargo WHERE id = ? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }
?>
