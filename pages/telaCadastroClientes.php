
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Senai</title>
</head>
<body class="background">
    <?php
        include('../includes/menu.php');
    ?>

    <div class="container-conteudo">
        <div class="produtos-container">
            <div class="header-produtos">
                <div class="produtos">
                    <span class="icon-produtos"><i class="fa-solid fa-cart-shopping"></i></span>
                    <span class="text-produtos">Adicionar Novo Cliente</span>
                </div>
                <div class="addProduto">
                    <a href="produtos.php">Voltar</a>
                </div>
            </div>
            <hr>
            <div class="formulario-container">
                <form action="../action/produtos/cadastroProdutos.php" method="post">
                    <div class="formulario">
                        <div class="input-esquerdo">
                            <div class="input">
                                <label for="nomeProduto">Nome do Cliente</label>
                                <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Ex: Capa Iphone 13">
                            </div>
                            <div class="input">
                                <label for="precoCusto">Numero de Telefone</label>
                                <input type="text" id="numeroCliente" name="precoCusto" placeholder="Ex: R$ 9,99">
                            </div>
                            <div class="input">
                                <label for="precoVenda">Celular do Cliente</label>
                                <input type="text" id="precoVenda" name="precoVenda" placeholder="Ex: R$ 15,99">
                            </div>
                        </div>
                    </div>
                    <div class="button-adicionar-produto">
                        <button name='submit'>Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>