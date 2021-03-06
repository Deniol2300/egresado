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

head();
?>

<body>
	<?php 
		navbar(); 
		sidebar();
		$crumb = "Add Student";
		breadcrumb($crumb);
		$headervariable="Add a new student";
		headervalue($headervariable);

?>
		<div class="col-lg-12">
			<div class="panel panel-info">
				<div class="panel-heading">Enter Details</div><p id="error"></p>
				<div class="panel-body">
					<div class="col-md-6">
						<form role="form" action="" method="post">
							<div class="form-group">
									<label>Student ID</label>
									<input class="form-control" placeholder="10 digit Register number" type="text" name="stuid">
							</div>
																
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control" placeholder="Example : John Doe" name="stuname">
							</div>

							<div class="form-group">
								<label>Date of birth</label>
								<input type="date" class="form-control" name="dob">
							</div>

							<div class="form-group">
									<label>Department</label>
									<select class="form-control" name="department">
										<option value="1001">CA</option>
										
									</select>
							</div>

							<div class="form-group">
									<label>Class ID</label>
									<select class="form-control" name="classid">
										<option value="">--Choose a class--</option>
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
								<label>Mobile Number</label>
								<input type="date" class="form-control" name="mobile">
							</div>

							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email">
							</div>

							<div class="form-group">
								<label>Address</label>
								<textarea class="form-control" rows="3" name="address"></textarea>
							</div>

							<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
							<button type="reset" name="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>';
		
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

<?php
if(isset($_POST['submit']))
     {
      
        $stuid=$_POST["stuid"];
        $name=$_POST["stuname"];
        $dob=$_POST["dob"];
        $department=$_POST["department"];
        $calss=$_POST["classid"];
        $mobile=$_POST["mobile"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $password=md5("studentpassword");
        $authority="0";


        $sql=mysqli_query($con,"INSERT INTO students(stuid,name,dob,mobile,department,class_id,address,email) values('$stuid','$name','$dob','$mobile',$department','$calss','$address','$email')");
		$sql1=mysqli_query($con,"INSERT INTO user(username,password,auth) values('$stuid','$password','$authority') ");
    	
		if(($sql)&&($sql1))
		{
			
			?>
			<script type="text/javascript">
                var e = document.getElementById('error').innerHTML = "<font color='green'><b>Success</font></b>";</script>
    <?php
		
	}
		else 
		{
			?>
			<script type="text/javascript">
                var e = document.getElementById('error').innerHTML = "<font color='red'><b>There's been an unexpected error!</font></b>";</script>
    <?php
			
		}
	}
?>
