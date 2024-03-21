<!-- Classe para produto, contendo: sku, nome, valor, estoque, urlimagem e método para validação do produto-->

<?php
// Isso aqui é um protótipo, não foi testado ainda mas o Chat e o Phind diz estar funcional e sem erros
class Product{
    private $sku;
    private $nome;
    private $valor;
    private $estoque;
    private $urlImagem;

    public function __construct($sku, $nome, $valor, $estoque, $urlImagem){
        $this->sku = $sku;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->estoque = $estoque;
        $this->urlImagem = $urlImagem;
    }

public function __get($atributo){
    return $this->$atributo;
}

public function __set($atributo, $value){
    $this->$atributo = $value;
    return $this;
}

    public function validarProduto(){

        $erros = [];
        
        if (!is_string($this->sku) || empty($this->sku)){
            $erros[] = "SKU inválido";
        } 

        if(!is_string($this->nome) || empty($this->nome)){
            $erros[] = "Nome inválido";
        }

        if(!is_numeric($this->valor) || $this->valor <= 0){
            $erros[] = "Valor inválido";
        }

        if(!is_int($this->estoque) || $this->estoque <= 0){
            $erros[] = "Estoque inválido";
        }

        if(!is_string($this->urlImagem) || empty($this->urlImagem) || !filter_var($this->urlImagem, FILTER_VALIDATE_URL)){
            $erros[] = "URL da imagem inválida";
        }

        return $erros;
    }
}