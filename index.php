<?php
    if (isset($_GET['desconectar'])) {
        session_destroy();
        header("Location: index.php");
    }
 
    if (!isset($_SESSION['usuario'])) {
        include 'login.php';
    } else {
        include 'sistema.php';
    }