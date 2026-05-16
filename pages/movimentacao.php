<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/senai/assets/css/style.css">
    <link href="/senai/assets/fontawesome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../includes/menu.php');
    include('../includes/conexao.php');

    $sql = "SELECT * FROM movimentacao ORDER BY idmovimentacao DESC";

    $result = $conexao->query($sql);



    ?>
    <div class="container-conteudo">
        <div class="container">
            <div class="container-movimentacao">
                <div class="header-movimentacao">
                    <div class="header-text">
                        <span class="plus-icon"><i class="fa-solid fa-plus"></i></span>
                        <span>Nova Movimentação</span>
                    </div>
                    <div class="linha"></div>
                </div>
                <div class="main-movimentacao">
                    <div class="formulario-movimentacao">
                        <form action="/senai/action/produtos/salvarMovimentacao.php" method="post">
                            <div class="input-container">
                                <div class="input-grupo">
                                    <div class="input">
                                        <label for="searchInput">Pesquisar Produto</label>
                                        <input type="search" id="searchInput" placeholder="Ex: Capa iphone 13"
                                            autocomplete="off">
                                        <input type="hidden" name="idprodutos" id="idprodutoSelecionado">
                                        <div id="autocomplete"></div>
                                    </div>
                                    <div class="input">
                                        <label for="idprodutos">Quantidade</label>
                                        <input type="number" name="qtdMovimentacao" placeholder="Ex: 10 unidades">
                                    </div>
                                </div>
                                <div class="input-grupo">
                                    <div class="input">
                                        <label for="idprodutos">Motivo</label>
                                        <input type="text" name="motivo" placeholder="Ex: Adicionando Produto">
                                    </div>
                                    <div class="input">
                                        <label for="idprodutos">Data e Hora</label>
                                        <input type="datetime-local" name="horario">
                                    </div>
                                </div>
                                <div class="input-select">
                                    <select name="tipo" id="tipo">
                                        <option hidden>Selecione o Tipo</option>
                                        <option value="entrada">Entrada</option>
                                        <option value="saida">Saida</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button-container">
                                <div class="button-adicionar">
                                    <button><i class="fa-solid fa-floppy-disk"></i>Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tabela-movimentacao">
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
                                <th scope="col">Horario</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Motivo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($user_data = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $user_data['horario'] . "</td>";
                                echo "<td>" . $user_data['idprodutos'] . "</td>";
                                echo "<td>" . $user_data['tipo'] . "</td>";
                                echo "<td>" . $user_data['qtdMovimentacao'] . "</td>";
                                echo "<td>" . $user_data['motivo'] . "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.11.0/axios.min.js"
        integrity="sha512-h9644v03pHqrIHThkvXhB2PJ8zf5E9IyVnrSfZg8Yj8k4RsO4zldcQc4Bi9iVLUCCsqNY0b4WXVV4UB+wbWENA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/underscore@1.13.8/underscore-umd-min.js"></script>
    <script src="/senai/assets/js/search.js"></script>
</body>

</html>