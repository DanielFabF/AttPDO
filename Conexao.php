<?php

class Conexao{
    // IP do Banco
    private string $servidor = 'localhost';
    // Nome da DataBase
    private string $banco = 'aula_pdo';
    // usuario para fazer login no banco
    private string $usuario = 'root';
    // Senha para fazer login no banco
    private string $senha = '';

    //Método de Conexão
    public function conectar(){
        // Configuração Padrão de Banco MySQL e MariaDB
        $dns = "mysql:host=$this->servidor;dbname=$this->banco;charset=utf8mb4";

        //Criando Objeto da classe PDO
        $conexao = new PDO($dns, $this->usuario, $this->senha, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        // Retorna o objeto da conexão
        return $conexao;
    }
}


?>