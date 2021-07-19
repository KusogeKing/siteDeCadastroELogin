<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <link rel="stylesheet" href="../Plugins/bootstrap-5.0.2-dist/css/bootstrap.css"/>
        <script src="../Plugins/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</head>
<style>
    .container{
        flex: 1;

        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius:9px;
        row-gap: 1ch;

        /* background: #6610f2; */
    }
</style>
<body>
    <div class="container" id="buttons">
        <div class="row">
            <div class="col-sm">
                <a type="button" target=”_blank” href="includes/cadastroUsuario.php" class="btn btn-primary">Cadastro</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <button type="button" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</body>

</html>
