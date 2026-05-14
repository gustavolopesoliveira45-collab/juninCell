
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
        <div class="container-cadastro">
            <div class="header-cadastro">
                <div class="produtos">
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                    <span>Cadastrar Produto</span>
                </div>
                <div class="addProduto">
                    <a href="../pages/produtos.php">Voltar</a>
                </div>
            </div>
            <hr>
            <div class="formulario">
                <form action="../action/produtos/cadastroProdutos.php" method="post">
                    <div class="input-container">
                        <div class="input-grupo">
                            <div class="input">
                                <label for="nomeProduto">Nome do Produto</label>
                                <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Ex: Capa Iphone 13">
                            </div>
                            <div class="input">
                                <label for="precoCusto">Preço de Custo</label>
                                <input type="number" id="precoCusto" name="precoCusto" placeholder="Ex: R$ 9,99">
                            </div>
                            <div class="input">
                                <label for="precoVenda">Preço de Venda</label>
                                <input type="number" id="precoVenda" name="precoVenda" placeholder="Ex: R$ 15,99">
                            </div>
                        </div>
                        <div class="input-grupo">
                            <div class="input">
                                <label for="fornecedor">Fornecedor</label>
                                <input type="text" id="fornecedor" name="fornecedor" placeholder="Ex: Seu zé">
                            </div>
                            <div class="input">
                                <label for="qtdProduto">Quantidade</label>
                                <input type="number" id="qtdProduto" name="qtdProduto" placeholder="Ex: 25 Unidades">
                            </div>
                        </div>
                    </div>
                    <div class="button-adicionar">
                        <button name='submit'>Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>