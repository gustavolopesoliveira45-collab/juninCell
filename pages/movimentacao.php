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
        <div class="container-secao">
            <div class="header-secao">
                <span><i class="fa-solid fa-plus"></i></span>
                <span>Movimentação</span>
            </div>
            <div class="secao">
                <div class="secao-option">
                    <a href="">
                        <i class="fa-solid fa-arrow-down"></i>
                        Entrada
                    </a>
                </div>
                <div class="secao-option">
                    <a href="">
                        <i class="fa-solid fa-arrow-up"></i>
                        Saida
                    </a>
                </div>
            </div>
            <div class="formulario-movimentacao">
                <form action="" method="">
                    <div>
                        <div class="input">
                            <input type="text" name="" placeholder="Produto">
                        </div>
                        <div class="input">
                            <input type="text" name="qtdMovimentacao" placeholder="Quantidade">
                        </div>
                    </div>
                    <div>
                        <div class="input">
                            <input type="text" name="motivo" placeholder="Produto">
                        </div>
                        <div class="input">
                            <input type="text" name="data" placeholder="Produto">
                        </div>
                    </div>
                    <hr>
                    <div class="button-adicionar">
                        <button>Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>