<?php
    require_once('Plugins/Connections/CONNECT_SQL.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styleIndex.css"/>

    <title>Document</title>

    <?php 
    include_once('includes/declarations.php');
    ?>
</head>

<body>
    <div id="fullContainer">
        <div class="row">
            <div class="col-sm">
                <a type="button" target=”_blank” href="cadastroUsuario.php" class="btn btn-primary">Cadastro</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalLogin" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>


    <!-- Modal para realizar login-->
    <form method="POST" action="services/loginAutenticate.php">
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LOGIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    
                        <div class="row">
                            <div class="col">
                                <label for="emailLogin" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="emailLogin" name="emailLogin" placeholder="name@email.com" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="passwordLogin" class="form-label">Senha:</label>
                                <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" placeholder="Password" required>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
                
            </div>
        </div>
    </div>
    </form>
    <!-- Fim do modal de login-->
</body>
</html>

<script>

</script>