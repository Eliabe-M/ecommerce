<!-- Lógica para deslogar o usuário com session-->

<?php
session_start();
$_SESSION = array(); // Usado para limpar os dados da sessão.
session_destroy();
header("Location: ../views/views_login.php");
exit();
