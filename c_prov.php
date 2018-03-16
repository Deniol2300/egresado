<?php
/**
 * Requerimos la conexion php
 * 
 * 
 * /

 //aafsdffffffffff
 
require_once 'conexion.php';
/**
 * Function que se encarga de obtener le nombre de las escuelas
 * return a $esc;
 */ 
require_once 'conexion.php';
function getprovincias()
{
    $mysqli = getConn();
    $id = $_POST['id']; 
    $query = "SELECT departamento_id_depart, nomb_prov, id_prov FROM  provincia  
    where departamento_id_depart= '$id'";
    $result = $mysqli->query($query);
    $esc = '<option value="0">Elige una opcion</option>';
    while ($row = $result->fetch_array(MYSQLI_ASSOC) ) {
        $esc .= "<option value='$row[id_prov]'>$row[nomb_prov]</option>";
    

    }
    return $esc;
} 

echo getprovincias();
?>