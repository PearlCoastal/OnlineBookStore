<html>
<head>
<title>订单</title>
<link rel="stylesheet" type="text/css" href="css/cart.css" />
</head>
<body>
<div class="logo">My e-BookStore
 <hr color="#208ed3" size=8/>
 </div>
 <center>
<?php

        $Gid = $_GET['Gid'];
		
		$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		if($conn){
		mysql_query("set names utf8",$conn) or die(mysql_errno());
		mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
		$sql = "select bookprice from bookinfo where bookid='$Gid';";		
		$res = mysql_query($sql,$conn);				
		if($row = mysql_fetch_assoc($res))
		{			
	      echo"您已成功提交订单<br/>";
          echo"当前总额为：".$row['bookprice'];
          mysql_free_result($res);
		  mysql_close($conn);
	}
	else{
		die("数据库连接失败".mysql_errno());
		}
	}
?>
<br/>
<br/>
<br/>
<form action="fail.php" method="post">
<input type='submit' name='cancel' value='取消订单' style='background:#208ed3;color:#fff;width:400px;height:20px;'>
</form>

<form action="success.php" method="post">
<input type='submit' name='pay' value='确认支付' style='background:#208ed3;color:#fff;width:400px;height:20px;'>
</form>
</center>

 <div class="bottom">
 <div align="center">
  <form action="index.php" method="post">
  <input type="submit" style="color:#208ed3;"value="返回首页"/>
  </form>
</div>
 <hr color=" #208ed3" width=1000 size=5>
 <p align="center">地址：中国山东省烟台市莱山区清泉路30号  邮编：264005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:fei_fei_sun@sina.com" target="_blank">管理员信箱</a></p>
 <br/>
 
 </div>
<body>
</html>