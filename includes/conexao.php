<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'gust4v00507';
    $dbName = 'junincell';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno){
        die("erro na conexao".$conexao->connect_error);
    }



?>