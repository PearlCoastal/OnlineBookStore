<?php
	$AdministratorName = $_POST['AdministratorName'];
	$AdministratorPWD = $_POST['AdministratorPWD'];
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($conn){
		session_start();
		$_SESSION['isLogin'] = false;	
		mysql_query("set names utf8",$conn) or die(mysql_errno());
		mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
		$sql = "select adminName,adminPwd,adminSalt from adminInfo where AdminName='$AdministratorName';";	
		//echo $sql;
		$res = mysql_query($sql,$conn);	
		$row = mysql_fetch_assoc($res);
		if($row)
		{
			if($row['adminPwd']==md5(md5($AdministratorPWD).$row['adminSalt']))
			{
				$_SESSION['isLogin'] = true;
				$_SESSION['name'] = $row['adminName'];
				$AdministratorName = $row['adminName'];
				//echo $AdministratorName;
				header("Location:bookInquiry.php?name=$AdministratorName");
				exit();
				mysql_free_result($res);
				mysql_close($conn);
			}
		
		
			else 
			{
				if( $AdministratorPWD == '')
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
		else 
			{
				if( $AdministratorName =='')
				{	
					header("Location:adminLogin.php?errno=13");	
					exit();
				}	
				else
				{
					
					header("Location:adminLogin.php?errno=14");				
					exit();
				}
			}
		
	}
	else{
		die("数据库连接失败".mysql_errno());
		}

?>