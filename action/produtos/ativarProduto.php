<?php

include("../../includes/conexao.php");

$id = $_GET['idprodutos'];

$sql = "UPDATE produtos SET status = 'ativo' WHERE idprodutos = '$id'";

$conexao->query($sql);

header("Location: ../../pages/produtos.php");

?>