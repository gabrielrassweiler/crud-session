<?php
    // Cria conexão com o banco de dados
    include_once 'conexao.php';

    session_start();
    
    if (!isset($_SESSION['usuario'])) {
        session_destroy();
        echo "<script>alert('Você precisa se autenticar!'); window.location.href='../index.php';</script>";
    }

    // Pega os dados enviados da tela de login
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $query = "select * from `pessoas` where `nome` = '$login' and `senha` = '$senha'";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();

    if (count($resultado)) {
        session_start();
        $_SESSION['usuario'] = $resultado[0]['nome'];
        header('Location: ../modules/home.php');
    } else {
        echo "<script language='javascript' type='text/javascript'>alert('Login e/ou Senha Incorretos!'); window.location.href='../index.php';</script>";
    }
?>