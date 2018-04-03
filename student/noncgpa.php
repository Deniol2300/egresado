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
$usern=$_SESSION['user'];

head();
?>

<body>
	<?php 
		navbar(); 
		sidebar_student();
		$crumb = "Informacion Personal";
		//Non-CGPA
		breadcrumb($crumb);
		$headervariable="Detalles(en proceso)";
		headervalue($headervariable);
?>
		<!-- <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Status Details</div>
					<div class="panel-body">
						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="state" >Code</th>
						        <th data-field="id" data-sortable="true">Group</th>
						        <th data-field="name"  data-sortable="true">Started on</th>
						        <th data-field="price" data-sortable="true">Completed on</th>
						        <th data-field="price" data-sortable="true">Status</th>
						    </tr>
						    </thead>
						    <tr>
						    <?php     
                       	$selectann=mysqli_query($con,"SELECT * from noncgpa WHERE stu_id='$usern'");
   						while($row=mysqli_fetch_array($selectann))
						{
							$code=$row[2];
							$group=$row[3];
							$sdate=$row[4];
							$edate=$row[5];
							$stat=$row[6];
							
                        ?>
                        	<td data-field="state" ><?php echo $code;?></td>
						        <td data-field="id" data-sortable="true"><?php echo $group;?></td>
						        <td data-field="name"  data-sortable="true"><?php echo $sdate;?></td>
						        <td data-field="price" data-sortable="true"><?php echo $edate;?></td>
						        <td data-field="price" data-sortable="true"><?php echo $stat;?></td>
						        </tr>
                        <?php
                         } ?>
						    
						</table>
					</div>
				</div>
			</div>
		</div> -->
	
		
	<?php scripts();?>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
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
