<?php
/**
 * Formulario de registro de datos parael seguimeitn ode egresados
 */

include '../functions/config/conexion.php';
C:\xampp\htdocs\dashboard\proyecto1\functions\config\conexion.php
$mysqli= getConn();
echo " el valor de myslqi: --";
$verficar_sql1 = mysqli_query($mysqli, "SELECT id,nomb,ap_paterno,ap_materno,cod_univ,DNI,fecha_nac_departamento_id_depart,provincia_id_prov,lugar,dom_ref,email,celular,dom_act,ciudad,pais FROM  datos_personales order by id") ;
$verificar_sql2 = mysqli_query($mysqli, "SELECT id_dat,nomb_dat,ap_dat,paren_dat,dir_ref,telefono FROM datos_cont order by id_dat");
$verificar_sql3 = mysqli_query($mysqli, "SELECT id_form,facultad_id_fac,escuela_id_esc,esp_form,ingreso,egreso,terc_sup,quin_sup,grad_bach,anio_bach,tit_prof,maest,anio_maest,doctorado,anio_doc,seg_esp,anio_seg,otro,anio_otr FROM form_univ  order by id_form");
$verificar_sql4 = mysqli_query($mysqli, "SELECT id_asp,diplom_asp,seg_esp_asp,maest_asp,doc_asp,otro_asp FROM asp_acadm order by id_asp");
$verificar_sql5 = mysqli_query($mysqli, "SELECT id_lab,cent_lab,ar_lab,cargo_lab,sec_lab,fech_in,fech_fin,dir_lab,telf FROM dat_lab order by id_lab");
$verificar_sql6 = mysqli_query($mysqli, "SELECT id_ult_lab,ult_cent_lab,ult_ar_lab,ult_cargo_lab,ult_sec_lab,ult_fech_in,ult_fech_fin,ult_dir_lab,ult_telf FROM ult_dat_lab order by id_ult_lab");

if(isset($_POST['submit']))
{
    //encuesta 2018
    //datos_personales
    $nombre = $_POST["nombre"];
    $aPaterno = $_POST["aPaterno"];
    $aMaterno = $_POST["aMaterno"];
    $cUniv = $_POST["cUniv"];
    $dni = $_POST["dni"];
    $fnac = $_POST["fnac"];
    $sexo = $_POST["edad"]; //sexo
    $depar = $_POST["depar"];
    $prov = $_POST["prov"];
    $lNac = $_POST["lNac"];
    $rdom = $_POST["rdom"];
    $email = $_POST["email"];
    $cel = $_POST["cel"];
    $adom = $_POST["adom"];
    $ciu = $_POST["ciu"];
    $pais = $_POST["pais"];

    //datos_contacto
    $nombrec = $_POST["nombrec"];
    $apellido = $_POST["apellido"];
    $parent = $_POST["parent"];
    $rdir = $_POST["rdir"];//direccion con referencia
    $tel = $_POST["tel"];//telefono


    //form_univ
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
    $anio_bach = $_POST["anio_bach"];
    $anio_tit = $_POST["anio_tit"];
    $anio_maes = $_POST["anio_maes"];
    $anio_doc = $_POST["anio_doc"];
    $anio_seg = $_POST["anio_seg"];
    $anio_otr = $_POST["anio_otr"];

    //aspiraciones
    //Aspiracion academica y profesional
    $dip = $_POST["dip"];//diplomado
    $seg1 = $_POST["seg1"];//segunda especialidad
    $maes1 = $_POST["maes1"];//maestria
    $doc1 = $_POST["doc1"];
    $oth1 = $_POST["oth1"];
    

    //datos laborales
    $clab = $_POST["clab"];//centro laboral
    $alab = $_POST["alab"];//area en la que labora
    $car = $_POST["car"];//cargo
    $sec = $_POST["sec"];//sector
    $fin = $_POST["fin"];//fecha inicio
    $fce = $_POST["fce"];//fech cese
    $dir = $_POST["dir"];//direccion
    $tel1 = $_POST["tel1"];//telefono


    //ultimo centro laboral
    $u_clab = $_POST["uclab"];//centro laboral
    $u_alab = $_POST["ualab"];//area en la que labora
    $u_car = $_POST["ucar"];//cargo
    $u_sec = $_POST["usec"];//sector
    $u_fin = $_POST["ufin"];//fecha inicio
    $u_fce = $_POST["ufce"];//fech cese
    $u_dir = $_POST["udir"];//direccion
    $u_tel1 = $_POST["utel1"];//telefono

    //consulta para insertar datos_personales
    $sql1 = "INSERT INTO datos_personales(id,form_registro_id_reg,nomb,ap_paterno,ap_materno,cod_univ,DNI,fecha_nac,sexo,departamento_id_depart,provincia_id_prov,lugar,dom_ref,email,celular,dom_act,ciudad,pais)
    VALUES(NULL,'$var1','$nombre', '$aPaterno', '$aMaterno', '$cUniv', '$dni', '$fnac', '$sexo', '$depar', '$prov', '$lNac', '$rdom', '$email', '$cel', '$adom', '$ciu', '$pais')";

    $mysqli->query($sql1);
    echo 'exito 1';
    printf("nuevo registro con el id %d.\n", $mysqli->insert_id);   
    $var=$mysqli->insert_id;
    echo "valor de var : $var";

    $sql2 = "INSERT INTO datos_cont(id_dat,nomb_dat,ap_dat,paren_dat,dir_ref,telefono)
    VALUES ('$var', '$nombrec', '$apellido', '$parent', '$rdir', '$tel')";

    echo 'exito 2'; 
    $query2 = $mysqli->query($sql2);
    
    $sql3 = "INSERT INTO form_univ(id_form,facultad_id_fac,escuela_id_esc,esp_form,ingreso,egreso,terc_sup,quin_sup,grad_bach,anio_bach,tit_prof,anio_tit,maest,anio_maest,doctorado,anio_doc,seg_esp,anio_seg,otro,anio_otr)
    VALUES ('$var', '$fac', '$ep', '$esp', '$in', '$eg', '$ter', '$qui', '$bach','$anio_bach', '$tit', '$anio_doc', '$maes', '$anio_maes', '$doc', '$anio_doc', '$seg', '$anio_seg', '$oth', '$anio_otr')";
    
    echo 'exito 3';
    $query3 = $mysqli->query($sql3);

    $sql4 = "INSERT INTO asp_acadm(id_asp,diplom_asp,seg_esp_asp,maest_asp,doc_asp,otro_asp)
    VALUES ('$var', '$dip', '$seg1', '$maes1', '$doc1', '$oth1')";
    
    echo 'exito 4';
    $query4 = $mysqli->query($sql4);

    $sql5 = "INSERT INTO dat_lab(id_lab,cent_lab,ar_lab,cargo_lab,sec_lab,fech_in,fech_fin,dir_lab,telf)
    VALUES ('$var', '$clab', '$alab', '$car', '$sec', '$fin', '$fce', '$dir', '$tel1')";
    
    echo 'exito 5';
    $query5 = $mysqli->query($sql5);
    
    
    $sql6 = "INSERT INTO ult_cen_lab(id_ult_lab,ult_cent_lab,ult_ar_lab,ult_cargo_lab,ult_sec_lab,ult_fech_in,ult_fech_fin,ult_dir_lab,ult_telef)
    VALUES ('$var', '$u_clab', '$u_alab', '$u_car', '$u_sec', '$u_fin', '$u_fce', '$u_dir', '$u_tel1')";

    $query6 = $mysqli->query($sql6);
   
    $verificar_alum = "SELECT id_ult_lab,ult_cent_lab,ult_ar_lab,ult_cargo_lab,ult_sec_lab,ult_fech_in,ult_fech_fin,ult_dir_lab,ult_telef FROM ult_cen_lab WHERE id_ult_lab='$var'";
    
    $result = $mysqli->query($verificar_alum);
    if($result->num_rows > 0)
    {
        echo 'la tabla ult_cen_lab ya esta registrado';
        exit;
    }

    //para ver el error , no borrar please 
    $resultado = mysqli_query($mysqli, $verificar_alum);
    if( $result == false ){
    user_error("query failed: " .$mysqli->error. "<br />\n$verificar_alum");
        echo 'Error  al registrar';
    } else{
        echo 'exito';   
    }

    //cerrar conexion
    mysqli_close($mysqli);
    echo 'exito 6';
    //ejecutar consulta
    //$query1 = $mysqli->query($sql1);
    //$var=$mysqli->insert_id;
    echo "valor de var : $var";
    

    // if($query1==true)
    // {
    //     echo 'exito 1';
    //     $query2 = $mysqli->query($sql2);
    //     if ($query2==true)
    //     {
    //         echo 'exito 2';
    //         $query3 = $mysqli->query($sql3);
    //         if($query3==true)
    //         {
    //             echo 'exito 3';
    //             $query4 = $mysqli->query($sql4);
    //             if($query4==true)
    //             {
    //                 echo 'exito 4';
    //                 $query5 = $mysqli->query($sql5);
    //                 if($query5==true)
    //                 {
    //                     $query6 = $mysqli->query($sql6);
    //                     echo 'exito 5';
    //                 }
    //                 echo 'exito 6';
    //             }
    //         }
    //     }
    // }

}

?>