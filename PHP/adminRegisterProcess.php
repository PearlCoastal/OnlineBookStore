<html>
<head>
<title></title>
<meta charset="utf-8"/>
</head>
<?php

	$RealName = $_POST['RealName'];
	$AdministratorName = $_POST['AdministratorName'];
	$AdministratorPWD = $_POST['AdministratorPWD'];
	$ConfirmPwd = $_POST['ConfirmPwd'];
	$salt = substr(uniqid(rand()),-6);
	$AdministratorPWD = md5(md5($AdministratorPWD).$salt);
	$ConfirmPwd = md5(md5($ConfirmPwd).$salt);
	
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($conn){
				mysql_query("set names utf8",$conn) or die(mysql_errno());
				mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
				$flag = "SELECT adminName FROM `adminInfo` where adminName=‘$AdministratorName’;";
				$result = mysql_query($flag,$conn);	
				if($result)   //用户名在数据库中已经存在
				{
					//header("Location:adminRegister.php?errno=16");	
					//exit();
				}
				else if($AdministratorPWD!=$ConfirmPwd)
				{
					header("Location:adminRegister.php?errno=15");
					exit();
				}
				else{
				$sql = "insert into adminInfo (realName,adminName,adminPwd,adminSalt) values('$RealName','$AdministratorName','$AdministratorPWD','$salt');";		
				//echo $sql;
				$res = mysql_query($sql,$conn);	
				@$row = mysql_fetch_assoc($res);
				header("Location:adzhucechenggong.html?AdministratorName=$AdministratorName,AdministratorPWD=$AdministratorPWD");		
				exit();
				@mysql_free_result($res);
				mysql_close($conn);
				}
		}
				
	else{
		die("数据库连接失败".mysql_errno());
		}
?>
</html>