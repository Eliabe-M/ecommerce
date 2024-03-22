<!-- Classe para produto, contendo: sku, nome, preco, estoque, urlimagem e método para validação do produto-->
<?php
class Product{
    private $nome;
    private $tipo;
    private $sku;
    private $preco;
    private $estoque;
    private $urlImagem;
    public function __construct($sku, $nome, $preco, $estoque, $urlImagem, $tipo){
        $this->sku = $sku;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->urlImagem = $urlImagem;
        $this->tipo = $tipo;
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $value){
        $this->$atributo = $value;
        return $this;
    }
}