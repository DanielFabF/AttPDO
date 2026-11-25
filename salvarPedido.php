<?php
require_once "pedidoDAO.php";

$produtoID = $_POST['produto_id'];
$quantidade = $_POST['quantidade'];

if(!$produtoID || $quantidade < 0){
    exit('Alguns campos não foram prenchidos');
}

$pedidoDAO = new PedidoDAO();

$pedidoDAO->cadastrar($produtoID, $quantidade)


?>