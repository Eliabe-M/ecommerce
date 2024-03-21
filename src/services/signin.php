<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/api/users/create.php');
try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        createUser($nome, $email, $password);
    }
} catch (PDOException $e) {
    $errorMessage = "Ocorreu um erro ao criar o usuário: " . $e->getMessage();
}
?>