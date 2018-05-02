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
    <title>AnexoII</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
</head>
<body>
        <form class="form-horizontal" method="POST" action="guarda.php">
                <fieldset>
                
                <!-- Form Name -->
                <legend>I. Situación laboral</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">1. ¿Se encuentra laborando actualmente?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí &nbsp &nbsp
                    </label>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No
                    </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">2. El trabajo que está desempeñando, ¿Es su primer empleo?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí &nbsp &nbsp
                    </label>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No (pase a la pregunta 6)
                    </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">3. ¿El trabajo que desempeñas es en tu especialidad?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí &nbsp &nbsp
                    </label>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No
                    </label>
                    </div>
                  </div>
                </div>

                <legend>Para egresados en Ciencias de la Salud</legend>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">4. ¿Has concluido tu residentado?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí &nbsp &nbsp
                    </label>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No &nbsp &nbsp
                    </label>
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Lo estoy realizando
                    </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">5. ¿Ha concluído su SERUMS?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí &nbsp &nbsp
                    </label>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No &nbsp &nbsp
                    </label>
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Lo estoy realizando
                    </label>
                    </div>
                  </div>
                </div>

                <legend>II. Prácticas preprofesionales</legend>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">6. ¿Realizó prácticas pre-profesionales o trabajó mientras cursaba sus estudios?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí &nbsp &nbsp
                    </label>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No
                    </label>
                    </div>
                  </div>
                </div>

                <legend>III. Primer empleo</legend>

                 <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">7. Señale el promedio de tiempo que estuvo buscando empleo luego de egresar de la universidad</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <select id="p7" name="p7" class="form-control">
                      <option value="0" selected disabled> Escoja una opción </option>
                      <option value="1">Menos de 3 meses</option>
                      <option value="2">De 3 a 6 meses</option>
                      <option value="3">De 6 a 9 meses</option>
                      <option value="4">Más de 9 meses</option>
                    </select>
                  </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">8. ¿Cómo accedió a su empleo?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <select id="p8" name="p8" class="form-control">
                      <option value="0" selected disabled> Escoja una opción </option>
                      <option value="1">Aviso Bolsa de empleo UNJBG</option>
                      <option value="2">Recomendación de docentes</option>
                      <option value="3">Recomendación de Administrativos</option>
                      <option value="4">Envío de CV a instituciones/empresas</option>
                      <option value="5">Avisos WEB-Buscadores de empleo</option>
                      <option value="6">Emprendio su propio negocio</option>
                      <option value="7">Familiares/amigos conocidos</option>
                      <option value="8">Bolsas de trabajo del estado</option>
                      <option value="9">Concurso público</option>
                      <option value="10">Otros</option>
                    </select>
                   </div>
                   </div>
                </div>

                <legend>IV. Satisfacción con la enseñanza</legend>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">9. Con respecto a la educación recibida, en su formación profesional, ¿Qué aspectos deberían mejorarse?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <select id="p8" name="p8" class="form-control">
                      <option value="0" selected disabled> Escoja una opción </option>
                      <option value="1">Formación académica</option>
                      <option value="2">Calidad del docente</option>
                      <option value="3">Difusión de Investigación actual sobre la especialidad</option>
                      <option value="4">Bolsa de trabajo</option>
                      <option value="5">Vínculo con el sector privado</option>
                      <option value="6">Sistema de Biblioteca</option>
                    </select>
                   </div>
                   </div>
                </div>

                <legend>V. Valoración de la especialidad</legend>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">10. ¿Se encuentra satisfecho con la carrera profesional que estudió?</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí &nbsp &nbsp
                    </label>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No
                    </label>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">11. Indique el motivo por el cual se encuentra insatisfecho con respecto a su carrera profesional</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <select id="p8" name="p8" class="form-control">
                      <option value="0" selected disabled> Escoja una opción </option>
                      <option value="1">Oferta a profesionales egresados</option>
                      <option value="2">Baja remuneración</option>
                      <option value="3">Carrera profesional poco difundida</option>
                      <option value="4">Campo laboral limitado</option>
                    </select>
                   </div>
                   </div>
                </div>

                <legend>VI. Valoración de la UNJBG</legend>

                <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">12. Si pudiese elegir nuevamente la Universidad donde realizar su carrera universitaria elegiría a la UNJBG</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <label for="edad-0">
                      <input type="radio" name="edad" id="edad-0" value="1" checked="checked">
                      Sí (Finalice su encuesta)
                    </label>
                    <br>
                    <label for="edad-1">
                      <input type="radio" name="edad" id="edad-1" value="2">
                      No (Continúe la encuesta)
                    </label>
                    </div>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-md-4 control-label" for="sexo">13. Indique la razón por la que no elegiría a la UNJBG</label>
                  <div class="col-md-4">
                  <div class="radio">
                    <select id="p8" name="p8" class="form-control">
                      
                      <option value="0" selected disabled> Escoja una opción </option>
                      <option value="1">Prestigio Institucional</option>
                      <option value="2">Infraestructura</option>
                      <option value="3">Investigación en innovación</option>
                      <option value="4">Formación Académica</option>
                      <option value="5">Calidad docente</option>
                      <option value="6">Otro</option>
                    </select>
                   </div>
                   </div>
                </div>

                
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