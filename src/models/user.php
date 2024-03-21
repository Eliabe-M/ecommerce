<!-- Classe do usuário contendo o senha, email, nome, função para criar hash da senha, getSenha, getEmail-->

<?php

class User{
    private $nome;
    private $email;
    private $password;

    public function __construct($nome,$email, $password){
        $this->nome = $nome;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function __get($atributo){
        return $this->$atributo;
    }

    public function validatePassword($password){
        return password_verify($password, $this->password);
    }
}