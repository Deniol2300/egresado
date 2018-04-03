<?php
/**
 * Function cargar departamento  para poder selecionar
 * de la lista de departametos
 * */
require_once ('functions/config/conexion.php');
//include '../functions/config/conexion.php';

/**
 * Function getdepartameto que se encarga de obtener los departamentos
 * return $lista;
 */
function getdepartamento()
{
    $mysqli = getConn();
    $query = 'SELECT * FROM  `departamento`';
    $result = $mysqli->query($query);
    $lista = '<option value="0">Elige una opcion</option>';
    while ($row = $result->fetch_array(MYSQLI_ASSOC) ) {
        $lista .= "<option value='$row[id_depart]'>$row[nomb_depart]</option>";
    

    }
    return $lista;
}

echo getdepartamento();

?>