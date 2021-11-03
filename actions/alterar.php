<?php

include_once 'conexao.php';

session_start();

if (!isset($_SESSION['usuario'])) {
    session_destroy();
    echo "<script>alert('Você precisa se autenticar!'); window.location.href='../index.php';</script>";
}

$query = "select * from `produtos` where `id` = {$_GET['id']}";

$stmt = $conn->prepare($query);
$stmt->execute();
$produto = $stmt->fetchAll();

if ($_POST) {
    $queryUpdate = "update `produtos` set `nome` = '{$_POST['nome']}', `valor` = {$_POST['valor']}, `marca` = '{$_POST['marca']}', `quantidade` = {$_POST['quantidade']} where `id` = {$_GET['id']}";

    $stmt = $conn->prepare($queryUpdate);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    
    if (!count($resultado)) {
        echo "<script>alert('Registro alterado com sucesso!'); window.location.href='../modules/visualizar.php';</script>";
    } else {
        echo "<script>alert('Erro ao alterar produto!'); window.location.href='../modules/visualizar.php';</script>";
    }
}

?>

<head>
    <title>CRUD</title>
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
                <li class="list-group-item"><?php echo "<a href='../modules/home.php'>Home</a>" ?></li>
                <li class="list-group-item">Produtos</li>
                <li class="list-group-item" style="padding-left: 40px;">
                    <?php echo "<a href='../modules/cadastrar.php'>Cadastrar</a>" ?>
                </li>
                <li class="list-group-item" style="padding-left: 40px;">
                    <?php echo "<a href='../modules/visualizar.php'>Visualizar</a>" ?>
                </li>
                <li class="list-group-item">
                    <?php echo "<a href=\"?desconectar=true\"><font color=\"#f20808\">Desconectar</font></a>" ?>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-sm-6" style="margin-top: 20px; margin-left: 26%">
    <form method="POST">
        <label for="nome"><b>Nome</b></label>
        <input type="text" placeholder="Nome do produto" class="form-control" name="nome" id="nome" value="<?php echo $produto[0]['nome']; ?>" required>
        <label for="valor"><b>Valor</b></label>
        <input type="text" placeholder="Valor do produto" class="form-control" name="valor" id="valor" value="<?php echo $produto[0]['valor']; ?>"  required>
        <label for="marca"><b>Marca</b></label>
        <input type="text" placeholder="Marca do produto" class="form-control" name="marca" id="marca" value="<?php echo $produto[0]['marca']; ?>"  required>
        <label for="quantidade"><b>Quantidade</b></label>
        <input type="number" placeholder="Quantidade do produto" class="form-control" name="quantidade" id="quantidade" value="<?php echo $produto[0]['quantidade']; ?>"  required>
        <br>
        <input type="submit" class="btn btn-success" value="Alterar" style="float: right; padding-top: 10px;">
    </form>
</div>
</body>

