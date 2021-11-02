<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
</head>
<body>
    <style>
        * {
            font-family: Arial;
        }
        .container {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        fieldset {
            border: 1px solid lightgray;
            padding: 15px 5px 10px 5px;
            border-radius: 10px;
            background-color: #f3f6f4;
        }
        h3 {
            text-align: center;
            padding-bottom: 10px;
            background-color: #f3f6f4;
            font-weight: bold;
        }
    </style>
    <div class="container">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form method="POST" action="actions/validaLogin.php" style="margin-top: 100px;">
            <fieldset>
                <h3>CRUD</h3>
                <div class="input-group">
                    <input type="text" placeholder="Login..." class="form-control" name="login" id="login" required>
                </div>
                <div class="input-group">
                    <input type="password" placeholder="Senha..." class="form-control" name="senha" id="senha" required>
                </div>
                <br>
                <input type="submit" class="btn btn-danger" value="Enviar" style="float: right;">
            </fieldset>
        </div>
        <div class="col-sm-4"></div>
    </div>
</body>
</html>
