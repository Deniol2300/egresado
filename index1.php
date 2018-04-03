<?php 

/**
 ** Author: Sridhar Siva Subramanian
 ** This is a veru basic CRUD application, which I used to 
 ** demonstrate PHP in my class. Hope this helps in 
 ** understanding PHP functions, classes, CRUD DB 
 ** connectivity, sessions, file upload, etc.,
 ** This is just a begginers demo. Upload the sql dump into 
 ** your database before eunning this project
  
 **************************************************************** 
 ** This is the starting point of the application, the login page
 ** The form data is sent to results.php page.
 ****************************************************************

 */



require_once("functions/config/conexion.php");
require_once("functions/session.php");
session_start();
	

//si la cesion esta iniciada lo redirecciona al student/index.php
if(isset($_SESSION["auth"])){
	if($_SESSION['auth'] == "0"){
		echo '<script>window.location = "student/index.php"; </script>';
	}
	elseif($_SESSION['auth']=="1"){
		echo '<script>window.location = "staff/index.php"; </script>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ingreso al Sistema</title>

			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/datepicker3.css" rel="stylesheet">
			<link href="css/bootstrap-table.css" rel="stylesheet">
			<link href="css/styles.css" rel="stylesheet">

			<script src="js/lumino.glyphs.js"></script>

			

</head>

<body>
	<p id="error"></p>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Ingreso al Sistema</div>
				<div class="panel-body">
					<form role="form" action="result1.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Codigo Universitario /User" name="user" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="DNI/Password" name="password" type="password" value="">
							</div>
							
							<button name="submit" class="btn btn-primary">Ingresar</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
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