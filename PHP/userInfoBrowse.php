<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员--My-ebook Store</title>
<link rel="stylesheet" type="text/css" href="css/adminStyle.css"/>
</head>
<body>

<div class="top1">
<header class="main">
<h1><strong>My-eBookStore</strong>
<strong2>

  <?php 

				$username = null;	
				session_start();			
				if(@$_SESSION['isLogin'] == true)
				{	 
					$username = $_SESSION['name'];					
 					echo $username.",欢迎登陆"; 
 					echo "</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 					echo "<span><a style='font-family:Arial;font-weight:bold;color:#fff;' href='adLogout.php'>注销</a></span><br/>	";
				}
 				else 
 				{
 					echo "<div class='contact'  id='contact' >";
 				 	echo  "<a href='adminLogin.php'>您尚未登录,请登录</a>";			 				
 					echo "</div>"; 			
 				}
				
?>
</strong2>
</h1>
</header>
</div>
<div style="margin-top:-60px;margin-bottom:-60px">
<div id="menu-wrap">
	<ul id="menu1">
	<center>
		<li><a href="" target="_blannk">网站首页</a></li>
		<li> <a href="">个人主页</a></li>
		<li> <a href="">账号设置</a>
			<ul>
				<li class="lia"> <a href="#">个人资料查询</a>
				</li>
				<li class="lia"> <a href="adInfoUpdate.php">个人信息修改</a>
				</li>
			</ul>
		</li>
		<li><a href="">关于我们</a></li>
	</center>
	</ul>
</div>
</div>
<nav>
<ul>
<li><a href="bookInquiry.php">图书查询</a></li>
<li><a href="bookManage.php">图书管理</a></li>
<li><a href="bookupdate.php">图书修改</a></li>
<li><a href="dropBook.php">图书删除</a></li>
<li class="section"><a href="#">浏览用户信息</a></li>
<li><a href="checkOrders.php">查看客户订单</a></li>
</ul>
</nav>

<div class="chart">


<?php
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);

	if($conn){
		mysql_query("set names utf8",$conn);
		mysql_select_db("app_ytuebookstore",$conn);
		$sql = "select * from userInfo;";
		$res = mysql_query($sql);	
		$arr = array();
		while($row = mysql_fetch_array($res))
		{
			$arr[] = $row;
				
		}
			
		echo "<table style='border-color:#EFEFEF' width=90% align=center border='1px' cellpadding=10 cellspacing=0>";
		echo "<tr align=center><td width=10%>用户名</td><td width=30%>联系方式</td><td width=30%>邮  箱</td><td width=30%>地  址</td></tr>";
		for($i=0;$i<count($arr);$i++)
		{
			echo "<div class='chart'>";
			echo "<tr align=center><td>".$arr[$i]['userName']."</td><td>"
				.$arr[$i]['telephone']."</td><td>".$arr[$i]['email']
				."</td><td>".@$arr[$i]['address']."</td></tr>";
				echo"</div>";
			
		}
			
		echo "</table>";
		exit();
		mysql_free_result($res);
		mysql_close($conn);
			
	}
	/*if(!$conn)*/
	else{
		die("数据库连接失败".mysql_errno());
		}

?>
</div>
</body>
</html>