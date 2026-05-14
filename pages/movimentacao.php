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
                <div class="header-text">
                    <span class="plus-icon"><i class="fa-solid fa-plus"></i></span>
                    <span>Nova Movimentação</span>
                </div>
                <div class="linha"></div>
            </div>
            <div class="main-movimentacao">
                <div class="formulario-movimentacao">
                    <form action="" method="">
                        <div class="input-container">
                            <div class="input-grupo">
                                <div class="input">
                                    <label for="idprodutos">Pesquisar Produto</label>
                                    <input type="search" name="idprodutos" id="idprodutos" placeholder="Ex: Capa iphone 13">
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
            
        </div>
    </div>


</body>
</html>