<?php
    // Cria conexão com o banco de dados
    $conn = new PDO(
        'mysql:host=localhost;dbname=desenvolvimentoweb1', 'root', ''
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pega os dados enviados da tela de login
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $query = "select * from `pessoas` where `nome` = '$login' and `senha` = '$senha'";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();

    if (count($resultado)) {
        $_SESSION['usuario'] = $resultado[0]['nome'];
        echo 'Logado!';
    } else {
        echo 'Login ou senha incorretos!';
        echo '<a href="index.php">Voltar</a>';
    }
?>