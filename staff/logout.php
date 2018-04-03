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
session_start();

unset($_SESSION['user']);
unset($_SESSION['auth']);
$url = "../index1.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
	echo "<h1> Logged out successfully </h1>";
}
session_destroy();
//header( "refresh:10;url=../index.php" );

?>
echo '<script>window.location = "../index1.php"; </script>';