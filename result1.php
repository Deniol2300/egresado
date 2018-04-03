<?php
/**
 ** Author: Sridhar Siva Subramanian
 ** This is a veru basic CRUD application, which I used to 
 ** demonstrate PHP in my class. Hope this helps in 
 ** understanding PHP functions, classes, CRUD DB 
 ** connectivity, sessions, file upload, etc.,
 ** This is just a begginers demo. Upload the sql dump into 
 ** your database before eunning this project
  
 **************************************************************** 
 ** This page is used to validate the users and send them to
 ** their dashboard. There's two user roles 'ADMIN' and 'STUDENT'
 ** Denoted by 1 and 0.
 ****************************************************************

 */

 session_start();
echo '<p id="error"></p>';
require_once("functions/config/conexion.php");
require_once("functions/session.php");

    //stripslashes quita las barras de un string con comillas escapadas
    $usern = stripslashes($_POST['user']);
    $pwd1 = stripslashes(($_POST['password']));
    //$usern = mysqli_real_escape_string($usern);
    //$pwd2 = mysqli_real_escape_string($con,$pwd1);
    $mysqli = getConn();
    //$pwd = md5($pwd1);
    $sql_command="SELECT idlogin,form_registro_id_reg,dni,cod_univ,auth FROM login WHERE  cod_univ = '$usern' and dni = '$pwd1'";
    
    $resultado = $mysqli->query($sql_command);
    if( $resultado == false ){
    user_error("query failed: " .$mysqli->error. "<br />\n$sql_comand");
        echo 'Error  al registrar';
    } else{
        echo 'exito';   
    }

    $result = mysqli_query($mysqli,$sql_command);
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $privilege = $row['auth'];

        $_SESSION['user'] = $usern;
        $_SESSION['auth'] = $privilege;
		?><script>window.location = "res.php"; </script><?php
		
    } else {
        $error = "Username or Password is invalid";
        ?>
            <script type="text/javascript">
                var e = document.getElementById('error').innerHTML = "<font color='red'><b>Invalid Username or Password</font></b>";</script>
            <?php
        }

 

