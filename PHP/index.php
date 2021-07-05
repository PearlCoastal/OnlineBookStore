<!DOCTYPE html>
<html>
  <head>
    <title>My e-BookStore</title>
	
    <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
    <meta http-equiv="description" content="this is my page">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <!--<link rel="stylesheet" type="text/css" href="./styles.css">-->

    <link rel="stylesheet" href="主页.css" type="text/css"></link>
    <link rel="stylesheet" href="css/index.css" type="text/css"></link>
</head>
   
   <script  src="js/jquery-1.7.1.min.js"></script>
   
	
  <body>
  
  <div class="logo">My e-BookStore
  <hr color="#208ed3" size=8/>
  </div>
  <div>
  <?php
  echo "<a href='1/cartnull.php'><img src='images/package.png'/></a>";
  ?>
  </div>
  <hr color="#208ed3" size=3/>
  
   <!--  登陆框 -->
 <div class ="user">
 <span style="font-weight:bold; ">
 <?php 
  session_start();
  @$username = null;
  if(@$_SESSION['isLogin'] == false)
  {
	echo "<a href='1/login.php' target='_blank' style='color: orange;font-weight: normal;font-size: large;'>登录 或 免费注册</a></span>";
  }
  /*
else
{
	echo "<a href='userinfo.php' style='text-decoreation:none;'><font style='color: orange;'>$userName 欢迎登录</font></a>";
    echo "<br/>";
	echo "<br/>";
    echo "<a href='zhuxiaochenggong.php' style='color: orange;'>注销！</a>";
}
*/
    else if(@$_SESSION['isLogin'] == true)
				{	 
					@$username = $_SESSION['userName'];					
 					echo "<font style='color: orange;font-weight: normal;font-size: large;'>".$username."</font>"; 
 					echo "</span><br/>";
 					echo "<span><a style='color: orange;font-weight: normal;font-size: large;' href='logout.php'>退出</a></span><br/>	";
                    echo  "<a href='1/userinfo.php?username=$username'><input  type='submit' style='font-family:微软雅黑;' value='修改个人信息'></a>";			 				
 					echo "</div>";
				}
 ?>

 </div>

  
  <!-- 搜索框 -->
  <div class="search">
  <form action="search.php" method="get" name="search">
  <input name = input type="text" size=100 style="height: 37px;width:467px;margin-left: 215px;border:2px solid #208ed3;float:left;"/>
  <input name="submit" type="submit" value="搜索" style="width:100px;font-size:32.5px;background-color: #208ed3;color:white; "><br/>
   
   </form>
   <!-- 超链接框 -->
  <div style="color: #208ed3;">
  <a href="#" style="margin-left: 215px;">计算机英语书</a>
  <a href="#">Web技术与开发</a>
  <a href="#">JAVA</a>
  <a href="#">软件工程</a>
  <a href="#">Android开发</a>
  </div>
  </div>
  
  <!-- 中间主页面 top-->
 <div class ="top">
 <a href="#">今日推荐</a>
 <a href="#">限时抢购</a>
 <a href="#">二手转让</a>
 
 <hr color=" #208ed3" size=5/>
 </div>
 

  
 <!-- 左侧导航栏 -->
  <div class="navi" style="color: #208ed3;">
  <ul >
  <li>
 <font style="color: black; center">计算机英语类书籍</font><br/><br/>
  <a href="#">专业外语</a> <a href="#">专业外语</a> <a href="#">专业外语</a>
  <a href="#">专业外语</a> <a href="#">专业外语</a> <a href="#">专业外语</a>
  <a href="#">专业外语</a> <a href="#">专业外语</a> <a href="#">专业外语</a> 
  <br/>
  </li>
  
  <li>
  <font style="color: black; center">计算机专业书籍</font><br/><br/>
  <a href="#">软件工程</a> <a href="#">软件工程</a> <a href="#">软件工程</a>
  <a href="#">软件工程</a> <a href="#">软件工程</a> <a href="#">软件工程</a>
  <a href="#">软件工程</a> <a href="#">软件工程</a> <a href="#">软件工程</a>
  </li>
  </ul>
  </div>
 
 <div class="LunBo">
<ul>
<li class="CurrentPic"><img  src="images/roll.png" width="825px;" height="300px; "/></li>
<li type=none><img  src="images/roll1.png" width="825px;" height="300px; "/></li>
<li type=none><img  src="images/roll2.png" width="825px;" height="300px; "/></li>
<li type=none><img  src="images/roll3.png" width="825px;" height="300px; "/></li>
<li type=none><img  src="images/roll4.png" width="825px;" height="300px; "/></li>
<li type=none><img  src="images/roll5.png" width="825px;" height="300px; "/></li>
<li type=none><img  src="images/roll6.png" width="825px;" height="300px; "/></li>
<li type=none><img  src="images/roll7.png" width="825px;" height="300px; "/></li>



</ul>
<div class="LunBoNum">
<span class="CurrentNum" style="margin-left:310px;">&nbsp;ｏ&nbsp;</span>
<span>&nbsp;ｏ&nbsp;</span>
<span>&nbsp;ｏ&nbsp;</span>
<span>&nbsp;ｏ&nbsp;</span>
<span>&nbsp;ｏ&nbsp;</span>
<span>&nbsp;ｏ&nbsp;</span>
<span>&nbsp;ｏ&nbsp;</span>
<span>&nbsp;ｏ&nbsp;</span>

</div>
</div>
<script type="text/javascript" language="javascript">
var PicTotal = 8;
var CurrentIndex;
var ToDisplayPicNumber = 0;
$("div.LunBo div.LunBoNum span").click(DisplayPic);
function DisplayPic() {
// 测试是父亲的第几个儿子
CurrentIndex = $(this).index();
// 删除所有同级兄弟的类属性
$(this).parent().children().removeClass("CurrentNum")
// 为当前元素添加类
$(this).addClass("CurrentNum");
// 隐藏全部图片
var Pic = $(this).parent().parent().children("ul");
$(Pic).children().hide();
// 显示指定图片
$(Pic).children("li").eq(CurrentIndex).show();
}
function PicNumClick() {
$("div.LunBo div.LunBoNum span").eq(ToDisplayPicNumber).trigger("click");
ToDisplayPicNumber = (ToDisplayPicNumber + 1) % PicTotal;
setTimeout("PicNumClick()",2000);
}
setTimeout("PicNumClick()",2000);
</script> 

<hr color="#208ed3" size=3/>
 
 
 
 
 
 <?php 
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if($conn){
		mysql_query("set names utf8",$conn) or die(mysql_errno());
		mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
		$sql = "select bookid,bookname,bookcover,bookprice from bookinfo;";		
		$res = mysql_query($sql,$conn);				
		while($row = mysql_fetch_assoc($res))
		{	
			$Gid = $row['bookid'];
			echo "<div class='book'>";
			echo "<ul class='faceul'>";
			echo "<li><a href='1/book.php?Gid=$Gid'><img align=center vspace=10 hspace=20 style='width:300px;height:300px;' src='".$row['bookcover']."'width='100' height='100'/><br/>";
			echo "<font style='color:orange;'>书名：".$row['bookname'];
			echo "<br/>";
			echo "单价：".$row['bookprice']."</font>";
			echo "<span class='new-txt-price'' style='color:F76120'></span>";
			echo "<hr color='#208ed3' size=5>";
			echo "</span>";
			echo "</span>";
			echo "</a>";
			echo "</ul>";
            echo "</div>";			
		}
			mysql_free_result($res);
			mysql_close($conn);
	}
	else{
		die("数据库连接失败".mysql_errno());
		}

?>
 
 <div class="bottom">
 <hr color="#208ed3" width=1000 size=5>
 <p align="center">地址：中国山东省烟台市莱山区清泉路30号  邮编：264005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:fei_fei_sun@sina.com" target="_blank">管理员信箱</a> <a href="adminlogin.php">管理员入口</a></p>
 

 <br>
 </div>
 

 
 
 
  
  <!-- 广告部分 -->
  </body>
</html>
