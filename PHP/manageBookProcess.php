<?php
	$bookID = $_POST['bookID'];
	$bookName = $_POST['bookName'];
	$bookAuthor= $_POST['bookAuthor'];
	$bookClassify=$_POST['bookClassify'];
	$bookPress =  $_POST['bookPress'];
	$bookDate =  $_POST['bookDate'];
	$bookCover =  $_POST['bookCover'];
	$bookPrice =  $_POST['bookPrice'];
	$bookDetail =  $_POST['bookDetail'];
	$conn =mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if(!$conn)
	{
		die('cound not connect:'.mysql_error());
	}
	else
	{
		if($bookID == '')
		{
			header("Location:bookManage.php?errno=11");	
			exit();
		}
		else if($bookName == '')
		{
			header("Location:bookManage.php?errno=12");	
			exit();
		}
		else if($bookClassify == '')
		{
			header("Location:bookManage.php?errno=13");	
			exit();
		}
		else if($bookPrice == '')
		{
			header("Location:bookManage.php?errno=14");	
			exit();
		}
		else
		{
		   mysql_query("set names utf8",$conn) or die(mysql_errno());
		   mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
		   $sql= "INSERT  INTO bookInfo(bookID,bookName,bookAuthor,bookClassify,bookPress,
		bookDate,bookCover,bookPrice,bookDetail)  Values('$bookID','$bookName','$bookAuthor','$bookClassify','$bookPress',
		'$bookDate','$bookCover','$bookPrice','$bookDetail');";		
		   //echo $sql;
		   $res = mysql_query($sql);

		   /*if(!mysql_query($sql,$conn))
		   {
			die('error:'.mysql_error());
		   }*/
		/*else{*/
		    header("Location:charuchenggong.html");
		    exit();
			mysql_free_result($res);
			mysql_close($conn);
		/*}*/
		}	
	
	}
		
	
	
		
?>