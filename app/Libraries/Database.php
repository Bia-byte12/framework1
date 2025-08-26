<?php
class Database {
    private $host = 'localhost';
    private $usuario = 'root';
    private $senha = '';
    private $banco = 'framework';
    private $porta = '3306'; //porta
    banco..
    private $dbh;
}

public function _ construct()
{
        //fonte de dados ou DSN contém as informações necessárias para conectar ao banco de dados.
        $dsn = 'mysql:host='.$this->host.';port='.$this->porta.'; dbname='.$this->banco;
        $opcoes = [
           //armazena em cache a conexão para ser reutilizada, evita a sobrecarga de uma nova conexão, resultando em um aplicativo mais rápido
           PDO::ATTR_PERSISTENT => true,
           //lança uma PDOException se ocorrer um erro
           PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION

];
}
public function _ construct()
{ 
       try {
            //cria a instancia do PDO
            $this->dbh = new PDO($dsn, $this->usuario, $this->senha,
$opcoes);
       } catch (PDOException $e) {
           print "Error!: " $e->getMessage(). "<br/>";
           die();
       }//fim do catch
}
?>