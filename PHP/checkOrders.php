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
<li><a href="userInfoBrowse.php">浏览用户信息</a></li>
<li class="section"><a href="#">查看客户订单</a></li>
</ul>
</nav>

<div class="menu2">

<table width="960px" height="400px" align="center" border="1" bordercolor="#C0C0C0" cellspacing="0" cellpadding="0">
<tbody><tr align="center">
<td>客户姓名</td><td width="120px" height="50px">书名</td><td width="120px" height="50px">单价</td><td width="120px" height="50px">订购数量</td><td width="120px" height="50px">总金额</td>
<td width="120px" height="50px">订购时间</td><td width="120px" height="50px">是否发货</td><td width="120px" height="50px">信息</td></tr>

<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td> <td></td></tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
<tr align="center"><td></td><td></td><td></td><td></td><td></td><td></td> <td><input type="checkbox"></td><td></td> </tr>
</div>
</body>
</html>