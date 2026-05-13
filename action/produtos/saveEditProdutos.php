<?php
    include_once('../../includes/conexao.php');

    if(isset($_POST['update'])) {

        $idprodutos = $_POST['idprodutos'];
        $nomeProduto = $_POST['nomeProduto'];
        $precoCusto = $_POST['precoCusto'];
        $precoVenda = $_POST['precoVenda'];
        $fornecedor = $_POST['fornecedor'];
        $qtdProduto = $_POST['qtdProduto'];
        $qtdProdutoMinimo = $_POST['qtdProdutoMinimo'];

        $sqlUpdate = "UPDATE produtos SET nomeProduto='$nomeProduto',precoCusto='$precoCusto',precoVenda='$precoVenda',fornecedor='$fornecedor',qtdProduto='$qtdProduto',qtdProdutoMinimo='$qtdProdutoMinimo' WHERE idprodutos='$idprodutos'";

        $result = $conexao->query($sqlUpdate);
    }
    header('location: ../../pages/produtos.php');


?>