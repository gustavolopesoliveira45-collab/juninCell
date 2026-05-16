<?php
    $pdo = new PDO('mysql:host=localhost;dbname=junincell', 'root', 'gust4v00507', [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);

    $prepare = $pdo->prepare("select idprodutos, nomeProduto from produtos where nomeProduto like :nomeProduto");
    $prepare->execute([
        'nomeProduto' => $_GET['book'] . '%'
    ]);

    $books = $prepare->fetchAll();

    echo json_encode($books);
?>