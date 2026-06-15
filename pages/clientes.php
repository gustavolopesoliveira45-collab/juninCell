    <?php
        include('../includes/menu.php');
        include('../includes/conexao.php');

        
        $sqlClientesCount = "SELECT COUNT(*) as c FROM clientes";
        $resultClientesCount = $conexao->query($sqlClientesCount);

        $sqlClientesCount = $resultClientesCount->fetch_assoc();
        $clientesCount = $sqlClientesCount['c'];

        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $limit = 7;
        $pageInterval = 2;
        $offset = ($page - 1) * $limit;

        $pageNumber = ceil ($clientesCount / $limit);


        $sql = "SELECT * FROM clientes ORDER BY CASE WHEN status = 'ativo' THEN 1 ELSE 2 END, idclientes DESC LIMIT {$limit} OFFSET {$offset}";
        $result = $conexao->query($sql);

        
        
    
    ?>
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
    <div class="container-conteudo">
        <div class="container-produtos">
            <div class="tabela-container">
                <div class="header-tabela">
                    <div class="header-text">
                        <span class="icon-produtos"><i class="fa-solid fa-user"></i></span>
                        <select name="" id="">
                            <option value="">Clientes em Espera</option>
                            <option value="">Clientes Pensando</option>
                            <option value="">Clientes em Atendimento</option>
                            <option value="">Clientes Atendidos</option>
                            <option value="">Clientes que Negaram</option>
                        </select>
                    </div>
                    <div class="procurar-tabela">
                        <form action="" method="">
                            <input type="search" name="procurarCliente" placeholder="Procurar Cliente">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <div class="voltar">
                        <a href="/juninCell/pages/telaCadastroClientes.php">Adicionar</a>
                    </div>
                </div>
                <div class="lista-produtos">
                    <table class="tabela">
                        <thead>
                            <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Problema</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while ($user_data = mysqli_fetch_assoc($result)) {

                                    echo "<tr>";

                                        echo "<td>" . $user_data['idclientes'] . "</td>";
                                        echo "<td>" . $user_data['nomeCliente'] . "</td>";  

                                        echo "<td>" . $user_data['aparelho'] . "</td>";
                                        echo "<td> " . $user_data['contato'] . "</td>";
                                        
                                        $valorTotal = $user_data['valorPeca'] + $user_data['valorMaoObra'];

                                        echo "<td>R$ " . number_format($valorTotal, 2, ',', '.') . "</td>";
                                        echo "<td> " . $user_data['problema'] . "</td>";

                                        echo "<td>";

                                            echo "
                                            <a class='btn btn-primary' href='/juninCell/action/clientes/editClientes.php?idclientes={$user_data['idclientes']}'>
                                                <i class='fa-solid fa-pen'></i>
                                            </a>
                                            ";

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