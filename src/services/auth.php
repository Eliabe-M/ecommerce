<!-- Lógica para verificar se o usuário pode entrar, vai ter que consumir a api de buscar usuário pelo email e verificar o hash da senha
se tudo der certo ele cria uma nova sessão para o usuário-->

<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../views/views_login.php");
    exit();
}
?>