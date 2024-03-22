<!-- Aqui você vai colocar um método para pegar as informações do usuário pelo email-->
<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/db.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/dbService.php');
require_once ($_SERVER['DOCUMENT_ROOT'] . '/projeto/ecommerce/src/models/user.php');
function readUser($email){
    $conexao = new Ecommerce\Conexao();
    $userService = new DbService($conexao);
    return $userService->getByAtributeDB('usuarios', 'email', $email);
}