<!DOCTYPE html>
<html>
  <head>
    
	
    <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
    <meta http-equiv="description" content="this is my page">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    
    <link rel="stylesheet" type="text/css" href="css/index.css">

  </head>
  
  <body>
   <div class="logo">My e-BookStore
    <hr color="#208ed3" size=8/>
    </div>
  <h3 style="text-align:center;">维护个人信息</h3>
  <p><a href="index.php" style="style="text-decoration:none;">返回网站首页</a></p>

    <hr color="#208ed3" size=3/>
  
  <div style="margin-left:5px;">
  <?php 

				$username = null;	
				session_start();			
				if(@$_SESSION['isLogin'] == true)
				{	 
					$username = $_SESSION['userName'];					
 					echo "<font style='color:orange;'>".$username."的个人信息修改</font><br><br>"; 
 					echo "<span style='background-color:#208ed3'><a style='color: orange;font-weight: normal;font-size: large;' href='logout.php'>退出</a></span><br/>	";
 					echo "<br/>";
 				
				}
 				else 
 				{
					
					echo "<font >您尚未登录</font><a href='login.php'><input  type='submit' style='color: orange;font-weight: normal;font-size: large;' value='请登录'></a>";			 				
 					echo "</div>"; 			
 				}
				
?>
  
  
  
  
  
 
  
  <div style="margin-top:100px; margin-right:50px;margin-left:100px;font-size:22px;">
   <form action="userinfoprocessor.php"  method="post">
  <?php "<p >姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:&nbsp;&nbsp;<input  name='name' style='height:25px;width:250px;' type='text' placeholder=".$username."/></p>" ?>
   
   <p>修改密码:&nbsp;<input  name="newpwd" type="password"  style="height:25px;width:250px;" placeholder="密码"/></p>
   
   <p>出生年月:&nbsp;<input type="date" name="birthday"  style="width:250px"/></p>
   
   <p>性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：<input style="height:25px;" type="radio" name="sex"/>男<input type="radio" name="sex"/>女</p>
   
   
  <p><font style="float: left;"> 收货地址：</font><input  name=address style="height:25px;width:250px" rows=10; cols=30; placeholder="收货地址"/></p>
  
  <p> <input type=submit value="保存个人信息" style='background:#208ed3;color:#fff;width:250px;height:30px;'/></p>
  
   
   </form>
    </div>
   
    <?php
			@$errno = $_GET['errno'];
			if($errno != NULL)
			{
				if($errno == 1)
					echo "<font style='color:red;'>提示：密码为空，无法修改！</font>";
				else if($errno == 2)			
					echo "<font style='color:red;'>提示：地址为空！无法修改！</font>";
				else if($errno == 3)			
					echo "<font style='color:red;'>提示：用户名为空！</font>";
				else if($errno == 4)			
					echo "<font style='color:red;'>提示：用户名不存在！</font>";
				else if($errno == 5)			
					echo "<font style='color:red;'>提示：修改成功！</font>";
				
			}
	?>
  
  
    <div class="bottom">
 <hr color="#208ed3" width=1000 size=5>
 <p align="center">地址：中国山东省烟台市莱山区清泉路30号  邮编：264005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:fei_fei_sun@sina.com" target="_blank">管理员信箱</a></p>
 <br>
 
 </div>
  </body>
</html>
