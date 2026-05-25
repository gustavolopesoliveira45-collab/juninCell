<?php
    include('../../includes/conexao.php');

    $idprodutos = $_GET['idprodutos'];

    $sql = "UPDATE produtos SET status = 'inativo' WHERE idprodutos = '$idprodutos'";

    $conexao->query($sql);

    header("Location: /juninCell/pages/produtos.php");

?>