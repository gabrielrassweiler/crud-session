<?php
    // Cria conexão com o banco de dados
    $conn = new PDO(
        'mysql:host=localhost;dbname=desenvolvimentoweb1', 'root', ''
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>