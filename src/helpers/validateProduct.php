<?php
require_once ($_SERVER["DOCUMENT_ROOT"] . '/projeto/ecommerce/server/api/products/createProduct.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = $_POST['sku'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $tipo = $_POST['tipo'];
    $urlImagem = $_POST['urlImagem'];

    if (!empty($sku) && !empty($nome) && !empty($preco) && !empty($estoque) && !empty($urlImagem)) {
        if (!is_string($sku) || empty($sku)){
            echo "SKU inválido";
        }
        elseif (!is_string($nome) || empty($nome)){
            echo "Nome inválido";
        }
        elseif (!is_numeric($preco) || $preco <= 0){
            echo "Preço inválido";
        }
        elseif (!is_numeric($estoque) || $estoque <= 0){
            echo "Estoque inválido";
        }
        elseif ($tipo <= 0){
            echo "Tipo inválido";
        }
        elseif (!is_string($urlImagem) || empty($urlImagem) || !filter_var($urlImagem, FILTER_VALIDATE_URL)){
            echo "URL da imagem inválida";
        } else {
            try {
                createProduct($sku, $nome, $preco, $estoque, $urlImagem, $tipo);
            } catch (PDOException $e) {
                echo "Ocorreu um erro ao criar o produto: " . $e->getMessage();
            }
        }
    }
} else {
    header("Location: views_product.php");
    exit();
}
?>
