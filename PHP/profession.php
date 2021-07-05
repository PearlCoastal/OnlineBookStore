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
  
    <hr color="#208ed3" size=3/>
	<h3>   搜索结果如下：</h3>
	<!--  登陆框 -->
   <div class ="user">
   <span style="font-weight:bold; ">
   <?php
   @$userName = $_GET['name'];
   if($userName == "")
	echo "<a href='login.php' target='_blank' style='color: orange;font-weight: normal;font-size: large;'>登录 或 免费注册</a></span>";
else
{
	echo "<font style='color: orange;'>$userName.欢迎登陆</font>";
    echo "<br/>";
	echo "<br/>";
    echo "<a href='zhuxiaochenggong.html' style='color: orange;'>注销！</a>";
}
 ?>

 </div>
	
     <div class="book">
 <ul class="faceul">
 <li><a href="book1.html" target="_blank"><img src="images/book4.png"/></a><p><a href="book1.html" target="_blank">Java从入门到精通 第3版 java教程书籍编程思想核心实例 计算机自学书籍 Java经典教材 java编程实战案例 (附光盘)</a></p><hr color="orange" size=5 width="700px"/></li>
 <li><img src="images/book6.png"/><p><a href="#">编程之美——微软技术面试心得 计算机编程教学类书籍 收集了60道微软技术面试题 引导读者思考 软件工程师职场手册</a></p><hr color="orange" size=5 width="700px"/></li>
 <li><img src="images/book5.png"/><p><a href="#">UML 软件建模教程</a></p><hr color="orange" size=5 width="700px"/></li>
 
 
 
 </ul>
 
 
 </div>
 
 <div class="bottom">
 <hr color="#208ed3" width=1000 size=5>
 <p align="center">地址：中国山东省烟台市莱山区清泉路30号  邮编：264005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:fei_fei_sun@sina.com" target="_blank">管理员信箱</a></p>
 <br>
 
 </div>
 
  </body>
</html>
