<?php

$name = $_POST['name'];
$password = $_POST['newpwd'];


$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($conn){
		         if($name!= NULL)
				 {
					 mysql_query("set names utf8",$conn) or die(mysql_errno());
					 mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
					 $flag = "SELECT userName FROM `userInfo`;";
					 if($flag != $name)
					 {
						header("Location:userinfo.php?errno=4");//用户名不存在
                        exit();
				        mysql_free_result($res);
				        mysql_close($conn);						
					 }
					 else{
						 if($password != NULL && $address != NULL)
					     {
							 $sql = "update userInfo set userPWD='$password' where userName='$name'";		
						     $res = mysql_query($sql,$conn);				
						     header("Location:userinfo.php?errno=5");//修改成功！
                             exit();
				        mysql_free_result($res);
				        mysql_close($conn);						
					     }
					else if($password == NULL)
					{
						header("Location:userinfo.php?errno=1");//密码为空
                        exit();
				        mysql_free_result($res);
				        mysql_close($conn);						
					}
					else if($address == NULL)
					{
						header("Location:userinfo.php?errno=2");//地址为空
                        exit();
				        mysql_free_result($res);
				        mysql_close($conn);						
					}
				 }
				 }
				 else
				 {
					 header("Location:userinfo.php?errno=3"); //用户名为空	
					 exit();
				     mysql_free_result($res);
				     mysql_close($conn);
				 }
				 
				}
	else{
		die("数据库连接失败".mysql_errno());
		}
?>
</html>
