
<?php

	$userName = $_POST['name'];
	$Email = $_POST['address'];
	$telephone = $_POST['phoneno'];
	$userPWD = $_POST['password'];
	
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($conn){
				mysql_query("set names utf8",$conn) or die(mysql_errno());
				mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
				echo "ok";
				
					$sql = "insert into userInfo (userName,email,telephone,userPwd) values('$userName','$Email','$telephone','$userPWD');";	
				    
				
				    $res = mysql_query($sql,$conn);	
				    $row = mysql_fetch_assoc($res);
				
				
				    header("Location:1/zhucechenggong.php?userName=$userName");
				    exit();
				    mysql_free_result($res);
				    mysql_close($conn);
				
		}
				
	else{
		die("数据库连接失败".mysql_errno());
		}
?>