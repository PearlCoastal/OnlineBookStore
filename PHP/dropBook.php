<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员--My-ebook Store</title>
<link rel="stylesheet" type="text/css" href="css/adminStyle.css"/>
</head>
<body leftmargin="200px">
<div class="top1">
<header class="main">
<h1>
<strong>My-eBookStore</strong>
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
<li class="section"><a href="#">图书删除</a></li>
<li><a href="userInfoBrowse.php">浏览用户信息</a></li>
<li><a href="checkOrders.php">查看客户订单</a></li>
</ul>
</nav>
<div class="menu">

<div class="printIn">
<br/><br/><br/>
<form name="dropcfm" action="dropcfmBook.php" method="post">
<div class="form-group">
<input name="inquiry" type="radio">按书号删除
<input name="bookID" type="text" class="form-control" value="">
<button-div>
<button class="buttonType" type="submit">确定</button> 
<button class="buttonType" type="reset">重置</button>
</button-div>
</div>

<div class="form-group">
<input name="inquiry" type="radio">按书名删除
<input name="bookName" type="text" class="form-control" value="">

<button-div>
<button class="buttonType" type="submit">确定</button> 
<button class="buttonType" type="reset">重置</button>
</button-div>
</div>

<div class="form-group">
<input name="inquiry" type="radio">按作者删除
<input name="bookAuthor"type="text" class="form-control" value="">

<button-div>
<button class="buttonType" type="submit">确定</button> 
<button class="buttonType" type="reset">重置</button>
</button-div>
</div>

<div class="form-group">
<input name="inquiry" type="radio">按分类删除
<input name="bookClassify" type="text" class="form-control" value="">

<button-div>
<button class="buttonType" type="submit">确定</button> 
<button class="buttonType" type="reset">重置</button>
</button-div>
</div>

<div class="form-group">
<input name="inquiry" type="radio">按出版社删除
<input name="bookPress" type="text" class="form-control2" value="">

<button-div>
<button class="buttonType" type="submit">确定</button> 
<button class="buttonType" type="reset">重置</button>
</button-div>
</div>
</form>



</div>
</div>

</body>
</html>