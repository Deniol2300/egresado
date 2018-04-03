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


head();
?>

<body>
	<?php 
		navbar(); 
		sidebar_student();
		$crumb = "Informacion Academica";
		//Submit
		breadcrumb($crumb);
		$headervariable="Informacion Academica(en proceso)";
		headervalue($headervariable);

?>
			<!-- <div class="col-lg-12">
			<div class="panel panel-info">
				<div class="panel-heading">Enter Details</div><p id="error"></p>
				<div class="panel-body">
					<div class="col-md-6">
						<form role="form" action="" method="POST" enctype="multipart/form-data">
							<div class="form-group">
									<label>Title</label>
									<input class="form-control"  type="text" name="title">
							</div>
																
							<div class="form-group">
									<label>Submit to</label>
									<select class="form-control" name="staff">
										<option value="">--Choose a Type--</option>
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
								<label>File input</label>
								<input type="file" name="uploaded">
								 <p class="help-block">Upload only .docx, .pptx, .pdf files</p>
							</div>

							<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary">Submit Button</button>
							<button type="reset" name="reset" class="btn btn-default">Reset Button</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->
		
	
		
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
if(isset($_POST['submit'])){


	$title=$_POST['title'];
	$username=$_SESSION['user'];
	$staff=$_POST['staff'];

 $target = "uploads/"; 
 //$target = $target . basename( $_FILES['uploaded']['name']) ; 
 $ok=1; 
 
 //This is our size condition 
 if ($uploaded_size > 10485760) 
 { 
 echo "Your file is too large.<br>"; 
 $ok=0; 
 } 
 
 //This is our limit file type condition 
 if (($uploaded_type =="application/pdf")||($uploaded_type =="application/msword")||($uploaded_type =="application/vnd.ms-powerpoint"))
 { 
 echo "Format not supported<br>"; 
 $ok=0; 
 } 
 
 //Here we check that $ok was not set to 0 by an error 
 if ($ok==0) 
 { 
 Echo "Sorry your file was not uploaded"; 
 } 
 
 //If everything is ok we try to upload it 
 else 
 { 


$randString = md5(time()); //encode the timestamp - returns a 32 chars long string
  $fileName = $_FILES["uploaded"]["name"]; //the original file name
  $splitName = explode(".", $fileName); //split the file name by the dot
  $fileExt = end($splitName); //get the file extension
  $newFileName  = strtolower($randString.'.'.$fileExt);
  $target = $target . basename( $newFileName) ; 


 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 { 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded"; 


$sql1=mysqli_query($con,"INSERT INTO assignment(username,submit_to,topic,link) values('$username','$staff','$title','$newFileName') ");

if($sql1){
	echo '<script type="text/javascript">
                var e = document.getElementById("error").innerHTML = "<font color=green><b>Success!</font></b>";</script>';
}



 } 
 else 
 { 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 } 

}
 ?>