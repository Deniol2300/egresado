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
		$crumb = "Add Staff";
		breadcrumb($crumb);
		$headervariable="Add a new staff";
		headervalue($headervariable);

		echo '
		<div class="col-lg-12">
			<div class="panel panel-info">
				<div class="panel-heading">Enter Details</div>
				<div class="panel-body">
					<div class="col-md-6">
						<form role="form" action="" method="post">
							<div class="form-group">
									<label>Staff ID</label>
									<input class="form-control" placeholder="10 digit staff id" type="text" name="staffid">
							</div>
																
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control" placeholder="Example : John Doe" name="staffname">
							</div>

							<div class="form-group">
								<label>Date of joining</label>
								<input type="date" class="form-control" name="doj">
							</div>

							<div class="form-group">
									<label>Department</label>
									<select class="form-control" name="department">
										<option value="1001">CA</option>
										
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
		
 scripts();?>
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
      
        $staffid=$_POST["staffid"];
        $staffname=$_POST["staffname"];
        $doj=$_POST["doj"];
        $department=$_POST["department"];
        $mobile=$_POST["mobile"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $password=md5("staffpassword");
        $authority="1";


        $sql=mysqli_query($con,"INSERT INTO staff(staffid,name,doj,department,mobile,address,email) values('$staffid','$staffname','$doj','$department','$mobile','$address','$email')");
		$sql1=mysqli_query($con,"INSERT INTO user(username,password,auth) values('$staffid','$password','$authority') ");
    	
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