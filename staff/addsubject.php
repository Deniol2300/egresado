<?php
/**
 ** Author: Sridhar Siva Subramanian
 ** This is a veru basic CRUD application, which I used to 
 ** demonstrate PHP in my class. Hope this helps in 
 ** understanding PHP functions, classes, CRUD DB 
 ** connectivity, sessions, file upload, etc.,
 ** This is just a begginers demo. Upload the sql dump into 
 ** your database before eunning this project
  


 */
require_once '../functions/interfacebasic.php';
require_once '../functions/config/conexion.php';
//require_once '../functions/crud.php';

session_start();
$mysqli= getConn();
if(($_SESSION['user']!="")&&($_SESSION['auth']!=""))
{
     
	  if($_SESSION['auth']=="0")
	  {
		  header('Location: ../student/index.php');
	  }
    
}
else
{
    session_destroy();
    header('Location: ../index.php');
}

head();
?>

<body>
	<?php 
		navbar(); 
		sidebar();
		$crumb = "Informacion Laboral";
		breadcrumb($crumb);
		$headervariable="Informacion Laboral";
		headervalue($headervariable);
?>

		<!-- <div class="col-lg-12">
			<div class="panel panel-info">
				<div class="panel-heading">Enter Details</div><p id="error"></p>
				<div class="panel-body">
					<div class="col-md-6">
						<form role="form" action="" method="post">
							<div class="form-group">
									<label>Subject ID</label>
									<input class="form-control"  type="text" name="subjectid">
							</div>
																
							<div class="form-group">
								<label>Subject Name</label>
								<input type="text" class="form-control"  name="subjectname">
							</div>

							<div class="form-group">
									<label>Class</label>
									<select class="form-control" name="classid">
										<option value="">--Choose a Class--</option>
										<?php 
    
                       	$pickclass=mysqli_query($con,"SELECT class_id,class_name from class_details");
   						while($row=mysqli_fetch_array($pickclass))
						{
							$staff_id=$row[0];
							$name=$row[1];
                        ?>
									
									
                        	<option value='<?php echo $staff_id; ?>'><?php echo $name; ?></option>

                        <?php } ?>
									</select>
							</div>

							<div class="form-group">
									<label>Allocate to</label>
									<select class="form-control" name="staff">
										<option value="">--Choose a Staff--</option>
										<?php     
                       	$pickclass=mysqli_query($con,"SELECT staffid,name from staff");
   						while($row=mysqli_fetch_array($pickclass))
						{
							$staff_id=$row[0];
							$name=$row[1];
                        ?>
									
									
                        	<option value='<?php echo $staff_id; ?>'><?php echo $name; ?></option>

                        <?php } ?>
										
									</select>
							</div>

							<div class="form-group">
							<button type="submit" name="submit" value="submit" class="btn btn-primary">Submit Button</button>
							<button type="reset" name="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div> -->
        <div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Detalles</div>
				<div class="panel-body">
					<table data-toggle="table">
						 <thead>
						 <tr>
						 	<!-- <th data-field="state" >Code</th>
							<th data-field="id" data-sortable="true">id</th>
							<th data-field="name"  data-sortable="true">Nombre</th>
							<th data-field="price" data-sortable="true">Apellido Paterno</th>
							<th data-field="price" data-sortable="true">Apellido Materno</th>
							<th data-field="id" data-sortable="true">Codigo</th>
							<th data-field="id" data-sortable="true">DNI</th>
							<th data-field="id" data-sortable="true">Facultad</th>
							<th data-field="id" data-sortable="true">Escuela</th>
							<th data-field="id" data-sortable="true">Ingreso</th>
							<th data-field="id" data-sortable="true">Egreso</th>
							<th data-field="id" data-sortable="true">E mail</th> -->

							<th>ID</th>
							<th>Facultad</th>
                            <th>Escuela</th>
                            <th>Especialidad</th>
                            <th>Ingreso</th>
                            <th>Egreso</th>
                            <th>Tercio</th>
                            <th>Quinto</th>
                            <th>Bachier</th>
                            <th>Año</th>
                            <th>Titulo</th>
                            <th>Año</th>
                            <th>Maestria</th>
                            <th>Año</th>
                            <th>Doctorado</th>
                            <th>Año</th>
                            <th>Segunda Maestria</th>
                            <th>Año</th>
                            <th>Otro</th>
                            <th>Año</th>

							

						 </tr>
						 </thead>
						<tbody>
							
						
						 
						 <?php
						//  $info_stu = "SELECT id_reg,dni,cod_univ,ap_patern,ap_materno,nomb,form_registro.fac,form_registro.esc,a_ingr,a_fin,email,password,auth,facultad.nomb_fac,escuela.nomb_esc 
						//  FROM form_registro INNER JOIN facultad on form_registro.fac=facultad.id_fac INNER JOIN escuela on form_registro.esc=escuela.id_esc  ";
                         
                         $info_stu = "SELECT id_form,form_univ.facultad_id_fac,form_univ.escuela_id_esc,esp_form,ingreso,egreso,terc_sup,quin_sup,grad_bach,anio_bach,tit_prof,anio_tit,maest,anio_maest,doctorado,anio_doc,seg_esp,anio_seg,otro,anio_otr,facultad.nomb_fac,escuela.nomb_esc 
                         FROM form_univ  INNER JOIN facultad on form_univ.facultad_id_fac= facultad.id_fac INNER JOIN escuela on form_univ.escuela_id_esc = escuela.id_esc ";
                         $res_info_stu =$mysqli->query($info_stu);
							while ($studiante = $res_info_stu->fetch_object())	
							{
								//var_dump es para imprimir las propiedades de una variable
								//var_dump($studiante);
								echo '<tr>'.
									'<td>' .$studiante->id_form.'</td>'.
									'<td>' .$studiante->nomb_fac.'</td>'.
                                    '<td>' .$studiante->nomb_esc.'</td>'.
                                    '<td>' .$studiante->esp_form.'</td>'.
									'<td>' .$studiante->ingreso.'</td>'.
									'<td>' .$studiante->egreso.'</td>'.
                                    '<td>' .$studiante->terc_sup.'</td>'.
                                    '<td>' .$studiante->quin_sup.'</td>'.
                                    '<td>' .$studiante->grad_bach.'</td>'.
                                    '<td>' .$studiante->anio_bach.'</td>'.
                                    '<td>' .$studiante->tit_prof.'</td>'.
                                    '<td>' .$studiante->anio_tit.'</td>'.
                                    '<td>' .$studiante->maest.'</td>'.
                                    '<td>' .$studiante->anio_maest.'</td>'.
                                    '<td>' .$studiante->doctorado.'</td>'.
                                    '<td>' .$studiante->anio_doc.'</td>'.
                                    '<td>' .$studiante->seg_esp.'</td>'.
                                    '<td>' .$studiante->anio_seg.'</td>'.
                                    '<td>' .$studiante->otro.'</td>'.
                                    '<td>' .$studiante->anio_otr.'</td>'.
									
									'</tr>';
							}
						 ?>
						 
						 </tbody>
					</table>
				</div>
			</div>
		</div>

	</div>

		
    <?php scripts();?>
    <script src="../js/bootstrap-table.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
<?php
if(isset($_POST['submit']))
     {
        $subjectid=$_POST['subjectid'];
		$subjectname=$_POST['subjectname'];
		$classid=$_POST['classid'];
		$staff_incharge=$_POST['staff'];
        

			        $sql=mysqli_query($con,"INSERT INTO subject_details(subject_id,subject_name,class_id,staff_incharge) values('$subjectid','$subjectname','$classid','$staff_incharge')");
			        if($sql){
			        	echo '<script type="text/javascript">
                var e = document.getElementById("error").innerHTML = "<font color=green><b>Success</font></b>";</script>';
			        }
			        else{
			        	echo '<script type="text/javascript">
                var e = document.getElementById("error").innerHTML = "<font color=red><b>Sorry! an unexpected error occured</font></b>";</script>';
			        }
			        
			
		
	}
?>