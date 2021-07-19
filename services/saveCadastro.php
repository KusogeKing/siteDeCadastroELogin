<?php
    require_once('../../plugins/Connections/CONNECT_SQL.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "INSERT INTO usuarios_cadastrados(nome, login, email, senha) VALUES ('$name', '$login', '$email', '$password')";
    $result = mysqli_query($conn, $query);


?>