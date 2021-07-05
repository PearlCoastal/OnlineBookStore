<?php
	$bookID = $_POST['bookID'];
	$bookName = $_POST['bookName'];
	$bookAuthor= $_POST['bookAuthor'];
	$bookClassify=$_POST['bookClassify'];
	$bookPress =  $_POST['bookPress'];
	$conn =mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

        mysql_select_db("app_ytuebookstore", $conn);

        mysql_query("DELETE FROM bookinfo WHERE  (bookID='$bookID'||bookName='$bookName'||bookAuthor='$bookAuthor'||
		bookClassify='$bookClassify'||bookPress='$bookPress')");
		
			header("Location:http://localhost:81/bookStore/queryResult.php");
		
        mysql_free_result($res);
        mysql_close($conn);
		
		header("Location:http://localhost:81/bookStore/dropchenggong.html");
		exit();
		

		
?>