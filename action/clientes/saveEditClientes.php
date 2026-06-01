<?php
    include_once('../../includes/conexao.php');

    if(isset($_POST['update'])) {

        $idclientes = $_POST['idclientes'];
        $nomeCliente = $_POST['nomeCliente'];
        $valorPeca = $_POST['valorPeca'];
        $aparelho = $_POST['aparelho'];
        $valorMaoObra = $_POST['valorMaoObra'];
        $contato = $_POST['contato'];
        $problema = $_POST['problema'];

        $sqlUpdate = "UPDATE clientes SET nomeCliente='$nomeCliente', valorPeca='$valorPeca',aparelho='$aparelho',valorMaoObra='$valorMaoObra',contato='$contato' WHERE idclientes='$idclientes'";

        $result = $conexao->query($sqlUpdate);

        
    }

    header('location: /juninCell/pages/clientes.php');

?>