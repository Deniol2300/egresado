
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
 ** This page checks the user role to redirect them to dashboard
 ** This can also done by another method by changing the
 ** redirection in result1.php from res.php to index.php which 
 ** can also verify the user's login status and send them to 
 ** their dashboards.
 ****************************************************************

 */
session_start();
if($_SESSION['auth'] == "0"){
	?><script>window.location = "student/index.php"; </script><?php
}
elseif($_SESSION['auth']=="1"){
	?><script>window.location = "staff/index.php"; </script><?php
}

if($_SESSION['auth'] == "0"){
	echo '<script>window.location = "student/index.php"; </script>';
}
elseif($_SESSION['auth']=="1"){
	echo '<script>window.location = "staff/index.php"; </script>';
}