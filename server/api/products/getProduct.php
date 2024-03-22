<!-- Aqui vai ser necessário incluir uma lógica para pegar o produto pelo tipo de produto -->

<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/db.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/dbService.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/src/models/product.php');
function getProductByAttribute(){
    $conexao = new Ecommerce\Conexao();
    $dbService = new DBService($conexao);
    if (isset($_GET['id_produto'])) {
        $id_produto = $_GET['id_produto'];
        return $dbService->getByAtributeDB('produtos','id_produto', $id_produto);
    }
    if (isset($_GET['preco'])) { 
        $preco = $_GET['preco'];
        return $dbService->getByAtributeDB('produtos','preco', $preco);
    }
}
?>