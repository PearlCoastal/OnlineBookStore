<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的购物车</title>
<link rel="stylesheet" type="text/css" href="css/cart.css" />

</head>
<body >

<div class="logo">My e-BookStore
  <hr color="#208ed3" size=8/>
  </div>
  
  <h1 class="header"style="text-align:center;color:#208ed3;">我的购物车</h1>
  
  <hr color="#208ed3" size=3/>
     <div class="liebiao">
	    <?php 
		$Gid=$_GET['Gid'];
		$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
		if($conn){
		mysql_query("set names utf8",$conn) or die(mysql_errno());
		mysql_select_db("app_ytuebookstore",$conn) or die(mysql_errno());
		$sql = "select bookname,bookauthor,bookprice,bookcover from bookinfo where bookid='$Gid';";		
		$res = mysql_query($sql,$conn);				
		if($row = mysql_fetch_assoc($res))
		{			
			mysql_free_result($res);
			mysql_close($conn);
           	echo "<table border='0' width='500' height='40' style='margin:0 auto;font-size:15px;text-align:center;'>";
            echo "<tr style='cellspacing:0px;'>";
            echo "<td width='30%' rowspan='3'><a href='book1.html'><img src='".$row['bookcover']."' width='80px';></a></td>";
            
			echo "<td width='20%'>".$row['bookname']."</td>";
            echo "<td width='30%'></td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>".$row['bookauthor']."</td><td></td>";
			echo "<td width='20%'><a href='#' style='color:#208ed3;text-decoration:none;'>删除</a></td>";
			echo "</tr>";
			echo "<tr>";
            echo "<td>￥".$row['bookprice']."</td>";
            echo "<td>数量：<input type='text' name='num' style='border-bottom:1px solid #208ed3;width:36px;text-align:center;'> 件";
            echo "</td>";
            echo "</tr>";
            echo "</table>";
			$price=$row['bookprice'];
         	}
		else 
		{
			echo "数据库中没有商品";
			mysql_free_result($res);
			mysql_close($conn);
		}
	}
	else{
		die("数据库连接失败".mysql_errno());
		}
				   
     ?>
       
    <hr color="E6E6E6" width="500"/>	 

<div class='cart_bg'>
<table border=0 width="500" height="100" style="margin:0 auto;">
    <tr>
		<form action='order.php' method='post'>
    	<td width='6%'></td>
		<?php
         echo "<td>总计：￥".($price)."</td>" ;
		?>
		</form>
        <td width='60%'></td>
		<?php
		echo "<form action='order.php?Gid=$Gid' method='post'>";
		?>
		<td><input type='submit' name='tijiao' value='提交' style='background:#208ed3;color:#fff;width:58px;height:30px;'></td>
         </form>
    </tr>
</table>
</div>    
              

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

</body>
</html>