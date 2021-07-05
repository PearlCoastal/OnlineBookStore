<?php
	$userName = $_POST['userName'];
	$userPwd = $_POST['userPwd'];
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($conn){
		session_start();
		$_SESSION['isLogin'] = false;	
		mysql_query("set names utf8",$conn) or die(mysql_errno());
		mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
		$sql = "select userName,userPwd from userInfo where userName='$userName';";	
		$res = mysql_query($sql,$conn);	
		$row = mysql_fetch_assoc($res);
		echo $row;
		if($row)
		{
			if($row['userPwd']==$userPwd)
			{
				
				echo $userPwd;
				$userName = $row['userName'];
				$_SESSION['isLogin'] = true;
				$_SESSION['userName'] = $row['userName'];
				header("Location:index.php?name=$userName");
				
				exit();
				mysql_free_result($res);
				mysql_close($conn);
			}
		
		
			else 
			{
				if( $userPwd == '')
				{	
					header("Location:login.php?errno=11");	
					exit();
				}	
				else
				{
					header("Location:login.php?errno=12");				
					exit();
				}														
			}
		}
		else  
			{
				if( $userName =='')
				{	
					header("Location:login.php?errno=13");	
					exit();
				}	
				else
				{
					//echo $userPwd;
					header("Location:login.php?errno=14");				
					exit();
				}
			}
		
	}
	else{
		die("数据库连接失败".mysql_errno());
		}

?>