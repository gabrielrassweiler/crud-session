<?php

include_once 'conexao.php';

session_start();

if (!isset($_SESSION['usuario'])) {
    session_destroy();
    echo "<script>alert('Você precisa se autenticar!'); window.location.href='../index.php';</script>";
}

$query = "delete from `produtos` where `id` = {$_GET['id']}";

$stmt = $conn->prepare($query);
$stmt->execute();
$resultado = $stmt->fetchAll();

if (!count($resultado)) {
    echo "<script>alert('Registro deletado com sucesso!'); window.location.href='../modules/visualizar.php';</script>";
} else {
    echo "<script>alert('Erro ao deletar produto!'); window.location.href='../modules/visualizar.php';</script>";
}
?>