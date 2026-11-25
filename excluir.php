<?php

require_once "produtoDAO.php";


$id = $_POST['id'];

// Validação de dados
if(!$id){
    exit("Campo sem resposta");
}

$produtoDAO = new ProdutoDAO();

$produtoDAO->excluirPorId($id);

header("Location: index.php");
exit()
?>