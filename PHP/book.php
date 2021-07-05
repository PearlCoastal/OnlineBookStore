<!DOCTYPE html>
<html>
  <head>
    
	
    <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
    <meta http-equiv="description" content="this is my page">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <link rel="stylesheet" type="text/css" href="css/book1.css">

  </head>
  
  <body>
   <div class="logo">My e-BookStore
  <hr size=10 color=" #208ed3"/> 
  </div>
  
  
  
    <!--  登陆框 -->
 <div class ="user">
 <span style="font-weight:bold; ">
 <?php
  session_start();	
  //@$userName = $_GET['name'];
  $username = null;
  if($_SESSION['isLogin'] == false)
  {
	echo "<a href='login.php' target='_blank' style='color: orange;font-weight: normal;font-size: large;'>登录 或 免费注册</a></span>";
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
					$username = $_SESSION['userName'];					
 					echo "<font style='color: orange;font-weight: normal;font-size: large;'>".$username."</font>"; 
 					echo "</span><br/>";
 					echo "<span><a style='color: orange;font-weight: normal;font-size: large;' href='logout.php'>退出</a></span><br/>	";
 				 	echo  "<a href='userinfo.php?username=$username'><input  type='submit' style='font-family:微软雅黑;' value='修改个人信息'></a>";			 				
 					echo "</div>";
				}
 ?>

 </div>

  
  <!-- 搜索框 -->
  <div class="search">
  
  <input name=searchinput size=100 style="height: 37px;width:467px;margin-left: 215px;border:2px solid #208ed3;"/>
  <a href="#" style="text-decoration: none;"><span style="font-size:32.5px;background-color: #208ed3;color:white;position:relative;right:5px;top:8px; ">搜   索 </span></a><br/>
 <hr color=" #208ed3" width=1000 size=5>
 
  </div>
  
  <div style="background-color: white;">
  
  <?php 
        $Gid = $_GET['Gid'];
		
		
		$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		if($conn){
		mysql_query("set names utf8",$conn) or die(mysql_errno());
		mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
		$sql = "select bookname,bookauthor,bookprice,bookcover,bookdetail from bookinfo where bookid='$Gid';";		
		$res = mysql_query($sql,$conn);				
		if($row = mysql_fetch_assoc($res))
		{			
	       echo "<font style='margin-left:470px;;font-weight: bold; '>".$row['bookname']."</font><br>";
           echo "<font style='margin-left:470px;font-weight: bold; '>作者：".$row['bookauthor']."</font>";
           echo "<div class='image'>";
           echo "<hr>";
           echo "<a href='login.php'><img style='border: 1px solid #b4b4b4;margin-left: 30px;margin-right:50px;float: left' src='".$row['bookcover']."'/></a>";
           






			mysql_free_result($res);
			mysql_close($conn);
            
	}
	else{
		die("数据库连接失败".mysql_errno());
		}
  
  
 
		}
		
  ?>
 
  
  
  
  
  <div class="introduce">
  <font>配送地区选择：</font><br/><br/>
  <form action=/cgi-bin/post-query method=POST>
  <select name=address>
        <option selected>山东省
        <option selected>山西省
        <option selected>河北省
        <option selected>辽宁省
        <option selected>吉林省
        <option selected>黑龙江省
        <option selected>江苏省
        <option selected>浙江省
        <option selected>安徽省
        <option selected>福建省
        <option selected>河南省
        <option selected>湖南省
        <option selected>广东省
        <option selected>海南省
        <option selected>四川省
        <option selected>贵州省
        <option selected>云南省
        <option selected>陕西省
        <option selected>甘肃省
        <option selected>青海省
        <option selected>台湾省
        <option selected>内蒙古自治区
        <option selected>广西壮族自治区
        <option selected>西藏自治区
        <option selected>宁夏回族自治区
        <option selected>新疆维吾尔族自治区
        <option selected>香港特别行政区
        <option selected>澳门特别行政区
        <option value=请选择配送地区>
   </select>
   <input type=submit>        <input type=reset>
</form>
  
  
  </div>
  
  <!-- 详情 -->
  <div style="font-family: serif;">
  <p>下单后，请在24小时内完成付款。</p>
  <p>发货日期：用户完成付款之后24小时内安排发货。</p>
  <p>送达日期：除偏远地区外，4天之内到达。</p>
  <p>退货须知：无人为造成的破损污渍，不印象第二次销售。物流费用自己承担。<a style="text-decoration: underline;color: blue;" href="#">详情</a></p>
  <p>销售配送：由合作物流公司***直接发货。</p>
  <hr />
  <p style="font-weight: bolder;color: red">7万图书满200元减100元：</p>
  
  <img style="float: left;"  src="images/budget.png"/><font style="font-size: small;">活动期间内，在活动页领取优惠券后，
  购买My-eBookStore指定自营图书(不含进口原版书、第三方卖家商品或海外购商品)，
  <font style="color: red;">单笔订单满200元在结账时系统将自动扣减100元，
  单张订单减免金额不累加，最多减免100元。</font>
  单品页面“商品促销和特殊优惠”栏中如有此促销信息则表示该商品参与此活动。</font>
  <hr/>
  <div style="height:100px;align:center;border:2px solid orange;margin-top:50px;height:100px;">
  <?php
  echo "<font style='align:center;margin-left:420px;'>售价：￥".$row['bookprice']."</font>";
  
  ?>
  <br/>
  <font style="text-align:center;margin-left:420px;"> 满99元<font style="font-weight:bold;">免运费</font>且可<font style="font-weight:bold;">货到付款</font></font><br/>
  <?php
  
  echo "<a href='cartfull.php?Gid=$Gid'><img style='border:1px solod silver;margin-left:420px;' src='images/cart.png'/></a>";
  ?>
  </div>
  
  <div style="border:1px solid #b4b4b4;margin-top:100px">
   <?php
  echo "<font>商品详情：".$row['bookdetail'];
  ?>
  <br><br><br><br>
  这里填写商品详细信息
  </div>
  <hr style="margin-top:120px;"/>
  </div>
  
 
  
  
  <p style="font-size: x-large;">&nbsp;&nbsp;经常一起购买的商品：</p>
  <img src="images/book1.png" style="margin-right:50px;"/>  
  <img src="images/book2.png"/>  
  <br>
  <img src="images/book3.png"/>  
  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <hr/>
   <p style="font-size: x-large;">&nbsp;&nbsp;为您推荐</p>
   <br/><br/><br/><br/><br/><br/>
   <hr/>
   <p style="font-size: x-large;">&nbsp;&nbsp;用户评价：
   <br/><br/><br/><br/><br/><br/>
 
  
  
  </div>
  
  
   <div class="bottom">
 <hr color=" #208ed3" width=1000 size=5>
 <p align="center">地址：中国山东省烟台市莱山区清泉路30号  邮编：264005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto:fei_fei_sun@sina.com" target="_blank">管理员信箱</a></p>
 <br>
 
 </div>
  </body>
</html>
