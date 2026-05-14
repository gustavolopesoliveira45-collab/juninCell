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

    <!-- Botão hamburguer (visível só no mobile) -->
    <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Overlay escuro ao abrir o menu no mobile -->
    <div class="menu-overlay" id="menuOverlay"></div>

  <nav class="menu-lateral" id="menuLateral">
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

  <script>
    const toggle = document.getElementById('menuToggle');
    const menu   = document.getElementById('menuLateral');
    const overlay = document.getElementById('menuOverlay');

    function fecharMenu() {
        menu.classList.remove('aberto');
        overlay.classList.remove('ativo');
    }

    toggle.addEventListener('click', () => {
        const aberto = menu.classList.toggle('aberto');
        overlay.classList.toggle('ativo', aberto);
    });

    overlay.addEventListener('click', fecharMenu);

    // Fechar ao clicar em um link do menu (mobile)
    document.querySelectorAll('.item-menu a').forEach(link => {
        link.addEventListener('click', fecharMenu);
    });
  </script>
</body>
</html>
