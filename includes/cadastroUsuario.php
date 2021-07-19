<html>

<head>
    <link rel="stylesheet" href="../../Plugins/bootstrap-5.0.2-dist/css/bootstrap.css" />
    <script src="../../Plugins/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>MEU DEUS</title>
</head>
<style>
    h1{
        text-align: center;
    }
    .container{
        flex: 1;
        margin-top:10%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border-radius:9px;
        row-gap: 1ch;

        border-style: solid;
        border-color: #A7BBC7;
        box-shadow: 0 0 1em #515E63;

        background: #A7BBC7;

        padding-bottom:1%;
    }


    .form{
        margin-left: -30%;
        margin-right: -30%;
    }

    body{
        background-color: #E1E5EA;
    }
    .hidden{
        display: none;
    }
</style>
<body>
    <form id="form">
        <div class="container">

        <h1>Cadastro</h1>
        <div class="correto hidden" >CADASTRO REALIZADO COM SUCESSO</div>
        <div class="errado hidden" >CADASTRO CONTÉM ERRO, VERIFICAR SE TODAS INFORMAÇÕES FORAM PREENCHIDAS</div>
        <div class="erradoPassword hidden" >AS SENHAS DIGITADAS NÃO COINCIDEM, REENSIRA-AS</div>
        <div class="form">
            <div class="row justify-content-center">
                <div class="col-3">
                    <label for="nameInput" class="form-label">Seu nome:</label>
                    <input type="text" class="form-control" id="nameInput" name="name" placeholder="Nome Completo" required>
                </div>

                <div class="col-3">
                    <label for="loginInput" class="form-label">Digite um login:</label>
                    <input type="text" class="form-control" id="loginInput" name="login" placeholder="Login" required>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-6">
                    <label for="emailInput" class="form-label">Seu email:</label>
                    <input type="email" class="form-control" id="emailInput" name="email" placeholder="name@email.com" required>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-3">
                    <label for="passwordInput" class="form-label">Digite uma senha:</label>
                    <input type="password" class="form-control" id="passwordInput" name="password" placeholder="Password" required>
                </div>
                <div class="col-3">
                    <label for="passwordReInput" class="form-label">Confirme sua senha:</label>
                    <input type="password" class="form-control" id="passwordReInput" name="passwordAgain" placeholder="Password" required>
                </div>
            </div>
            <br>
            <div class="row justify-content-end">
                <div class="col-3">
                <button type="reset" class="btn btn-danger">Limpar</button>
                </div>
                <div class="col-5">
                <button type="submit" class="btn btn-success" onclick="confirmaCadastro()">Salvar</button>
                </div>
            </div>
        </div>
        </div>
    </form>
</body>

</html>


<script type="text/javascript">
    function confirmaCadastro(){
        nome = $('#nameInput').val();
        login = $('#loginInput').val();
        email = $('#emailInput').val();
        password = $('#passwordInput').val();
        rePassword = $('#passwordReInput').val();
        if(nome == "" || login == "" || email == "" || password == "" || rePassword == ""){
            confirm('CADASTRO CONTÉM ERRO, VERIFICAR SE TODAS INFORMAÇÕES FORAM PREENCHIDAS');
        }
        else if(password!==rePassword){
            confirm('AS SENHAS DIGITADAS NÃO COINCIDEM, REENSIRA-AS');

        }
        else{
            saveCadastro();
        }
    }
    function saveCadastro(){
        $.ajax({
            url: "../services/saveCadastro.php",
            type: "POST",
            dataType: "text",
            data: $('#form').serialize(),
            success: function(response){
                $('.certo').show();
            }
        })
    }

</script>