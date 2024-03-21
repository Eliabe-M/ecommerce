<?php
namespace Ecommerce;

class Conexao {
    private $host = 'localhost';
    private $dbname = 'ecommerce_sql';
    private $user = 'root';
    private $password = '';

    public function conectar() {
        try {
            return new \PDO( 
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->password
            );

        } catch (\PDOException $e) { 
            echo '<p>' . $e->getMessage() . '</p>';
        }
    }
}