<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/fontawesome/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        include('../includes/menu.php');
    ?>
    
    <div class="container-conteudo">
        <div class="container-movimentacao">
            <div class="header-movimentacao">
                <div class="movimentacao-select">
                    <div class="movimentacao-option">
                        <a href="">
                            <span><i class="fa-solid fa-arrow-down"></i></span>
                            <span>Entrada</span>
                        </a>
                    </div>
                    <div class="movimentacao-option">
                        <a href="">
                            <span><i class="fa-solid fa-arrow-up"></i></span>
                            <span>Saida</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-movimentacao">
                <div class="formulario-movimentacao">
                    <form action="" method="">
                        <div class="input-grupo">
                            <div class="input">
                            <input type="search" name="idprodutos" placeholder="Pesquisar Produto">
                            </div>
                            <div class="input">
                                <input type="number" name="qtdMovimentacao" placeholder="Quantidade">
                            </div>
                        </div>
                        <div class="input-grupo">
                            <div class="input">
                                <select name="" id="">
                                    <option value="1">dasdasd</option>
                                    <option value="2">2132312</option>
                                </select>
                            </div>
                            <div class="input">
                                <input type="datetime-local" name="horario" placeholder="Data e Horario">
                            </div>
                        </div>
                        <div class="button-container">
                            <div class="button-movimentacao">
                                <button><i class="fa-solid fa-floppy-disk"></i>Salvar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
</html>