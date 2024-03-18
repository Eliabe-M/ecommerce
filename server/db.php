<!-- Aqui voce vai centralizar a logica de conexão do bd -->

<?php

// Variáveis da conexão ao banco de dados
$servername = "localhost"; // Nome do servidor
$username = "root";
$password = "";
$database = "ecommerce_sql"; // Nome do banco de dados usado

// Função para conectar ao banco de dados
function conectarBancoDeDados($servername, $username, $password, $database) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8mb4", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            // Uso de conexão persistente foi recomendado pelo Phind mas pode ser perigoso e deve ser usado com cautela, mas deixarei aqui a ideia para implementações futuras caso necessárias
            // PDO::ATTR_PERSISTENT => true 
        ]);
        return $conn;
    } catch(PDOException $e) {
        return $e->getMessage();
    }
}

// Conecta o banco de dados
$connection = conectarBancoDeDados($servername, $username, $password, $database);

// Verifica se a conexão foi estabelecida com sucesso
if ($connection instanceof PDO) {
    echo "Conexão bem sucedida!";
} else {
    echo "Erro: " . $connection;
}