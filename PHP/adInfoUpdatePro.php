<?php
	$AdministratorName = $_POST['AdministratorName'];
	$OriginPWD = $_POST['OriginPWD'];
	$NewPwd = $_POST['NewPwd'];
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($conn){
		session_start();
		$_SESSION['isLogin'] = false;	
		mysql_query("set names utf8",$conn) or die(mysql_errno());
		mysql_select_db("app_ytuebookStore",$conn) or die(mysql_errno());
		$sql = "select adminName,adminPwd,adminSalt from adminInfo where AdminName='$AdministratorName';";	
		//echo $sql;
		$res = mysql_query($sql,$conn);	
		$row = mysql_fetch_assoc($res);
		if($row)
		{
			if($row['adminPwd']!=md5(md5($OriginPWD).$row['adminSalt']))
			{
				header("Location:adInfoUpdate.php?errno=15");
				exit();
			}
		
		
			else if($OriginPWD == $NewPwd)
			{
				header("Location:adInfoUpdate.php?errno=16");
				exit();	
																	
			}
			
			else if($OriginPWD == '')
			{
				header("Location:adInfoUpdate.php?errno=13");
				exit();
			}
			
			else if($NewPwd == '')
			{
				header("Location:adInfoUpdate.php?errno=14");
				exit();
			}
			
			else
			{
				$salt = substr(uniqid(rand()),-6);
	            $NewPwd = md5(md5($NewPwd).$salt);	
				$sql = "update adminInfo set adminPwd='$NewPwd',adminSalt='$salt' where adminName='$AdministratorName';";		
				//echo $sql;
				$res = mysql_query($sql,$conn);	
				@$row = mysql_fetch_assoc($res);
				header("Location:adxiugaichenggong.html?name=$AdministratorName");
				exit();
				mysql_free_result($res);
				mysql_close($conn);
			}	
		}
		else 
			{
				if( $AdministratorName =='')
				{	
					header("Location:adminLogin.php?errno=11");	
					exit();
				}	
				else
				{
					
					header("Location:adminLogin.php?errno=12");				
					exit();
				}
			}
		
	}
	else{
		die("数据库连接失败".mysql_errno());
		}

?>