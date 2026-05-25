<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/juninCell/assets/css/style.css">
    <link href="/juninCell/assets/fontawesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Senai</title>

</head>

<body class="background">
    <?php
    include('../includes/menu.php');
    include('../includes/conexao.php');

    
    $sqlProdutosCount = "SELECT COUNT(*) as c FROM produtos";
    $resultProdutosCount = $conexao->query($sqlProdutosCount);

    $sqlProdutosCount = $resultProdutosCount->fetch_assoc();
    $produtoCount = $sqlProdutosCount['c'];

    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $limit = 7;
    $pageInterval = 2;
    $offset = ($page - 1) * $limit;

    $pageNumber = ceil ($produtoCount / $limit);


    $sql = "SELECT * FROM produtos ORDER BY CASE WHEN status = 'ativo' THEN 1 ELSE 2 END, idprodutos DESC LIMIT {$limit} OFFSET {$offset}";
    $result = $conexao->query($sql);
    



    $sqlStatus = "SELECT qtdProduto FROM produtos";
    
    $sqlSelect = "SELECT COUNT(*) AS idprodutos FROM produtos";
    $resultado = $conexao->query($sqlSelect);
    $dados = $resultado->fetch_assoc();

    $totalProdutos = $dados['idprodutos'];
    ?>

    <div class="container-conteudo">
        <div class="container-produtos">
            <div class="container-informacoes">
                <div class="box-informacoes">
                    <div class="informacoes-name">
                        <span class="informacoes-text">Total de Produtos</span>
                        <div class="informacoes-total">
                            <span class="total-text"> <?= $produtoCount; ?> </span>
                            <span class="total-produtos"><i class="fa-solid fa-truck"></i></span>
                        </div>
                    </div>
                </div>
                <div class="box-informacoes">
                    <div class="informacoes-name">
                        <span class="informacoes-text">Total Baixo Estoque</span>
                        <div class="informacoes-total">
                            <span class="total-text"> <?php echo $totalProdutos ?></span>
                            <span class="total-baixo"><i class="fa-solid fa-triangle-exclamation"></i></span>
                        </div>
                    </div>
                </div>
                <div class="box-informacoes">
                    <div class="informacoes-name">
                        <span class="informacoes-text">Fora de Estoque</span>
                        <div class="informacoes-total">
                            <span class="total-text"> <?php echo $totalProdutos ?></span>
                            <span class="total-fora"><i class="fa-solid fa-exclamation"></i></span>
                        </div>
                    </div>
                </div>
                <div class="box-informacoes">
                    <div class="informacoes-name">
                        <span class="informacoes-text">Valor total</span>
                        <div class="informacoes-total">
                            <span class="total-text"> <?php echo $totalProdutos ?></span>
                            <span class="total-valor"><i class="fa-solid fa-money-bill"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tabela-container">
                <div class="header-produtos">
                    <div class="produtos">
                        <span class="icon-produtos"><i class="fa-solid fa-cart-shopping"></i></span>
                        <span class="text-produtos">Produtos</span>
                    </div>
                    <div class="procurarProduto">
                        <form action="" method="">
                            <input type="search" name="procurarProduto" placeholder="Procurar Produto">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="addProduto">
                        <a href="../pages/telaCadastroProdutos.php">Adicionar Produto</a>
                    </div>
                </div>
                <div class="lista-produtos">
                    <table class="tabela">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Status</th>
                                <th scope="col">Fornecedor</th>
                                <th scope="col">Preço de Custo</th>
                                <th scope="col">Preço de Venda</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Alerta</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($user_data = mysqli_fetch_assoc($result)) {

                                    echo "<tr>";

                                        echo "<td>" . $user_data['idprodutos'] . "</td>";
                                        echo "<td>" . $user_data['nomeProduto'] . "</td>";  
                                        echo "<td>";

                                        if($user_data['status'] == 'ativo') {
                                            echo "<span class='status-ativo'>Ativo</span>";
                                        } else {
                                            echo "<span class='status-inativo'>Inativo</span>";
                                        }

                                        echo "</td>";

                                        echo "<td>" . $user_data['fornecedor'] . "</td>";
                                        echo "<td>R$ " . $user_data['precoCusto'] . "</td>";
                                        echo "<td>R$ " . $user_data['precoVenda'] . "</td>";
                                        echo "<td>" . $user_data['qtdProduto'] . "</td>";

                                        $quantidade = $user_data['qtdProduto'];

                                        if ($quantidade > 20) {
                                            $status = '<span class="estavel">Estável</span>';
                                        } else if ($quantidade >= 10) {
                                            $status = '<span class="atencao">Atenção</span>';
                                        } else {
                                            $status = '<span class="critico">Crítico</span>';
                                        }

                                        echo "<td>$status</td>";

                                        echo "<td>";

                                            echo "
                                            <a class='btn btn-primary' href='../action/produtos/editProdutos.php?idprodutos={$user_data['idprodutos']}'>
                                                <i class='fa-solid fa-pen'></i>
                                            </a>
                                            ";

                                            echo "
                                            <a class='btn btn-danger' href='../action/produtos/deleteProdutos.php?idprodutos={$user_data['idprodutos']}'>
                                                <i class='bi bi-trash3-fill'></i>
                                            </a>
                                            ";

                                            if($user_data['status'] == 'ativo') {

                                                echo "
                                                <a class='btn btn-danger' href='../action/produtos/desativarProduto.php?idprodutos={$user_data['idprodutos']}' class='btn-desativar'>
                                                    <i class='fa-solid fa-ban'></i>
                                                </a>
                                                ";

                                            } else {

                                                echo 
                                                "<a class='btn btn-success' href='../action/produtos/ativarProduto.php?idprodutos={$user_data['idprodutos']}' class='btn-ativar'>
                                                    <i class='fa-solid fa-check'></i>
                                                </a>";
                                            }

                                        echo "</td>";

                                    echo "</tr>";
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
                <div class="paginacao-container">
                    <a href="?page=1" class="paginacao">
                        <
                    </a>
                    <?php 
                        $fistPage = max($page - $pageInterval, 1);
                        $lastPage = min($pageNumber, $page + $pageInterval);
                        for($p = $fistPage; $p <= $lastPage; $p++) {
                            if($p == $page) {
                                echo "<a class='paginacao primeiro'> {$p} </a>";
                            } else {
                                echo "<a href='?page={$p}' class='paginacao'>{$p}</a>";
                            }
                            
                        }
                    ?>
                    <a href="?page=<?php echo $pageNumber; ?>" class="paginacao">
                        >
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>