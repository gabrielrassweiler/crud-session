<?php

include_once 'home.php';

?>

<div class="col-sm-6" style="margin-top: 20px; margin-left: 26%">
    <form method="POST" action="../actions/cadastrar.php">
        <label for="nome"><b>Nome</b></label>
        <input type="text" placeholder="Nome do produto" class="form-control" name="nome" id="nome" required>
        <label for="valor"><b>Valor</b></label>
        <input type="text" placeholder="Valor do produto" class="form-control" name="valor" id="valor" required>
        <label for="marca"><b>Marca</b></label>
        <input type="text" placeholder="Marca do produto" class="form-control" name="marca" id="marca" required>
        <label for="quantidade"><b>Quantidade</b></label>
        <input type="number" placeholder="Quantidade do produto" class="form-control" name="quantidade" id="quantidade" required>
        <br>
        <input type="submit" class="btn btn-success" value="Gravar" style="float: right; padding-top: 10px;">
    </form>
</div>