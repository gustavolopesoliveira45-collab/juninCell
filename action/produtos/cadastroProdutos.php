<?php

    include ('../../includes/conexao.php');

    $nomeProduto = $_POST['nomeProduto'];
    $precoCusto = $_POST['precoCusto'];
    $precoVenda = $_POST['precoVenda'];
    $fornecedor = $_POST['fornecedor'];
    $qtdProduto = $_POST['qtdProduto'];

    $sql = "INSERT INTO produtos (nomeProduto, precoCusto, precoVenda, fornecedor, qtdProduto) 
    VALUES ('$nomeProduto', '$precoCusto', '$precoVenda', '$fornecedor', '$qtdProduto')";

    if ($conexao->query($sql) === TRUE) {
        header('location: ../../pages/produtos.php');
    }else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
    $conexao->close();
?>