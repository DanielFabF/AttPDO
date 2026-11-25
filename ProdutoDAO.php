<?php

require_once "Conexao.php";

class ProdutoDAO{
    // Cria um atributo private da conexão
    private $conexao;

    public function __construct(){
        $banco = new Conexao();
        $this->conexao = $banco->conectar();
    }

    //Método de listar todos os dados do banco
    public function listar(){
        //Select no banco de dados
        $sql = "SELECT * FROM produtos";

        //Chamando um método da classe PDO
        $comando = $this->conexao->query($sql);

        //Retorna a listagem completa em formatode array
        return $comando->fetchALL();
    }

    public function cadastrar($nome, $preco, $quantidade){
        // Cria o comando insert no banco
        $sqlInsert = "INSERT INTO produtos
        (nome, preco, quantidade)
        VALUES (:nome, :preco, :quantidade)";

        // Prepara a execução do comando SQL
        $comandoInsert = $this->conexao->prepare($sqlInsert);

        // Executa o comando passando os valores
        $comandoInsert->execute([
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        ]);
    }

    // Método para listar um item pelo id
    public function buscarPorID($id){
        $sql = "SELECT * FROM produtos WHERE id = :id";

        $comandoID = $this->conexao->prepare($sql);

        $comandoID->execute([
            "id" => $id
        ]);

        return $comandoID->fetch();
    }

    // Método de atualizar produto
    public function atualizarProduto($id, $nome, $preco, $quantidade){
        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";

        $comando = $this->conexao->prepare($sql);

        $comando->execute([
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade,
            "id" => $id
        ]);
    }


    // Método de excluir produto
    public function excluirPorID($id){
        $sql = "DELETE FROM produtos WHERE id = :id";

        $comando = $this->conexao->prepare($sql);

        $comando->execute([
            "id" => $id
        ]);
    }
}


?>