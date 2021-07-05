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
    echo "<a href='zhuxiaochenggong.php' style='color: orange;'>注销！</a>";
}
 ?>

 </div>
	
     <div class="book">
 <ul class="faceul">
 <li><img src="images/book1.png"/><p><a href="#">计算机英语 第4版 计算机英语教程书籍 计算机专业英语 培训教材 计算机体系结构 软件开发教程书籍 英语编程书籍</a></p><hr color="orange" size=5 width="700px"/></li>
 <li><img src="images/book2.png"/><p><a href="#">物联网专业英语教程 张强华 教材教辅 电子通信 英语 职业英语 计算机 新华书店正版畅销图书籍</a></p><hr color="orange" size=5 width="700px"/></li>
 <li><img src="images/book3.png"/><p><a href="#">计算机专业英语（高等学校计算机专业教材精选计算机基础）</a></p><hr color="orange" size=5 width="700px"/></li>
 
 
 
 </ul>
 
 
 </div>
 
 <div class="bottom">
 <hr color="#208ed3" width=1000 size=5>
 <p align="center">地址：中国山东省烟台市莱山区清泉路30号  邮编：264005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:fei_fei_sun@sina.com" target="_blank">管理员信箱</a></p>
 <br>
 
 </div>
 
  </body>
</html>
