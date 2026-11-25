<?php

require_once "ProdutoDAO.php";

// Cria um objeto da classe ProdutoDAO
$produto = new ProdutoDAO();

$informacoesProdutos = $produto->listar();


// echo "<pre>";
// var_dump($informacoesProdutos);
// echo "</pre>";


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações Produtos</title>
</head>
<body>
    <h1>Produtos Cadastrados</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Visualizar</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($informacoesProdutos as $produto){
            ?>
                <tr>
                    <td><?=$produto['id']?></td>
                    <td><?=$produto['nome']?></td>
                    <td><?=$produto['preco']?></td>
                    <td><?=$produto['quantidade']?></td>
                    <!-- Visualizar -->
                    <td><a href="visualizar.php?id=<?=$produto['id']?>">Visualizar</a></td>
                    <!-- Editar -->
                    <td><a href="editar.php?id=<?=$produto['id']?>">Editar</a></td>
                    <!-- Excluir -->
                    <td>
                        <form action="excluir.php" method="POST">
                            <input type="text" value="<?= $produto['id']?>" name="id" hidden>
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="cadastrar.php">Cadastrar novo produto</a>
    <br><br>
    <a href="cadastrarPedido.php">Cadastrar novo pedido</a>
</body>
</html>