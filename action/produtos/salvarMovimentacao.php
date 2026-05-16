<?php

    include ('../../includes/conexao.php');

    if (!isset($_POST['idprodutos']) || empty($_POST['idprodutos'])) {
        die("Erro: O ID do produto não foi enviado ou está vazio.");
    }

    $idprodutos = intval($_POST['idprodutos']);
    $qtdMovimentacao = intval($_POST['qtdMovimentacao']);
    $motivo = $_POST['motivo'];
    $horario = $_POST['horario'];
    $tipo = $_POST['tipo'];

    $sqlProduto = "SELECT * FROM produtos WHERE idprodutos = $idprodutos";
    $result = $conexao->query($sqlProduto);

    if ($result->num_rows === 0) {
        die("Erro: Produto com o ID $idprodutos não foi encontrado no banco de dados.");
    }

    $produto = $result->fetch_assoc();

    $estoqueAtual = intval($produto['qtdProduto']);

    if($tipo == "entrada") {
        $novoEstoque = $estoqueAtual + $qtdMovimentacao;
    } else {
        $novoEstoque = $estoqueAtual - $qtdMovimentacao; 
    }

    $sqlUpdate = "UPDATE produtos SET qtdProduto = $novoEstoque WHERE idprodutos = $idprodutos";
    $conexao->query($sqlUpdate);

    $sqlHistorico = "INSERT INTO movimentacao (idprodutos, tipo, qtdMovimentacao, horario, motivo) VALUES ('$idprodutos', '$tipo', '$qtdMovimentacao', '$horario', '$motivo')";

    if (!$conexao->query($sqlHistorico)) {
        die("Erro ao salvar histórico: " . $conexao->error);
    }

    header("Location: /senai/pages/movimentacao.php");
    exit();

?>
