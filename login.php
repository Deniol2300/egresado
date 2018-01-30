<?php
    session_start();
    //obtenemos lso datos  cargados en le formailario de login
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == 'email@dominio.com' && $password == '1234'){

        //guardamos  e la sesion el email del usuario
        $_SESSION['email'] = $email;

        header('http//www.google.com');
        header('Location: principal.php');
    }
    else{
        echo 'el email o password es incorrecto '
    }
    
?>  