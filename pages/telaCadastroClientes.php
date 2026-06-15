<?php
    include('../includes/menu.php');
    include('../includes/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/juninCell/assets/css/style.css">
    <link href="/juninCell/assets/fontawesome/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Senai</title>
</head>
<body class="background">

    <div class="container-conteudo">
        <div class="container-cadastro">
            <div class="formulario">
                <div class="header-cadastro">
                    <div class="header-text">
                        <span><i class="fa-solid fa-user"></i></span>
                        <span>Cadastrar Cliente</span>
                    </div>
                    <div class="voltar">
                        <a href="../pages/clientes.php">Voltar</a>
                    </div>
                </div>
                <div class="form">
                    <form action="/juninCell/action/clientes/cadastroClientes.php" method="post">
                        <div class="input-grupo">
                            <div class="input">
                                <label for="nomeCliente">Nome</label>
                                <input type="text" name="nomeCliente" placeholder="Ex: Gustavo Lopes" id="nomeCliente">
                            </div>
                            <div class="input">
                                <label for="aparelho">Aparelho</label>
                                <input type="text" name="aparelho" placeholder="Ex: Iphone 13 Pro Max" id="aparelho">
                            </div>
                        </div>
                        <div class="input-grupo">
                            <div class="input">
                                <label for="valorPeca">Valor da Peça</label>
                                <input type="number" name="valorPeca" placeholder="Ex: R$100,00" id="valorPeca">
                            </div>
                            <div class="input">
                                <label for="valorMaoObra">Valor Mão de Obra</label>
                                <input type="number" name="valorMaoObra" placeholder="Ex: R$50,00" id="valorMaoObra">
                            </div>
                            <div class="input">
                                <label for="contato">Contato</label>
                                <input type="text" name="contato" placeholder="Ex: 21 97615-8349" id="contato">
                            </div>
                        </div>
                        <div class="input-problema">
                            <label for="problema">Problema</label>
                            <input type="text" name="problema" placeholder="Ex: Celular não está carregando" id="problema">
                        </div>
                        <div class="container-button">
                            <button name="submit">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>