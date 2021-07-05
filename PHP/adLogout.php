<?php 
	session_start();
	session_destroy();
	unset($_SESSION);
	///session_start();	
	$_SESSION['isLogin'] = false;
	header("Location:adminLogin.php");
?>