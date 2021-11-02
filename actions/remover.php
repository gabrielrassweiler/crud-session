<?php

include_once 'conexao.php';

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