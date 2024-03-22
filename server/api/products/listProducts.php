<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/db.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/dbService.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/src/models/product.php');
function listProducts(){
    $conexao = new Ecommerce\Conexao();
    $dbService = new DBService($conexao);
    return $dbService->readDB('todos_os_produtos');
}
?>