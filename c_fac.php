<?php
require_once ('functions/config/conexion.php');

function getfacultad()
{
    $mysqli = getConn();
    $query = 'SELECT * FROM  `facultad`';
    $result = $mysqli->query($query);
    $lista = '<option value="0">Elige una opcion</option>';
    while ($row = $result->fetch_array(MYSQLI_ASSOC) ) {
        $lista .= "<option value='$row[id_fac]'>$row[nomb_fac]</option>";
    

    }
    return $lista;
}

echo getfacultad();

?>