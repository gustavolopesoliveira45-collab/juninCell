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
        include('../includes/conexao.php');
        

        $sqlSelect = "SELECT COUNT(*) AS idprodutos FROM produtos";

        $resultado = $conexao->query($sqlSelect);

        $dados = $resultado->fetch_assoc();

        $totalProdutos = $dados['idprodutos'];

        $sql = "SELECT * FROM produtos ORDER BY idprodutos DESC";

        $result = $conexao->query($sql);

        $sqlStatus = "SELECT qtdProduto FROM produtos";

    ?>

    <div class="container-conteudo">
        <div class="container-informacoes">
            <div class="box-informacoes">
                <div class="informacoes-name">
                    <span class="informacoes-text">Total de Produtos</span>
                    <div class="informacoes-total">
                        <span class="total-text"> <?php echo $totalProdutos ?></span>
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
            <hr>
            <div class="lista-produtos">
                <table class="tabela">
                    <thead>
                        <tr>
                            <th scope="col">Codigo</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Fornecedor</th>
                            <th scope="col">Preço de Custo</th>
                            <th scope="col">Preço de Venda</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                    echo "<td>".$user_data['idprodutos']."</td>";
                                    echo "<td>".$user_data['nomeProduto']."</td>";
                                    echo "<td>".$user_data['fornecedor']."</td>";
                                    echo "<td>R$ ".$user_data['precoCusto']."</td>";
                                    echo "<td>R$ ".$user_data['precoVenda']."</td>";
                                    echo "<td>".$user_data['qtdProduto']."</td>";
                                    
                                        $quantidade = $user_data['qtdProduto']; 

                                        if($quantidade > 20) {
                                            $status = '<span class="estavel">Estável</span>';
                                        } else if($quantidade >= 10) {
                                            $status = '<span class="atencao">Atenção</span>';
                                        } else {
                                            $status = '<span class="critico">Crítico</span>';
                                        } 

                                    echo "<td>" . $status . "</td>";
                                    echo "<td>
                                        <a class='btn btn-primary' href='../action/produtos/editProdutos.php?idprodutos=$user_data[idprodutos]'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                            <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                                            </svg>
                                        </a>

                                        <a class='btn btn-danger' href='../action/produtos/deleteProdutos.php?idprodutos=$user_data[idprodutos]'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                                            </svg>
                                        </a>
                                    </td>";        
                                    
                                echo "</tr>";
                              }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>