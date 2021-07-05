<?php 
?>
<html>
<head>
<title>修改进程</title>
<meta charset="utf-8"/>
<meta http-equiv="refresh" content="2;url=http://localhost:81/bookStore/updatechenggong.php" charset="utf-8">
</head>

<?php


		
		 @$bookID = $_POST['bookID'];
	     @$bookName = $_POST['bookName'];
	     @$bookAuthor = $_POST['bookAuthor'];
	     @$bookClassify = $_POST['bookClassify'];
	     @$bookPress = $_POST['bookPress'];
		$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		
		if (!$conn)
         {
           die('Could not connect: ' . mysql_error());
         }

          mysql_select_db("app_ytuebookstore", $conn);
          $sql="UPDATE bookinfo SET  bookID='$bookID',bookName='$bookName',bookAuthor='$bookAuthor',
		  bookClassify='$bookClassify',bookPress='$bookPress' ;";
		  echo $sql;
          //mysql_query("UPDATE bookinfo SET  bookID='$bookID',bookName='$bookName',bookAuthor='$bookAuthor',
		 // bookClassify='$bookClassify',bookPress='booPress' ;");
          //header("Location:updateresult.php");
		  //exit();
		  //mysql_free_result($res);
          mysql_close($conn);
	     
         
		
		
		
		
		
		
		/*
		if($conn){
					if($bookID != NULL && $newbookID != NULL)
					{
						mysql_query("set names utf8",$conn) or die(mysql_errno());
						mysql_select_db("bookStore",$conn) or die(mysql_errno());
						$sql = "UPDATE bookinfo SET  bookID='$bookID';";
                         echo $sql;						
						//$res = mysql_query($sql,$conn);				
						//header("Location:updateresult.php");
						//exit();
						//mysql_free_result($res);
						//mysql_close($conn);
					}
					else if($bookName != NULL && $newbookName != NULL)
					{
						mysql_query("set names utf8",$conn) or die(mysql_errno());
						mysql_select_db("yanda",$conn) or die(mysql_errno());
						$sql = "UPDATE bookinfo SET bookName='$bookName';";		
						$res = mysql_query($sql,$conn);				
						header("Location:updateresult.php");
						exit();
						mysql_free_result($res);
						mysql_close($conn);
					}
					else if($bookAuthor != NULL && $newbookAuthor != NULL)
					{
						mysql_query("set names utf8",$conn) or die(mysql_errno());
						mysql_select_db("yanda",$conn) or die(mysql_errno());
						$sql = "UPDATE bookinfo SET bookAuthor='$bookAuthor';";		
						$res = mysql_query($sql,$conn);				
						header("Location:updateresult.php");
						exit();
						mysql_free_result($res);
						mysql_close($conn);
					}
					else if($bookClassify != NULL && $newbookClassify != NULL)
					{
						mysql_query("set names utf8",$conn) or die(mysql_errno());
						mysql_select_db("yanda",$conn) or die(mysql_errno());
						$sql = "UPDATE bookinfo SET bookClassify='$bookClassify';";		
						$res = mysql_query($sql,$conn);				
						header("Location:updateresult.php");
						exit();
						mysql_free_result($res);
						mysql_close($conn);
					}
					else if($bookPress != NULL && $newbookPress != NULL)
					{
						mysql_query("set names utf8",$conn) or die(mysql_errno());
						mysql_select_db("yanda",$conn) or die(mysql_errno());
						$sql = "UPDATE bookinfo SET  bookPress='booPress' ;";		
						$res = mysql_query($sql,$conn);				
						header("Location:updateresult.php");
						exit();
						mysql_free_result($res);
						mysql_close($conn);
					}
					else
					{
						header("Location:bookupdate.php?errno=1");						
					}
				}
	else{
		die("数据库连接失败".mysql_errno());
		}
		
		*/
?>
</html>
<?php
?>