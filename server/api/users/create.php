<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/db.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/dbService.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/src/models/user.php');

function createUser($nome, $email, $password) {
    $newUser = new User($nome, $email, $password);
    $conexao = new Ecommerce\Conexao();
    $userService = new DbService($conexao);
    $userService->createDB('usuarios', ['nome', 'email', 'senha'], [$newUser->nome, $newUser->email, $newUser->password]);
}
?>
