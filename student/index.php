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
session_start();
if(($_SESSION['user']!="")&&($_SESSION['auth']!=""))
{
     
	  if($_SESSION['auth']=="1")
	  {
		  header('Location: ../staff/index.php'); 
	  }
}
else
{
    session_destroy();
    header('Location: ../index1.php');
}
//parte en la que salia un mensaje en el dasboard de student

// $usern=$_SESSION['user'];

//     $sql_command="SELECT class_id FROM students WHERE stuid = '$usern'";
// $result = mysqli_query($con,$sql_command);
//     $rows = mysqli_num_rows($result);
//     if ($rows == 1) {
//         $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//         $clsid = $row['class_id'];
//     }
head();
?>
<!-- <link href="css/bootstrap.min.css" rel="stylesheet">
<link href="../css/datepicker3.css" rel="stylesheet">
<link href="../css/bootstrap-table.css" rel="stylesheet">
<link href="../css/styles.css" rel="stylesheet"> -->
<link href="../css/font-awesome.css" rel="stylesheet">
<!-- <link href="../css/custom.css" rel="stylesheet"> -->


<script src="../js/lumino.glyphs.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
<body>
	<?php 
		navbar(); 
		sidebar_student();
		$crumb = "Dashboard";
		breadcrumb($crumb);
		$headervariable="Bienvenido";
		headervalue($headervariable);
?>
			<div class="row">
			<div class="col-lg-12">
				<h2>Elementos que necesita ver</h2>
			</div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="../encuesta1.php" >
 <i class="fa fa-comments-o fa-5x"></i>
                      <h4>Encuesta 2018</h4>
                      </a>
                      </div>
                     
                     
                  </div>
			
			<!-- <div class="col-md-6">	
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Anuncios de asignatura</div>
					<div class="panel-body">	

					<?php     
                       	$selectann=mysqli_query($con,"SELECT * from notifications WHERE type='2' AND class_id='$clsid' ORDER BY `notifications`.`id` DESC");
                       	$count=0;
   						while($row=mysqli_fetch_array($selectann))
						{
							$title=$row[2];
							$link=$row[5];
							$count++;
                        ?>
						<a href="<?php echo '../staff/uploads/'.$link; ?>"><h4><?php echo $title; ?></h4></a><br>			


                        <?php
                        if($count>=2){
								break;
							} } ?>
					</div>
				</div>
			</div> -->
			<!--/.col-->
			
			<!-- <div class="col-md-6">
				<div class="panel panel-teal">
					<div class="panel-heading dark-overlay">Anuncios Generales</div>
					<div class="panel-body">
						<?php     
                       	$selectann=mysqli_query($con,"SELECT * from notifications WHERE class_id='all' ORDER BY `notifications`.`id` DESC");
                       	$count=0;
   						while($row=mysqli_fetch_array($selectann))
						{
							$title=$row[2];
							$link=$row[5];
							$count++;
                        ?>
						<a href="<?php echo '../staff/uploads/'.$link; ?>"><h4><?php echo $title; ?></h4></a><br>			


                        <?php
                        if($count>=2){
								break;
							} } ?>
					</div>
				</div>
			</div> -->
			<!--/.col-->
			
			<!-- <div class="col-md-6">
				<div class="panel panel-orange">
					<div class="panel-heading dark-overlay">Anuncios de Clase</div>
					<div class="panel-body">
						<?php     
                       	$selectann=mysqli_query($con,"SELECT * from notifications WHERE type='1'AND class_id='$clsid' ORDER BY `notifications`.`id` DESC");
                       	$count=0;
   						while($row=mysqli_fetch_array($selectann))
						{
							$title=$row[2];
							$link=$row[5];
							$count++;
                        ?>
						<a href="<?php echo '../staff/uploads/'.$link; ?>"><h4><?php echo $title; ?></h4></a><br>			


                        <?php
                        if($count>=2){
								break;
							} } ?>
					</div>
				</div>
			</div> -->
			<!--/.col-->
			
			<!-- <div class="col-md-6">
				<div class="panel panel-red">
					<div class="panel-heading dark-overlay">Importante!</div>
					<div class="panel-body">
						<?php     
                       	$selectann=mysqli_query($con,"SELECT * from notifications WHERE type='3'AND class_id='$clsid' ORDER BY `notifications`.`id` DESC");
                       	$count=0;
   						while($row=mysqli_fetch_array($selectann))
						{
							$title=$row[2];
							$link=$row[5];
							$count++;
                        ?>
						<a href="<?php echo '../staff/uploads/'.$link; ?>"><h4><?php echo $title; ?></h4></a><br>			


                        <?php
                        if($count>=2){
								break;
							} } ?>
					</div>
				</div>
			</div> -->
			<!--/.col-->
		</div>
	
		<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	<?php scripts();?>
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
