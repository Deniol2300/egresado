<?php
/**
 * Llamamos a la funcion  para la conxion de labase de datos
 */
//include '../functions/config/conexion.php';
 require_once '../functions/config/conexion.php';
 require_once 'g_registro.php'
//include 'conexion.php';
$mysqli = getConn();
define('$var1',1);

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
$sql = "INSERT INTO datos_personales(nomb,ap_paterno,ap_materno,cod_univ,DNI,fecha_nac,sexo,departamento_id_depart,provincia_id_prov,lugar,dom_ref,email,celular,dom_act,ciudad,pais)
VALUES('$nombre', '$aPaterno', '$aMaterno', '$cUniv', '$dni', '$fnac', '$sexo', '$depar', '$prov', '$lNac', '$rdom', '$email', '$cel', '$adom', '$ciu', '$pais')" ;

//ejecutar consulta
$query= $mysqli->query($sql);

$verificar_alum = mysqli_query($mysqli, "SELECT nomb,ap_paterno,ap_materno,cod_univ,DNI,fecha_nac_departamento_id_depart,provincia_id_prov,lugar,dom_ref,email,celular,dom_act,ciudad,pais FROM datos_personales WHERE DNI ='$dni'");
if(mysqli_num_rows($verificar_alum) || !$verificar_alum == 0)
  {
    echo 'el alumno ya esta registrado';
    exit;
}

$resultado1 = mysqli_query($mysqli, $sql);
if(!resultado1 ){
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


//INSERT INTO `datos_cont` (`id_dat`, `nomb_dat`, `ap_dat`, `paren_dat`, `dir_ref`, `telefono`) 
//VALUES (NULL, '1', 'pedro', 'suarez', 'familiar directo', 'asoc. viv. los sauces', '125547');

$sql1 = "INSERT INTO datos_cont(nomb_dat,ap_dat,paren_dat,dir_ref,telefono)
VALUES ('$nombrec','$apellido','$parent','$rdir','$tel')";

//ejecutar consulta
$query= $mysqli->query($sql1);

$verificar_alum = mysqli_query($mysqli, "SELECT nomb_dat,ap_dat,paren_dat,dir_ref,telefono FROM datos_cont WHERE dir_ref ='$rdir'");
if(mysqli_num_rows($verificar_alum) > 0)
  {
    echo 'el alumno ya esta registrado';
    exit;
}

$resultado2 = mysqli_query($mysqli, $sql1);
if( !resultado2 ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}

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
$seg = $_POST["seg"];//segunda especializac ion
$oth = $_POST["oth"];


//INSERT INTO `form_univ` (`id_form`, `facultad_id_fac`, `escuela_id_esc`, `esp_form`, `ingreso`, `egreso`, `terc_sup`, `quin_sup`, `grad_bach`, `anio_bach`, `tit_prof`, `anio_tit`, `maest`, `anio_maest`, `doctorado`, `anio_doc`, `seg_esp`, `anio_seg`, `otro`, `anio_otr`) 
//VALUES ('1', '1', '1', 'yacimientos mineros', '2016-01-12', '2018-01-12', 'si', 'si', 'mineria informal 1', '2010', 'mineria formal 2', '2012', 'mineria sostenible 3', '2014', NULL, NULL, NULL, NULL, NULL, NULL);

//INSERT INTO `form_univ` (`id_form`, `facultad_id_fac`, `escuela_id_esc`, `esp_form`, `ingreso`, `egreso`, `terc_sup`, `quin_sup`, `grad_bach`, `anio_bach`, `tit_prof`, `anio_tit`, `maest`, `anio_maest`, `doctorado`, `anio_doc`, `seg_esp`, `anio_seg`, `otro`, `anio_otr`) 
//VALUES ('2', '4', '18', 'salud humana', '2016-05-02', '2018-01-12', 'si', 'si', 'bi', NULL, 'no', NULL, 'no', NULL, 'no', NULL, 'no', NULL, 'no', NULL);

$sql2 = "INSERT INTO form_univ(facultad_id_fac,escuela_id_esc,esp_form,ingreso,egreso,terc_sup,quin_sup,grad_bach,anio_bach,tit_prof,maest,anio_maest,doctorado,anio_doc,seg_esp,anio_seg,otro,anio_otr)
VALUES ('$fac','$ep','$esp','$in','$eg','$ter','$qui','$bach','$tit','$maes','$doc','$seg','$oth')";

//ejecutar consulta
$query= $mysqli->query($sql2);

$verificar_alum = mysqli_query($mysqli, "SELECT facultad_id_fac,escuela_id_esc,esp_form,ingreso,egreso,terc_sup,quin_sup,grad_bach,anio_bach,tit_prof,maest,anio_maest,doctorado,anio_doc,seg_esp,anio_seg,otro,anio_otr FROM form_univ WHERE dir_ref ='$dir_ref'");
if(mysqli_num_rows($verificar_alum) > 0)
  {
    echo 'el alumno ya esta registrado';
    exit;
}

$resultado3 = mysqli_query($mysqli, $sql2);
if( !resultado3 ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}
//Aspiracion academica y profesional
$dip = $_POST["dip"];//diplomado
$seg1 = $_POST["seg1"];//segunda especialidad
$maes1 = $_POST["maes1"];//maestria
$doc1 = $_POST["doc1"];
$oth1 = $_POST["oth1"];

//INSERT INTO `asp_acadm` (`id_asp`, `diplom_asp`, `seg_esp_asp`, `maest_asp`, `doc_asp`, `otro_asp`) 
//VALUES ('1', 'mineria informal 2', 'mineria informal 3', NULL, NULL, NULL);

$sql3 = "INSERT INTO asp_acadm(diplom_asp,seg_esp_asp,maest_asp,doc_asp,otro_asp)
VALUES ('$dip','$seg1','$maes1','$doc1','$oth1')";
//ejecutar consulta
$query= $mysqli->query($sql3);

$resultado5 = mysqli_query($mysqli, $sql3);
if( !resultado5 ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}


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
$sql4 = "INSERT INTO dat_lab(cent_lab,ar_lab,cargo_lab,sec_lab,fech_in,fech_fin,dir_lab,telf)
VALUES ('$clab','$alab','$car','$sec','$fin','$fce','$dir','$tel1')";
//ejecutar consulta
$query= $mysqli->query($sql4);

$resultado6 = mysqli_query($mysqli, $sql4);
if( !resultado6 ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}
//ultimo centro laboral
$u_clab = $_POST["u_clab"];//centro laboral
$u_alab = $_POST["u_alab"];//area en la que labora
$u_car = $_POST["u_car"];//cargo
$u_sec = $_POST["u_sec"];//sector
$u_fin = $_POST["u_fin"];//fecha inicio
$u_fce = $_POST["u_fce"];//fech cese
$u_dir = $_POST["u_dir"];//direccion
$u_tel1 = $_POST["u_tel1"];//telefono

$sql4 = "INSERT INTO ult_dat_lab(ult_cent_lab,ult_ar_lab,ult_cargo_lab,ult_sec_lab,ult_fech_in,ult_fech_fin,ult_dir_lab,ult_telf)
VALUES ('$u_clab','$u_alab','$u_car','$u_sec','$u_fin','$u_fce','$u_dir','$u_tel1')";
//ejecutar consulta
$query= $mysqli->query($sql4);

$resultado7 = mysqli_query($mysqli, $sql4);
if( !resultado7 ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}


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

$resultado4 = mysqli_query($mysqli, $sql);
if( !resultado4 ){
    echo 'Error  al registrar';
} else{
    echo 'exito';
}

//cerrar conexion
mysqli_close($mysqli);

