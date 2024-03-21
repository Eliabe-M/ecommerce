<!-- Lógica para logar o usuário com session-->

<?php
require_once ('../../server/api/users/read.php');
require_once ('../models/user.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = readUser($email);
    if ($user && password_verify($password, $user['senha'])) {
        session_start();
        $_SESSION['user'] = $user;
        header("Location: ../../public/index.php");
        exit();
    } else {
        echo "Credenciais inválidas. Por favor, tente novamente.";
    }
}
?>