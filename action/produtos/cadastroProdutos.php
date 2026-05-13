<?php

    include ('../../includes/conexao.php');

    $nomeProduto = $_POST['nomeProduto'];
    $precoCusto = $_POST['precoCusto'];
    $precoVenda = $_POST['precoVenda'];
    $fornecedor = $_POST['fornecedor'];
    $qtdProduto = $_POST['qtdProduto'];
    $qtdProdutoMinimo = $_POST['qtdProdutoMinimo'];

    $sql = "INSERT INTO produtos (nomeProduto, precoCusto, precoVenda, fornecedor, qtdProduto, qtdProdutoMinimo) 
    VALUES ('$nomeProduto', '$precoCusto', '$precoVenda', '$fornecedor', '$qtdProduto', '$qtdProdutoMinimo')";

    if ($conexao->query($sql) === TRUE) {
        header('location: ../../pages/produtos.php');
    }else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
    $conexao->close();
?>