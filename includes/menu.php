<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/fontawesome/css/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Senai</title>
</head>
<body class="background">
    <?php
        $paginaAtual = basename($_SERVER['PHP_SELF'])
    ?>
  <nav class="menu-lateral">
    <ul>
        <li class="item-menu <?= ($paginaAtual == '../pages/index.php') ? 'ativo' : '' ?>">
            <a href="../pages/index.php">
                <span class="icon"><i class="fa-solid fa-chart-column"></i></span>
                <span class="link">Dashboard</span>
            </a>
        </li>

        <li class="item-menu <?= ($paginaAtual == '../pages/movimentacao.php') ? 'ativo' : '' ?>">
            <a href="../pages/movimentacao.php">
                <span class="icon"><i class="fa-solid fa-file-invoice-dollar"></i></span>
                <span class="link">Movimentação</span>
            </a>
        </li>

        <li class="item-menu <?= ($paginaAtual == '../pages/produtos.php') ? 'ativo' : '' ?>">
            <a href="../pages/produtos.php">
                <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
                <span class="link">Produtos</span>
            </a>
        </li>

        <li class="item-menu <?= ($paginaAtual == '../pages/clientes.php') ? 'ativo' : '' ?>">
            <a href="../pages/clientes.php">
                <span class="icon"><i class="fa-solid fa-calendar"></i></span>
                <span class="link">Clientes</span>
            </a>
        </li>

        <li class="item-menu <?= ($paginaAtual == '../pages/historico.php') ? 'ativo' : '' ?>">
            <a href="../pages/historico.php">
                <span class="icon"><i class="fa-solid fa-clock-rotate-left"></i></span>
                <span class="link">Historico</span>
            </a>
        </li>
    </ul>
  </nav>
</body>
</html>