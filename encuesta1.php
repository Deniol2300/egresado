<?php
 //include 'conexion.php';
 include ('functions/config/conexion.php');
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
</head>
<body>
        <form class="form-horizontal" method="POST" action="guarda1.php">
                <fieldset>
                
                <!-- Form Name -->
                <legend>Encuesta 2018</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
                  <div class="col-md-4">
                  <input id="nombre" name="nombre" type="text" value="" placeholder="ingresa tu nombre(s)" value="" class="form-control input-md" required="">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="aPaterno">Apeliido Paterno</label>  
                        <div class="col-md-4">
                        <input id="aPaterno" name="aPaterno" type="text" value="" placeholder="ingresa tu apellido paterno" class="form-control input-md" required="">
                        </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="aMaterno">Apellido Materno</label>  
                        <div class="col-md-4">
                        <input id="aMaterno" name="aMaterno" type="text" value="" placeholder="ingresa tu apellido materno" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="cUniv">Codigo Universitario</label>  
                        <div class="col-md-4">
                        <input id="cUniv" name="cUniv" type="text" value="" placeholder="ingresa tu codigo universitario" class="form-control input-md" required="">
                        </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="cUniv">DNI</label>  
                        <div class="col-md-4">
                        <input id="dni" name="dni" type="text"  value=""  placeholder="ingresa tu DNI" value="" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="cUniv">Fecha de Nacimiento</label>  
                        <div class="col-md-4">
                        <input id="fnac" name="fnac" type="date" value="" placeholder="ingresa tu fecha de nacimiento      " class="form-control input-md" required="">
                        </div>
                </div>
                
                <!-- Multiple Radios -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">Sexo</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Masculino
                    </label>
                    </div>
                  <div class="radio">
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      Femenino
                    </label>
                    </div>
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="depar">Departamento</label>  
                  <div class="col-md-4">
                   <!--<input id="depar" name="depar" type="text" value="" placeholder="ingrese su departamento" class="form-control input-md" required=""> -->
                  <select name="depar" id="depar" class="form-control">
                    
                  </select>  
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="prov">Provincia</label>  
                        <div class="col-md-4">
                      <!--  <input id="prov" name="prov" type="text" value="" placeholder="ingresa tu provincia" class="form-control input-md" required=""> -->
                       <select name="prov" id="prov" class="form-control"></select> 
                      </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="lNac">Lugar de Nacimiento</label>  
                        <div class="col-md-4">
                        <input id="lNac" name="lNac" type="text" value="" placeholder="ingresa tu lugar de nacimiento" class="form-control input-md" required="">
                        </div>
                </div>
                

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="rdom">Domicilio con referencia</label>  
                        <div class="col-md-4">
                        <input id="rdom" name="rdom" type="text" value="" placeholder="ingresa su domicilio con referencia" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="cel">Correo Electronico</label>  
                        <div class="col-md-4">
                        <input id="email" name="email" type="email" value="" placeholder="ingresa tu correo electronico" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="cel">Celular</label>  
                        <div class="col-md-4">
                        <input id="cel" name="cel" type="text" value="" placeholder="ingresa tu celular" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="adom">Domicilio actual</label>  
                        <div class="col-md-4">
                        <input id="adom" name="adom" type="text" value="" placeholder="ingresa su domicilio actual" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="pais">Ciudad</label>  
                        <div class="col-md-4">
                        <input id="ciu" name="ciu" type="text" value="" placeholder="ingresa su ciudad actual" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                        <label class="col-md-4 control-label" for="pais">Pais</label>  
                        <div class="col-md-4">
                        <input id="pais" name="pais" type="text" value="" placeholder="ingresa su pais" class="form-control input-md" required="">
                        </div>
                </div>

                <!-- Form Name -->
                <legend>Datos de Contacto</legend>
                
                <!-- Text input-->
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="nombrec">Nombres</label>  
                  <div class="col-md-4">
                  <input id="nombrec" name="nombrec" type="text" value="" placeholder="ingresa el nombre(s)" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="apellido">Apellidos</label>  
                  <div class="col-md-4">
                  <input id="apellido" name="apellido" type="text" value="" placeholder="ingresa sus apellidos" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="parent">Parentesco</label>  
                  <div class="col-md-4">
                  <input id="parent" name="parent" type="text" value=""vvplaceholder="ingrese su parentesco" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="rdir">Direccion con referencia</label>  
                  <div class="col-md-4">
                  <input id="rdir" name="rdir" type="text" value="" placeholder="ingrese su direccion con referencia" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="tel">Telefono</label>  
                  <div class="col-md-4">
                  <input id="tel" name="tel" type="text" value="" placeholder="ingrese su telefono" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Form Name -->
                <legend>Formacion Universitaria</legend>

                <!-- arreglar con imputs anidados, no olvidar
                  https://www.youtube.com/watch?v=xq04F4hbZmo

                  Text input-->

                <div class="form-group">
                  <label class="col-md-4 control-label" for="fac">Facultad</label>  
                  <div class="col-md-4">
                  <!--<input id="fac" name="fac" type="text" value="" placeholder="ingrese su facultad" class="form-control input-md" required=""> -->
                  <select name="fac" id="fac" class="form-control"></select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="ep">Escuela Profesional</label>  
                  <div class="col-md-4">
                  <!--<input id="ep" name="ep" type="text" value="" placeholder="ingrese su escuela profesional" class="form-control input-md" required=""> -->
                  <select name="ep" id="ep" class="form-control"></select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="esp">Especialidad</label>  
                  <div class="col-md-4">
                  <input id="esp" name="esp" type="text" value="" placeholder="ingrese su Especialidad" class="form-control input-md" required="">
                  </div>
                </div>

                <!--
                <div class="form-group">
                  <label class="col-md-4 control-label" for="fac">Escuela Profesional</label>  
                  <div class="col-md-4">
                  <input id="ep" name="ep" type="text" value="" placeholder="ingrese su escuela profesional" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="in">Ingreso</label>  
                  <div class="col-md-4">
                  <input id="in" name="in" type="date" value="" placeholder="ingresa tu fecha de ingreso" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="eg">Egreso</label>  
                  <div class="col-md-4">
                  <input id="eg" name="eg" type="date" value="" placeholder="ingresa tu fecha de egreso" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="ter">Tercio Superior</label>
                  <div class="col-md-4">
                    <select id="ter" name="ter" class="form-control">
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="qui">Quinto Superior</label>
                  <div class="col-md-4">
                    <select id="qui" name="qui" class="form-control">
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="bach">Grado Bachiller en</label>  
                  <div class="col-md-4">
                  <input id="bach" name="bach" type="text" value="" placeholder="ingresa tu grado bachiller" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="anio_bach">Año</label>  
                  <div class="col-md-4">
                  <input id="anio_bach" name="anio_bach" type="text" value="" placeholder="ingresa año de bachiller" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="tit">Titulo Profesional en</label>  
                  <div class="col-md-4">
                  <input id="tit" name="tit" type="text" value="" placeholder="ingresa el nombre de tu titulo profesional" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="anio_tit">Año</label>  
                  <div class="col-md-4">
                  <input id="anio_tit" name="anio_tit" type="text" value="" placeholder="ingresa el año de profesional" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="maes">Maestria en</label>  
                  <div class="col-md-4">
                  <input id="maes" name="maes" type="text" value="" placeholder="ingresa el nombre de su maestria" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="anio_maes">Año</label>  
                  <div class="col-md-4">
                  <input id="anio_maes" name="anio_maes" type="text" value="" placeholder="ingresa tu año de maestria" class="form-control input-md" required="">
                  </div>
                </div>

              
                <!-- Text input-->
                <div class="form-group"> 
                  <label class="col-md-4 control-label" for="doc">Doctorado en</label>  
                  <div class="col-md-4">
                  <input id="doc" name="doc" type="text" value="" placeholder="ingresa el nombre de su doctorado" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="anio_doc">Año</label>  
                  <div class="col-md-4">
                  <input id="anio_doc" name="anio_doc" type="text" value="" placeholder="ingresa tu año de doctorado" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="seg">Segunda Espcialidad en</label>  
                  <div class="col-md-4">
                  <input id="seg" name="seg" type="text" value="" placeholder="ingresa el nombre de segunda especialidad" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="anio_seg">Año</label>  
                  <div class="col-md-4">
                  <input id="anio_seg" name="anio_seg" type="text" value="" placeholder="ingresa tu año de segunda especialidad" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="oth">Otro</label>  
                  <div class="col-md-4">
                  <input id="oth" name="oth" type="text" value="" placeholder="otro" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="anio_otr">Año</label>  
                  <div class="col-md-4">
                  <input id="anio_otr" name="anio_otr" type="text" value="" placeholder="ingresa año otro" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Form Name -->
                <legend>Aspiracion Academica y Profesional</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="dip">Diplomado en</label>  
                  <div class="col-md-4">
                  <input id="dip" name="dip" type="text" value="" placeholder="ingresa el nombre de tu diplomado" class="form-control input-md" required="">
                  </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="seg1">Segunda Espcialidad en</label>  
                  <div class="col-md-4">
                  <input id="seg1" name="seg1" type="text" value="" placeholder="ingresa el nombre de segunda especialidad" class="form-control input-md" required="">
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="maes1">Maestria en</label>  
                  <div class="col-md-4">
                  <input id="maes1" name="maes1" type="text" value="" placeholder="ingresa el nombre de su maestria" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="doc1">Doctorado en</label>  
                  <div class="col-md-4">
                  <input id="doc1" name="doc1" type="text" value="" placeholder="ingresa el nombre de su doctorado" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="oth1">Otro</label>  
                  <div class="col-md-4">
                  <input id="oth1" name="oth1" type="text" value="" placeholder="otro" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Form Name -->
                <legend>Datos laborales</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="clab">Centro Laboral</label>  
                  <div class="col-md-4">
                  <input id="clab" name="clab" type="text" value="" placeholder="ingrese el nombre de su centro laboral" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="alab">Area en que Labora</label>  
                  <div class="col-md-4">
                  <input id="alab" name="alab" type="text" value="" placeholder="area en la que laboral" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="car">Cargo</label>  
                  <div class="col-md-4">
                  <input id="car" name="car" type="text" value="" placeholder="cargo" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="sec">Sector</label>  
                  <div class="col-md-4">
                  <input id="sec" name="sec" type="text" value="" placeholder="publico,privado,etc" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="fin">Fecha de Inicio</label>  
                  <div class="col-md-4">
                  <input id="fin" name="fin" type="date" value="" placeholder="Fecha de Inicio" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="fce">Fecha de cese</label>  
                  <div class="col-md-4">
                  <input id="fce" name="fce" type="date" value="" placeholder="Fecha de cese" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="dir">Direcion </label>  
                  <div class="col-md-4">
                  <input id="dir" name="dir" type="text" value="" placeholder="ingrese la direccion " class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="tel1">Telefono</label>  
                  <div class="col-md-4">
                  <input id="tel1" name="tel1" type="text" value="" placeholder="ingrese el telefono" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Form Name -->
                <legend>Ultimo centro laboral</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="uclab">Ultimo Centro Laboral</label>  
                  <div class="col-md-4">
                  <input id="uclab" name="uclab" type="text" value="" placeholder="ingrese el nombre de su ultimo centro laboral" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="ualab">Ultima area en que Laboro</label>  
                  <div class="col-md-4">
                  <input id="ualab" name="ualab" type="text" value="" placeholder="Ingrese el nombre del area en la que laboro" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="ucar">Ultimo Cargo</label>  
                  <div class="col-md-4">
                  <input id="ucar" name="ucar" type="text" value="" placeholder="Ingrese el nombre del ultimo cargo" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="usec">Sector</label>  
                  <div class="col-md-4">
                  <input id="usec" name="usec" type="text" value="" placeholder="publico,privado,etc" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="ufin">Fecha de Inicio</label>  
                  <div class="col-md-4">
                  <input id="ufin" name="ufin" type="date" value="" placeholder="Fecha de Inicio" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="ufce">Fecha de cese</label>  
                  <div class="col-md-4">
                  <input id="ufce" name="ufce" type="date" value="" placeholder="Fecha de cese" class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="udir">Direccion </label>  
                  <div class="col-md-4">
                  <input id="udir" name="udir" type="text" value="" placeholder="ingrese la direccion " class="form-control input-md" required="">
                  </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="utel1">Telefono</label>  
                  <div class="col-md-4">
                  <input id="utel1" name="utel1" type="text" value="" placeholder="ingrese el telefono" class="form-control input-md" required="">
                  </div>
                </div>




                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="areg">Año</label>
                  <div class="col-md-4">
                    <select id="areg" name="areg" class="form-control">
                      <option value="1">2017</option>
                      <option value="2">2016</option>
                      <option value="3">2015</option>
                      <option value="4">2014</option>
                      <option value="5">2013</option>
                      <option value="6">2012</option>
                      <option value="7">2011</option>
                      <option value="8">2010</option>
                      <option value="9">2009</option>
                      <option value="10">2008</option>
                      <option value="11">2007</option>
                      <option value="12">2006</option>
                      <option value="13">2005</option>
                      <option value="14">2004</option>
                      <option value="15">2003</option>
                      <option value="16">2002</option>
                      <option value="17">2001</option>
                      <option value="18">2000</option>
                      <option value="19">1999</option>
                      <option value="20">1998</option>
                      <option value="21">1997</option>
                      <option value="22">1996</option>
                      <option value="23">1995</option>
                      <option value="24">1994</option>
                      <option value="25">1993</option>
                      option*
                    </select>
                  </div>
                </div> -->
                
                <!-- Text input-->
                 <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="perdes">Periodo de desarrollo</label>  
                  <div class="col-md-4">
                  <input id="perdes" name="perdes" type="text" placeholder="" class="form-control input-md" required="">
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="edompo">Edo & Mpo</label>
                  <div class="col-md-4">
                    <select id="edompo" name="edompo" class="form-control">
                      <option value="1">Abalá, Yucatán</option>
                      <option value="2">Acanceh, Tecoh, Yucatán</option>
                      <option value="3">Cacalchen, Yucatán</option>
                      <option value="4">Calakmul, Campeche</option>
                      <option value="5">Calkini, Campeche</option>
                      <option value="6">Campeche, Campeche</option>
                      <option value="7">Cancun, Quintana Roo</option>
                      <option value="8">Candelaria, Campeche</option>
                      <option value="9">Cárdenas, Tabasco</option>
                      <option value="10">Champotón, Campeche</option>
                      <option value="11">Chemax, Yucatán</option>
                      <option value="12">Chetumal, Quintana Roo</option>
                      <option value="13">Chiapas</option>
                      <option value="14">Chichimilá, Yucatán</option>
                      <option value="15">Chicxulub Pueblo, Yucatán</option>
                      <option value="16">Chicxulub, Yucatán</option>
                      <option value="17">Comacalco, Cárdenas, E. Zapata, Tenosique, Cunduacan, Macuspana, Paraiso, Tabasco.</option>
                      <option value="18">Comacalco, Tabasco</option>
                      <option value="19">Cuch, Holoch, Halachó, Yucatán</option>
                      <option value="20">Cunduacán, Tabasco</option>
                      <option value="21">Dzemul, Yucatán</option>
                      <option value="22">Dzitás, Yucatán</option>
                      <option value="23">Escárcega, Campeche</option>
                      <option value="24">Felipe Carrillo Puerto, Quintana Roo</option>
                      <option value="25">Halachó, Yucatán</option>
                      <option value="26">Hecelchakan, Campeche</option>
                      <option value="27">Hopelchen Campeche</option>
                      <option value="28">Huimanguillo, Tabasco</option>
                      <option value="29">Hunucmá, Yucatán</option>
                      <option value="30">Ichmul, Chikindzonot Yucatán</option>
                      <option value="31">Izamal, Yucatán</option>
                      <option value="32">Jalpa de Méndez, Tabasco</option>
                      <option value="33">Jonuta, Tabasco</option>
                      <option value="34">Male, Chiapas</option>
                      <option value="35">Macuspana, Tabasco</option>
                      <option value="36">Maxcanu, Yucatán</option>
                      <option value="37">Mérida, Yucatán</option>
                      <option value="38">Mesatunich, Motul</option>
                      <option value="39">México, D.F.</option>
                      <option value="40">Motul, Yucatán</option>
                      <option value="41">Muna, Yucatán</option>
                      <option value="42">Nacajuca, Tabasco</option>
                      <option value="43">Paraiso, Tabasco</option>
                      <option value="44">Peto, Yucatán</option>
                      <option value="45">Postunich, Yucatán</option>
                      <option value="46">Progreso, Yucatán</option>
                      <option value="47">Quintana Roo</option>
                      <option value="48">Sacalum, Yucatán</option>
                      <option value="49">Samahil, Yucatán</option>
                      <option value="50">Sitpach, Yucatán</option>
                      <option value="51">Soconusco, Chiapas</option>
                      <option value="52">Sotuta, Yucatán</option>
                      <option value="53">Tabasco</option>
                      <option value="54">Tacotalpa, Tabasco</option>
                      <option value="55">Tahmek, Yucatán</option>
                      <option value="56">Teabo, Yucatán</option>
                      <option value="57">Tekanto, Yucatán</option>
                      <option value="58">Tekax, Yucatán</option>
                      <option value="59">Tenabo, Campeche</option>
                      <option value="60">Tenosique, Tabasco</option>
                      <option value="61">Teya, Yucatán</option>
                      <option value="62">Ticul, Yucatán</option>
                      <option value="63">Tinum, Yucatán</option>
                      <option value="64">Tixkokob, Yucatán</option>
                      <option value="65">Tizimín, Espita, Calotmul, Sucilá, San Felipe y Rio Lagartos, Yucatán</option>
                      <option value="66">Tizimín, Yucatán</option>
                      <option value="67">Tuxtepec, Oaxaca</option>
                      <option value="68">Umán, Yucatán</option>
                      <option value="69">Valladolid, Yucatán</option>
                      <option value="70">Villahermosa, Tabasco</option>
                      <option value="71">Yucalpetén, Yucatán</option>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="niedes">Nivel Educativo del Estudio</label>
                  <div class="col-md-4">
                    <select id="niedes" name="niedes" class="form-control">
                      <option value="1">Preescolar</option>
                      <option value="2">Primaria</option>
                      <option value="3">Secundaria</option>
                      <option value="4">Preparatoria</option>
                      <option value="5">Bachillerato</option>
                      <option value="6">Superior</option>
                      <option value="7">Otro</option>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="tipara">Tipo de paradigma</label>
                  <div class="col-md-4">
                    <select id="tipara" name="tipara" class="form-control">
                      <option value="1">Cualitativo</option>
                      <option value="2">Cuantitativo</option>
                      <option value="3">Mixto</option>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="tiestu">Tipo de estudio</label>
                  <div class="col-md-4">
                    <select id="tiestu" name="tiestu" class="form-control">
                      <option value="1">Explorativo</option>
                      <option value="2">Descriptivo</option>
                      <option value="3">Correlacional</option>
                      <option value="4">Explicativo</option>
                      <option value="5">Mixto</option>
                      <option value="6">Fenomenológico</option>
                      <option value="7">Etnometodológico</option>
                      <option value="8">Estudio de caso</option>
                      <option value="9">Etnográfico</option>
                      <option value="10">Investigación Acción</option>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="tidise">Tipo de diseño</label>
                  <div class="col-md-4">
                    <select id="tidise" name="tidise" class="form-control">
                      <option value="1">Pre-experimental</option>
                      <option value="2">Cuasi-experimental</option>
                      <option value="3">Experimento puro</option>
                      <option value="4">No experimental transversal descriptivo</option>
                      <option value="5">No experimental transversal correlacional</option>
                      <option value="6">No experimental transversal correlacional causal</option>
                      <option value="7">No experimental longitudinal de tendencia</option>
                      <option value="8">No experimental longitudinal de análisis evolutivo</option>
                      <option value="9">No experimental longitudinal de  panel</option>
                    </select>
                  </div>
                </div>
                
                <!-- Textarea -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="livari">Listado de variables por frecuencias</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="livari" name="livari"></textarea>
                  </div>
                </div>
                
                <!-- Textarea -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="critpob">Criterios para determinar la Pob.</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="critpob" name="critpob"></textarea>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="timue">Tipo de muestra</label>
                  <div class="col-md-4">
                    <select id="timue" name="timue" class="form-control">
                      <option value="1">Probabilística</option>
                      <option value="2">No probabilística</option>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="tipins">Tipo de instrumento</label>
                  <div class="col-md-4">
                    <select id="tipins" name="tipins" class="form-control">
                      <option value="1">Cuestionario</option>
                      <option value="2">Escala Liker</option>
                      <option value="3">Escala Guttman</option>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="vali">Validez</label>
                  <div class="col-md-4">
                    <select id="vali" name="vali" class="form-control">
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="conta">Contabilidad</label>
                  <div class="col-md-4">
                    <select id="conta" name="conta" class="form-control">
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>
                
               

                
                </div>
                <div class="form-group">
                        <label class="col-md-4 control-label" for="hipo">Sexo</label>
                        <div class="col-md-4">
                          <select id="hipo" name="hipo" class="form-control">
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                          </select>
                        </div>
                      </div>
                <div class="form-group">
                  <label class="col-md-4 control-label" for="hipo">Hipotesis</label>
                  <div class="col-md-4">
                    <select id="hipo" name="hipo" class="form-control">
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div>
                
                <!-- Textarea -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="tiphip">Tipo de Hipótesis Estadística</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="tiphip" name="tiphip"></textarea>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <!--<div class="form-group">
                  <label class="col-md-4 control-label" for="semi">Seminario</label>
                  <div class="col-md-4">
                    <select id="semi" name="semi" class="form-control">
                      <option value="1">Si</option>
                      <option value="2">No</option>
                    </select>
                  </div>
                </div> -->
                <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
                </fieldset>
                </form>
                
                    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                  <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>   
<script type="text/javascript" src="index1.js"></script>
</body>
</html>