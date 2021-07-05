<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员--My-ebook Store</title>
<link rel="stylesheet" href="css/adminStyle.css" type="text/css"></link>

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
<li class="section"><a href="#">图书管理</a></li>
<li><a href="bookupdate.php">图书修改</a></li>
<li><a href="dropBook.php">图书删除</a></li>
<li><a href="userInfoBrowse.php">浏览用户信息</a></li>
<li><a href="checkOrders.php">查看客户订单</a></li>
</ul>
</nav>

<div class="menu">


<!--
</frameset cols="30%,*">
<div class="m3">
 <img src='images/book1.png' width=100px  height=200px  /> 
 </div>
 </frameset>
-->
<div  class="printIn" >
<form method="post" action="manageBookProcess.php">
<div  >
<p>
书&nbsp;&nbsp;&nbsp;&nbsp;号: <input type="text" name="bookID"  class="form-control">
&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
书&nbsp;&nbsp;&nbsp;&nbsp;名:&nbsp;<input type="text" name="bookName"  class="form-control">
&nbsp;*
</p>
</div>

<p>
作&nbsp;&nbsp;&nbsp;&nbsp;者: <input type="text" name="bookAuthor"  class="form-control">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
类&nbsp;&nbsp;&nbsp;&nbsp;别: <input type="text" name="bookClassify"  class="form-control">
&nbsp;*
</p>

<p>
出版社: <input type="text" name="bookPress"   class="form-control">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
日&nbsp;&nbsp;&nbsp;&nbsp;期:&nbsp;<input type="text" name="bookDate"  class="form-control">
</p>


<!-- -->
<p>
封&nbsp;&nbsp;&nbsp;&nbsp;面: <input type="text" name="bookCover"  class="form-control">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
价&nbsp;&nbsp;&nbsp;&nbsp;格: <input type="text" name="bookPrice" class="form-control">
&nbsp;*
</p>
<div class="YoN">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
是否推荐:
<input type="radio" name="recommend" value="yes">是
<input type="radio" name="recommend" value="no">否
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
是否新书:
<input type="radio" name="new" value="yes">是
<input type="radio" name="new" value="no">否
</div>
</div>
<br><br>
<center>
<label>图书简介: <textarea name="bookDetail" rows="8" cols="80"  class="textarea" ></textarea>
</center>
<br><br>
<center>
<!--
<button class="buttonType" type="submit">确定</button> 
<button class="buttonType" type="reset">重置</button>   -->
<div>
<input type="submit" name="submit" value="保存" class="buttonType" > 
<input type="reset" name="重置" value="重置"  class="buttonType" > 
<!--<input type="submit" name="submit" value="返回"  class="buttonType" >  -->
</center>
<center>
<?php
@$errno = $_GET['errno'];
	if($errno != NULL)
	{
		if($errno == 11)
			echo "<font style='color:red;'>书号是必填项！</font>";
		else if($errno == 12)
			echo "<font style='color:red;'>书名是必填项！</font>";
		else if($errno == 13)
			echo "<font style='color:red;'>分类是必填项！</font>";
		else if($errno == 14)
			echo "<font style='color:red;'>价格是必填项！</font>";
		else{}
							
	}		
?>
</center>
</form>
</div>

</body>
</html>