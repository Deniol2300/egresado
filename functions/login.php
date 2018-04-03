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
function user_transfer($auth) {

	if($auth==0) {
		$url = "student/index.php";
	}
	if($auth==1) {
		$url = "staff/index.php";
	}
	else{
		$url = "error.php";
	}
	if($auth==""){
		header( "../index.php" );
	}

	return $url;
}