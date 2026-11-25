<?php
    require_once "ProdutoDAO.php";

    $produtoDAO = new ProdutoDAO();
    
    $arrayProdutos = $produtoDAO->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrarPedido</title>
</head>
<body>
    <h1>Cadastrar Pedido</h1>
    <form action="salvarPedido.php" method="POST">
        <label for="">Selecione o Produto</label>
        <select name="produto_id">
            <option value="" selected disabled>Selecione...</option>

            <?php
             foreach($arrayProdutos as $produto){
            ?>
            <option value="<?=$produto['id']?>"><?=$produto['nome']?></option>
            <?php
             }
            ?>
        </select><br>
        <label for="">Quanridade produto</label>
        <input type="number" name="quantidade">
             <br>
             
        <button type="submit">Salvar</button>
    </form>
</body>
</html>