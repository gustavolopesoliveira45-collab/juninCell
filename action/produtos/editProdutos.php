<?php

    include ('../../includes/conexao.php');

    if(!empty($_GET['idprodutos'])) {

        $idprodutos = $_GET['idprodutos'];

        $sqlSelect = "SELECT * FROM produtos WHERE idprodutos = $idprodutos";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0) {
        
            while($user_data = mysqli_fetch_assoc($result)) {

                $nomeProduto = $user_data['nomeProduto'];
                $precoCusto = $user_data['precoCusto'];
                $precoVenda = $user_data['precoVenda'];
                $fornecedor = $user_data['fornecedor'];
                $qtdProduto = $user_data['qtdProduto'];
                $qtdProdutoMinimo = $user_data['qtdProdutoMinimo'];

            }
        } else {
            header('location: produtos.php');
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link href="../../assets/fontawesome/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Senai</title>
</head>
<body class="background">
    <?php
        include('../../includes/menu.php');
    ?>

    <div class="main-produtos">
        <div class="produtos-container">
            <div class="header-produtos">
                <div class="produtos">
                    <span class="icon-produtos"><i class="fa-solid fa-cart-shopping"></i></span>
                    <span class="text-produtos">Alterar Produto</span>
                </div>
                <div class="addProduto">
                    <a href="../../pages/produtos.php">Voltar</a>
                </div>
            </div>
            <hr>
            <div class="formulario-container">
                <form action="../../action/produtos/saveEditProdutos.php" method="post">
                    <div class="formulario">
                        <div class="input-esquerdo">
                            <div class="input">
                                <label for="nomeProduto">Nome do Produto</label>
                                <input type="text" id="nomeProduto" name="nomeProduto" placeholder="Ex: Capa Iphone 13" value="<?php echo $nomeProduto?>">
                            </div>
                            <div class="input">
                                <label for="precoCusto">Preço de Custo</label>
                                <input type="number" id="precoCusto" name="precoCusto" placeholder="Ex: R$ 9,99" value="<?php echo $precoCusto?>">
                            </div>
                            <div class="input">
                                <label for="precoVenda">Preço de Venda</label>
                                <input type="number" id="precoVenda" name="precoVenda" placeholder="Ex: R$ 15,99" value="<?php echo $precoVenda?>">
                            </div>
                        </div>
                        <div class="input-direito">
                            <div class="input">
                                <label for="fornecedor">Fornecedor</label>
                                <input type="text" id="fornecedor" name="fornecedor" placeholder="Ex: Seu zé" value="<?php echo $fornecedor?>">
                            </div>
                            <div class="input">
                                <label for="qtdProduto">Quantidade</label>
                                <input type="number" id="qtdProduto" name="qtdProduto" placeholder="Ex: 25 Unidades" value="<?php echo $qtdProduto?>">
                            </div>
                            <div class="input">
                                <label for="qtdProdutoMinimo">Quantidade Minima</label>
                                <input type="number" id="qtdProdutoMinimo" name="qtdProdutoMinimo" placeholder="Ex: 5 unidades" value="<?php echo $qtdProdutoMinimo?>">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="idprodutos" value="<?php echo $idprodutos ?>">
                    <div class="button-adicionar-produto">
                        <button name='update'>Alterar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>