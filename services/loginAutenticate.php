<?php
    require_once('../Plugins/Connections/CONNECT_SQL.php');
    session_start();

    $email = $_POST['emailLogin'];
    $password = $_POST['passwordLogin'];


    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    print_r($_SESSION);
    $query = "SELECT id, senha, login, nome FROM usuarios_cadastrados WHERE email = '$email' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if($row['senha']!=''){
        if(password_verify($password, $row['senha'])){  
           session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['login'] = $row['login'];
            $_SESSION['name'] = strtoupper($row['nome']);
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];

            header ('refresh: 3; url = ../login.php');

        }
        else{
            echo "Acesso negado";
            print_r($row['senha']);
        }


    }

    
?>