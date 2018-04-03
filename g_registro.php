<?php

//include 'conexion.php';
require_once '../functions/config/conexion.php';

define('$var1',1);
$mysqli= getConn();

$verificar_sql1 = mysqli_query($mysqli, "SELECT id_reg,dni,cod_univ,ap_patern,ap_materno,nomb,fac,esc,a_ingr,a_fin,email,password,auth FROM form_registro order by id_reg");

if (isset($_POST['submit']))
{
    //formulario de registro
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $cuniv = $_POST['cuniv'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $fac = $_POST['fac'];
    $ep = $_POST['ep'];
    $aingreso = $_POST['aingreso'];
    $aegreso = $_POST['aegreso'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //consulta para insertar al formulario de registro
    $sql1 = "INSERT INTO form_registro(id_reg,dni,cod_univ,ap_patern,ap_materno,nomb,fac,esc,a_ingr,a_fin,email,password,auth)
    VALUES (NULL, '$dni', '$cuniv', '$apellidoP', '$apellidoM', '$name', '$fac', '$ep', '$aingreso', '$aegreso', '$email', '$password','0')";

    $mysqli->query($sql1);
    echo 'exito en registrar';
    printf("nuevo registro con el id %d.\n", $mysqli->insert_id);   
    $var1=$mysqli->insert_id;
    echo "valor de var : $var1";

    $sql2 = "INSERT INTO login(idlogin,form_registro_id_reg,dni,cod_univ,auth)
    VALUES (NULL, '$var1', '$dni', '$cuniv', '0')"; 

    
    $query2 = $mysqli->query($sql2);
    echo 'exito 2'; 

    //para ver el error
    $verificar_sql2 = "SELECT id_reg,dni,cod_univ,ap_patern,ap_materno,nomb,fac,esc,a_ingr,a_fin,email,password,auth FROM form_registro order by id_reg";
    $result = $mysqli->query($verificar_sql2);

   
    if($result->num_rows > 0)
    {
        echo 'la tabla ult_cen_lab ya esta registrado';
        exit;
    }
    $resultado = mysqli_query($mysqli, $verificar_sql2);
    if( $result == false ){
        user_error("query failed: " .$mysqli->error. "<br />\n$verificar_sql2");
        echo 'Error  al registrar';
    }else{
        echo 'exito';   
    }





}
?>