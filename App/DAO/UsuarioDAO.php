<?php

    class UsuarioDAO {
        
        private $conexao;

        public function __construct() {
            
            $endereco = '172.22.4.174';
            $banco = 'db_pa';
            $usuario = 'postgres';
            $senha = '031298';

            $this->conexao = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function insert(Usuario $model) {

            $sql = "INSERT INTO Usuario (nome_usuario, email_usuario, tel_usuario, fk_id_cargo) VALUES (?, ?, ?) ";

            $stmt = $this->conexao->prepare($sql);

            $stmt->bindValue(1, $model->nome);
            $stmt->bindValue(2, $model->cpf);
            $stmt->bindValue(3, $model->data_nascimento);
            $stmt->bindValue(3, $model->data_nascimento);

            $stmt->execute();
        }

        public function update(Usuario $model) {

            $sql = "UPDATE Usuario SET nome_usuario=?, email_usuario=?, tel_usuario=?, fk_id_cargo=? WHERE id_usuario=? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $model->nome_usuario);
            $stmt->bindValue(2, $model->email_usuario);
            $stmt->bindValue(3, $model->tel_usuario);
            $stmt->bindValue(4, $model->fk_id_cargo);
            $stmt->bindValue(5, $model->id_usuario);
            $stmt->execute();
        }

        public function select() {

            $sql = "SELECT * FROM Usuario";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);        
        }


        public function selectById(int $id) {

            include_once 'Model/Usuario.php';

            $sql = "SELECT * FROM Usuario WHERE id = ?";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            return $stmt->fetchObject("UsuarioModel"); 
        }


        public function delete(int $id) {

            $sql = "DELETE FROM Usuario WHERE id = ? ";

            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        }
    }
?>
