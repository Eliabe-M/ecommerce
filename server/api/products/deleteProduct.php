<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/db.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/dbService.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/src/models/product.php');
function deleteProduct($id_produto) {
    $conexao = new Ecommerce\Conexao();
    $dbService = new DbService($conexao);
    $dbService->deleteDB('produtos', 'id_produto', $id_produto);
}
?>