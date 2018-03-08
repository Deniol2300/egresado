<?php
/**
 * Llamamos a la funcion  para la conxion de labase de datos
 */
require_once 'conexion.php';
//include 'conexion.php';
$mysqli = getConn();

//encuesta 2018
$nombre = $_POST["nombre"];
$aPaterno = $_POST["aPaterno"];
$aMaterno = $_POST["aMaterno"];
$cUniv = $_POST["cUniv"];
$dni = $_POST["dni"];
$fnac = $_POST["fnac"];
$sexo = $_POST["edad"]; //sexo
$lNac = $_POST["lNac"];
$depar = $_POST["depar"];
$prov = $_POST["prov"];
$rdom = $_POST["rdom"];
$email = $_POST["email"];
$cel = $_POST["cel"];
$adom = $_POST["adom"];
$ciu = $_POST["ciu"];
$pais = $_POST["pais"];

//consulta para insertar
$sql = " INSERT INTO datos_personales(nomb,ap_paterno,ap_materno,cod_univ,DNI,fecha_nac_departamento_id_depart,provincia_id_prov,lugar,dom_ref,email,celular,dom_act,ciudad,pais)
VALUES('$nombre', '$aPaterno', '$aMaterno', '$cUniv', '$dni', '$fnac', '$sexo', '$lNac', '$depar', '$prov', '$rdom', '$email', '$cel', '$adom', '$ciu', '$pais')" ;

//ejecutar consulta
$query= $mysqli->query($sql);

$verificar_alum = mysqli_query($mysqli, "SELECT nomb,ap_paterno,ap_materno,cod_univ,DNI,fecha_nac_departamento_id_depart,provincia_id_prov,lugar,dom_ref,email,celular,dom_act,ciudad,pais FROM datos_personales WHERE DNI ='$dni'");
if(mysqli_num_rows($verificar_alum) > 0)
  {
    echo 'el alumno ya esta registrado';
    exit;
}

$resultado = mysqli_query($mysqli, $sql);
if( !resultado ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}
//datos del contacto

$nombrec = $_POST["nombrec"];
$apellido = $_POST["apellido"];
$parent = $_POST["parent"];
$rdir = $_POST["rdir"];//direccion con referencia
$tel = $_POST["tel"];//telefono


//INSERT INTO `datos_cont` (`id_dat`, `datos_personales_id`, `nomb_dat`, `ap_dat`, `paren_dat`, `dir_ref`, `telefono`) 
//VALUES (NULL, '1', 'pedro', 'suarez', 'familiar directo', 'asoc. viv. los sauces', '125547');

//formacion universitaria
$fac = $_POST["fac"];
$ep = $_POST["ep"];
$esp = $_POST["esp"];
$in = $_POST["in"];
$eg = $_POST["in"];
$ter = $_POST["ter"];//tercio
$qui = $_POST["qui"];//quinto
$bach = $_POST["bach"];//bachier
$tit = $_POST["tit"];//titulo
$maes = $_POST["maes"];//maestria
$doc = $_POST["doc"];//doctorado
$seg = $_POST["seg"];//segunda especializacion
$oth = $_POST["oth"];


//INSERT INTO `form_univ` (`id_form`, `facultad_id_fac`, `escuela_id_esc`, `esp_form`, `ingreso`, `egreso`, `terc_sup`, `quin_sup`, `grad_bach`, `anio_bach`, `tit_prof`, `anio_tit`, `maest`, `anio_maest`, `doctorado`, `anio_doc`, `seg_esp`, `anio_seg`, `otro`, `anio_otr`) 
//VALUES ('1', '1', '1', 'yacimientos mineros', '2016-01-12', '2018-01-12', 'si', 'si', 'mineria informal 1', '2010', 'mineria formal 2', '2012', 'mineria sostenible 3', '2014', NULL, NULL, NULL, NULL, NULL, NULL);

//Aspiracion academica y profesional
$dip = $_POST["dip"];//diplomado
$seg1 = $_POST["seg1"];//segunda especialidad
$maes1 = $_POST["maes1"];//maestria
$doc1 = $_POST["doc1"];
$oth1 = $_POST["oth1"];

//INSERT INTO `asp_acadm` (`id_asp`, `diplom_asp`, `seg_esp_asp`, `maest_asp`, `doc_asp`, `otro_asp`) 
//VALUES ('1', 'mineria informal 2', 'mineria informal 3', NULL, NULL, NULL);

//datos laborales
$clab = $_POST["clab"];//centro laboral
$alab = $_POST["alab"];//area en la que labora
$car = $_POST["car"];//cargo
$sec = $_POST["sec"];//sector
$fin = $_POST["fin"];//fecha inicio
$fce = $_POST["fce"];//fech cese
$dir = $_POST["dir"];//direccion
$tel1 = $_POST["tel1"];//telefono

//INSERT INTO `dat_lab` (`id_lab`, `cent_lab`, `ar_lab`, `cargo_lab`, `sec_lab`, `fech_in`, `fech_fin`, `dir_lab`, `telf`) 
//VALUES ('1', 'UPC', 'Logistica', 'operador', 'privado', '2012-02-02', '2016-02-02', 'av sin numero', '55221147');

//ultimo centro laboral
$u_clab = $_POST["u_clab"];//centro laboral
$u_alab = $_POST["u_alab"];//area en la que labora
$u_car = $_POST["u_car"];//cargo
$u_sec = $_POST["u_sec"];//sector
$u_fin = $_POST["u_fin"];//fecha inicio
$u_fce = $_POST["u_fce"];//fech cese
$u_dir = $_POST["u_dir"];//direccion
$u_tel1 = $_POST["u_tel1"];//telefono

$apellido = $_POST["aPaterno"];
$email = $_POST["email"];
$fac = $_POST["fac"];
$esc = $_POST["esc"];
//consulta para insertar
$sql = "INSERT INTO  alumno(nomb_alum,a_pater,correo,id_fac,id_esc) 
VALUES('$nombre',  '$apellido', '$email', '$fac', '$esc')";
//ejecutar consulta
$query= $mysqli->query($sql);

$verificar_alum = mysqli_query($mysqli, "SELECT nomb_alum,a_pater,correo,id_fac,id_esc FROM  alumno WHERE nomb_alum ='$nombre'");
if(mysqli_num_rows($verificar_alum) > 0)
  {
    echo 'el alumno ya esta registrado';
    exit;
}

$resultado = mysqli_query($mysqli, $sql);
if( !resultado ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}

//cerrar conexion
mysqli_close($mysqli);

