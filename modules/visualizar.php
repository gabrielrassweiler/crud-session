<?php

include_once 'home.php';

?>

<div class="col-sm-8>" style="margin-left: 23%;margin-top: 20px">
    <table style="border: 1px solid lightgray">
        <thead>
            <tr>
                <th width="5%" style="text-align: center; border: 4px solid lightgray;">ID</th>
                <th width="25%" style="text-align: center; border: 4px solid lightgray;">Nome</th>
                <th width="20%" style="text-align: center; border: 4px solid lightgray;">Marca</th>
                <th width="8%" style="text-align: center; border: 4px solid lightgray;">Quantidade</th>
                <th width="10%" style="text-align: center; border: 4px solid lightgray;">Valor</th>
                <th width="10%" style="text-align: center; border: 4px solid lightgray;">Valor Total</th>
                <th width="15%" colspan="2" style="text-align: center; border: 4px solid lightgray;">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once '../actions/conexao.php';

                $query = "select * from `produtos` order by `id` desc";

                $stmt = $conn->prepare($query);
                $stmt->execute();
                $dados = $stmt->fetchAll();

                foreach ($dados as $produto) {
                    $valorTotal = $produto['quantidade'] * $produto['valor'];
                    echo "<tr style='border: 1px solid lightgray;'>";
                        echo "<td style='border: 1px solid lightgray;'>{$produto['id']}</td>";
                        echo "<td style='border: 1px solid lightgray;'>{$produto['nome']}</td>";
                        echo "<td style='border: 1px solid lightgray;'>{$produto['marca']}</td>";
                        echo "<td style='text-align: center; border: 1px solid lightgray;'>{$produto['quantidade']}</td>";
                        echo "<td style='text-align: center; border: 1px solid lightgray;'>{$produto['valor']}</td>";
                        echo "<td style='text-align: center; border: 1px solid lightgray;'>{$valorTotal}</td>";
                        echo "<td style='text-align: center; border: 1px solid lightgray;'><a href='../actions/alterar.php?id={$produto['id']}'><font color='#2a7f08'>Alterar</font></a></td>";
                        echo "<td style='text-align: center; border: 1px solid lightgray;'><a href='../actions/remover.php?id={$produto['id']}'><font color='#f20808'>Remover</font></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>