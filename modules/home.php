<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    session_destroy();
    echo "<script language='javascript' type='text/javascript'>alert('Você precisa se autenticar!'); window.location.href='../index.php';</script>";
}
if (isset($_GET['desconectar'])) {
    header('Location: ../index.php');
    session_destroy();
}

?>

<head>
    <title>Controle de Estoque</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
</head>
<body>
    <hr style="margin-top: 50px; background-color:lightgray">
    <div style="margin-left: 40%">
        <div style="margin: 30px 0 30px 105px" class="col-sm-12">
            <?php echo "<h3>Seja bem-vindo</h3>" ?>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item"><?php echo "<a href='home.php'>Home</a>" ?></li>
                <li class="list-group-item">Produtos</li>
                <li class="list-group-item" style="padding-left: 40px;">
                    <?php echo "<a href='cadastrar.php'>Cadastrar</a>" ?>
                </li>
                <li class="list-group-item" style="padding-left: 40px;">
                    <?php echo "<a href='visualizar.php'>Visualizar</a>" ?>
                </li>
                <li class="list-group-item">
                    <?php echo "<a href=\"?desconectar=true\"><font color=\"#f20808\">Desconectar</font></a>" ?>
                </li>
            </ul>
        </div>
    </div>
</body>