<?php
    require_once('../Plugins/Connections/CONNECT_SQL.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ( mysqli_connect_errno() ) {
      // If there is an error with the connection, stop the script and display the error.
      exit('Failed to connect to MySQL: ' . mysqli_connect_error());
  }

    // Criptografando a senha antes da msm ser inserida no banco de dados
    $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Query que realiza a inserção de dados na tabela
    $query = "INSERT INTO usuarios_cadastrados(nome, login, email, senha) VALUES ('$name', '$login', '$email', '$passwordHash')";
    $result = mysqli_query($conn, $query);
    

?>