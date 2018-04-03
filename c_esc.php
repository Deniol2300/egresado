<?php

/**
 * Requerimos la conexion php
 */

 //aafsdffffffffff
 
require_once ('functions/config/conexion.php');
/**
 * Function que se encarga de obtener le nombre de las escuelas
 */ 
function getescuelas()
{
    $mysqli = getConn();
    $id = $_POST['id']; 
    $query = "SELECT facultad_id_fac, nomb_esc, id_esc FROM  escuela  
    where facultad_id_fac= '$id'";
    $result = $mysqli->query($query);
    $esc = '<option value="0">Elige una opcion</option>';
    while ($row = $result->fetch_array(MYSQLI_ASSOC) ) {
        $esc .= "<option value='$row[id_esc]'>$row[nomb_esc]</option>";
    

    }
    return $esc;
} 

echo getescuelas();

?>