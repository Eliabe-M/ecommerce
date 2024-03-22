<!-- Antes do produto vir para ca, você tem quere verificar se as informações estão corretas -->

<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/db.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/dbService.php');
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/src/models/product.php');

function createProduct($sku, $nome, $preco, $estoque, $urlImagem, $tipo) {
    $product = new Product($sku, $nome, $preco, $estoque, $urlImagem, $tipo);
    $conexao = new Ecommerce\Conexao();
    $dbService = new DBService($conexao);
    $fields = ['sku', 'nome', 'preco', 'estoque', 'id_tipo','url_imagem'];
    $values = [$product->sku, $product->nome, $product->preco, $product->estoque, $product->tipo, $product->urlImagem];
    $dbService->createDB('produtos', $fields, $values);
}
?>