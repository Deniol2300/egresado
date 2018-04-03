<?php

session_start();

unset($_SESSION['user']);
unset($_SESSION['auth']);
$url = "../index1.php";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}

//header( "refresh:10;url=../index.php" );

?>
<script>
setTimeout(function () {
   window.location.href = "../index1.php"; 
}, 10000);
</script>   