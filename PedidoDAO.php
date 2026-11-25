<?php

require_once "Conexao.php";

class PedidoDAO{
    // Cria um atributo private da conexão
    private $conexao;

    public function __construct(){
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    }

    public function cadastrar($idProduto, $quantidade){
        // Cria o comando insert no banco
        $sqlInsert = "INSERT INTO pedidos
        (produto_id,quantidade)
        VALUES (:idProduto, :quantidade)";

        // Prepara a execução do comando SQL
        $comandoInsert = $this->conexao->prepare($sqlInsert);

        // Executa o comando passando os valores
        $comandoInsert->execute([
            "idProduto" => $idProduto,
            "quantidade" => $quantidade
        ]);
    }

   
}


?>