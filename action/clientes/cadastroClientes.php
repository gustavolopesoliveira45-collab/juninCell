<?php

    include ('../../includes/conexao.php');

    $nomeCliente = $_POST['nomeCliente'];
    $valorPeca = $_POST['valorPeca'];
    $aparelho = $_POST['aparelho'];
    $valorMaoObra = $_POST['valorMaoObra'];
    $contato = $_POST['contato'];
    $problema = $_POST['problema'];

    $sql = "INSERT INTO clientes (nomeCliente, valorPeca, aparelho, valorMaoObra, contato, problema) 
    VALUES ('$nomeCliente', '$valorPeca', '$aparelho', '$valorMaoObra', '$contato', '$problema')";

    if ($conexao->query($sql) === TRUE) {
        header('location: /juninCell/pages/clientes.php');
    }else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
    $conexao->close();
?>