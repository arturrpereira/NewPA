<?php
// endereco
// nome do BD
// usuario
// senha

  class ConnectionBD {
    
    public function Connection() {

      $endereco = 'localhost';
      $banco = 'db_pa';
      $usuario = 'postgres';
      $senha = '031298';

      $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
      return $pdo;       
    }
    
  }

/*$endereco = 'localhost';
$banco = 'db_pa';
$usuario = 'postgres';
$senha = '031298';



$pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
/*try {
  // sgbd:host;port;dbname
  // usuario
  // senha
  // errmode
  $pdo = new PDO("pgsql:host=$endereco;port=5432;dbname=$banco", $usuario, $senha, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

  //echo "Conectado no banco de dados!!!";

} catch (PDOException $e) {
  echo "Falha ao conectar ao banco de dados. <br/>";
  die($e->getMessage());
}*/


?>