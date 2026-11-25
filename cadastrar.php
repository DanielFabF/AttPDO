<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo Produto</title>
</head>
<body>
    <h1>Cadastrar Produto</h1>
    <form action="salvar.php" method="POST">
        <label>Nome: </label>
        <input type="text" name="nome" required>

        <label>Preço: </label>
        <input type="number" name="preco" required>

        <label>Quantidade: </label>
        <input type="number" name="quantidade">

        <button type="submit">Cadastrar</button>
    </form>

    <a href="index.php">Página de Listagem</a>
</body>
</html>