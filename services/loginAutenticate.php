<?php
    require_once('../Plugins/Connections/CONNECT_SQL.php');
    session_start();

    $email = $_POST['emailLogin'];
    $password = $_POST['passwordLogin'];


    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $stmt = mysqli_prepare($conn, "SELECT id, senha, login, nome FROM usuarios_cadastrados WHERE email = ? ");
    mysqli_stmt_bind_param($stmt, 's', $email);
    
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $row = mysqli_fetch_array($result);

    if($row['senha']!=''){
        if(password_verify($password, $row['senha'])){  
           session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['login'] = $row['login'];
            $_SESSION['name'] = strtoupper($row['nome']);
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $row['id'];

            header ('refresh: 1; url = ../login.php');

        }
        else{
            echo "Acesso negado";
            print_r($row['senha']);
        }


    }

    
?>