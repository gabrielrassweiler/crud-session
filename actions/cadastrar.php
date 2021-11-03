<?php

include_once 'conexao.php';

session_start();

if (!isset($_SESSION['usuario'])) {
    session_destroy();
    echo "<script>alert('Você precisa se autenticar!'); window.location.href='../index.php';</script>";
}

// Captura valores do form
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$marca = $_POST['marca'];
$quantidade = $_POST['quantidade'];

$query = "insert into `produtos`(`nome`, `valor`, `marca`, `quantidade`) values ('{$nome}', {$valor}, '{$marca}', {$quantidade})";

$stmt = $conn->prepare($query);
$stmt->execute();
$resultado = $stmt->fetchAll();

if (!count($resultado)) {
    echo "<script>alert('Registro incluido com sucesso!'); window.location.href='../modules/home.php';</script>";
} else {
    echo "<script>alert('Erro ao inserir produto!'); window.location.href='../modules/home.php';</script>";
}

?>