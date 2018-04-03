<?php

/**
 * Function getConn de conexion para la base de datos   
 * 
 *  prueba para la conexion de la base de datos */
function getConn()
{
    $mysqli = mysqli_connect('localhost', 'root', 'root', 'egresados_v1');

    // mysqli_query("SET NAMES 'utf8'");
   
    if($mysqli->connect_errno)
    {
        echo "Fallo al conectar MySql: ". mysqli_connect_error(); 
    }
    $mysqli->set_charset('utf8');
    // mysqli_set_charset($mysqli,'UTF-8');
    return $mysqli;
}

?>