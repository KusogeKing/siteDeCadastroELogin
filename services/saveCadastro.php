<?php
    require_once('../Plugins/Connections/CONNECT_SQL.php');

    if ( mysqli_connect_errno() ) {
      //Se houver algum erro o script para e mostra o erro
      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "INSERT INTO usuarios_cadastrados(nome, login, email, senha) VALUES (?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssss', $name, $login, $email, $passwordHash);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Criptografando a senha antes da msm ser inserida no banco de dados
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    mysqli_close($conn);

    header("Refresh:1;");

?>