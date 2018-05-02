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
     
	  if($_SESSION['auth']=="0")
	  {
		  header('Location: ../student/index.php');
	  }
    
}
else
{
    session_destroy();
    header('Location: ../index1.php');
}
$user_id=$_SESSION['user'];

head();
?>

<link href="../css/font-awesome.css" rel="stylesheet">
<body>
	<?php 
		navbar(); 
		sidebar();
		$crumb = "Dashboard";
		breadcrumb($crumb);
		
?>
			<div class="row">
			<div class="col-lg-12">
				<h2>Bienvenido Administrador!</h2>
			</div>
			
			<!-- <div class="col-md-12">
				<div class="panel panel-blue">
					<div class="panel-heading dark-overlay">Status</div>
					<div class="panel-body">
						<p>Escoga opciones de la barra lateral</p>
					</div>
				</div>
			</div><!--/.col-->			 
			<!-- <div class="col-md-6">
			</div> -->
		<!-- <div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading dark-overlay">TAREAS</div>
					<div class="panel-body">
						<!-- <?php     
                       	$selectann=mysqli_query($con,"SELECT * from assignment WHERE submit_to='$user_id' ORDER BY id DESC");
   						while($row=mysqli_fetch_array($selectann))
						{
							$title=$row[3];
							$posted=$row[1];
							$sub_time=$row[5];
							$link='../student/uploads/'.$row[4];
							
                        ?>
                        	<a href='<?php echo $link;?>'><h4><?php echo $title." - ".$posted; ?></h4></a><br>
                        <?php
                         } ?> -->
					<!-- </div>
				</div> -->

		<div class="row text-center pad-top">
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="addstu.php" >
 							<i class="fa fa-user fa-5x"></i>
                      <h4>Egresados </h4>
                      </a>
                      </div>         
                  </div> 

				 
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="addstaff.php" >
							 <i class="fa fa-user fa-5x"></i>
                      <h4>Informacion Academica</h4>
                      </a>
                      </div>
                                                             
                  </div> 
				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="addsubject.php" >
 							<i class="fa fa-clipboard fa-5x"></i>
                      <h4>Informacion Laboral</h4>
                      </a>
                      </div>
                     
                     
                  </div>

			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="../encuesta1.php" >
 							<i class="fa fa-comments-o fa-5x"></i>
                      <h4>Encuesta 2018</h4>
                      </a>
                      </div>
     
                     
                  </div>

				  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="../Encuesta_2_formulario.php" >
 							<i class="fa fa-comments-o fa-5x"></i>
                      <h4>Encuesta 2018-I</h4>
                      </a>
                      </div>
     
                     
                  </div>


			</div>
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