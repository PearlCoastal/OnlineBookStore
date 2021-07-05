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
<h1><strong>My-eBookStore</strong></h1>
</header>
</div>
<div class="top2"><br/>
<a href="index.php"><span class="s1">首页</span></a>
<a href="#"><span class="s1">个人主页</span></a>
<a href="#"><span class="s1">账号设置</span></a>
<a href="#"><span class="s1">关于我们</span></a>
</div>
<nav>
<ul>
<li class="section"><a href="bookInquiry.php">图书查询</a></li>
<li><a href="bookManage.php">图书管理</a></li>
<li><a href="bookupdate.php">图书修改</a></li>
<li><a href="dropBook.php">图书删除</a></li>
<li><a href="userInfo.php">浏览用户信息</a></li>
<li><a href="checkOrders.php">查看客户订单</a></li>
</ul>
</nav>
<form name="updateForm" action="updateprocess.php" method="post">
<?php
    @$bookID = $_POST['bookID'];
	@$bookName = $_POST['bookName'];
	@$bookAuthor = $_POST['bookAuthor'];
	@$bookClassify = $_POST['bookClassify'];
	@$bookPress = $_POST['bookPress'];
	
	$conn = mysql_connect("SAE_MYSQL_HOST_M","SAE_MYSQL_USER","SAE_MYSQL_PASS");

	if($conn){
		mysql_query("set names utf8",$conn);
		mysql_select_db("app_ytuebookstore",$conn);
		if($bookID != '')
		{
			$sql = "select * from bookInfo where bookID='$bookID';";
			//$sqll = "update booinfo set bookID='$bookID';";
			//$res = mysql_query($sqll);
            $res = mysql_query($sql);				
			if(!mysql_num_rows($res))
			{
				header("Location:bookupdate.php?errno=11");	
				exit();
			}
			else{
				$arr = array();
			while($row = mysql_fetch_array($res))
			{
				$arr[] = $row;
				
			}
			
			echo "<table style='border-color:#EFEFEF' width=900px height=300px align=center border='1px' cellpadding=0 cellspacing=0>";
			echo "<tr align=center><td>书  号</td><td>书  名</td><td>作  者</td><td>类  别</td><td>出版社</td><td>日  期</td><td>价  格</td></tr>";
			for($i=0;$i<count($arr);$i++)
			{
				echo "<div class='menu'>";
				echo "<tr align=center><td><input type='text' value=".$arr[$i]['bookID']."  style='width:70px;height:20px' class='form-control' ></td>
				<td><input type='text' value=".$arr[$i]['bookName']." style='width:150px;height:20px' class='form-control'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookAuthor']." style='width:90px;height:20px' class='form-control'></td>
				 <td><input type='text' value=".$arr[$i]['bookClassify']." style='width:90px;height:20px' class='form-control'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPress']." style='width:150px;height:20px' class='form-control'></td>
				 <td><input type='text' value=".$arr[$i]['bookDate']." style='width:90px;height:20px' class='form-control'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPrice']." style='width:70px;height:20px' class='form-control'></td></tr>";
				 "</div>";
			
			}
			
			echo "</table>";
			echo  "<center>";
            echo "<br><br>&nbsp;&nbsp;<button class='buttonType' type='submit'>修改</button>" ;	
            echo "<button class='buttonType'type='reset'>返回</button>";
            echo "<button class='buttonType' type='submit'>继续</button> ";
            echo "</center> ";
		
			exit();
			mysql_free_result($res);
			mysql_close($conn);
			}
			
		}
		else if($bookName != '')
			{
			$sql = "select * from bookInfo where bookName='$bookName';";
			//$sqll = "update booinfo set bookName='$bookName';";	
			//$res = mysql_query($sqll);	
			 $res = mysql_query($sql);	
			if(!mysql_num_rows($res))
			{
				header("Location:updateprocess.php?errno=11");	
				exit();
			}
			else{
				$arr = array();
			while($row = mysql_fetch_array($res))
			{
				$arr[] = $row;
				
			}
			
			echo "<table style='border-color:#EFEFEF' width=400px height=200px align=center border='1px' cellpadding=0 cellspacing=0>";
			echo "<tr align=center><td>书  号</td><td>书  名</td><td>作  者</td><td>类  别</td><td>出版社</td><td>日  期</td><td>价  格</td></tr>";
			for($i=0;$i<count($arr);$i++)
			{
				echo "<div class='menu'>";
				echo "<tr align=center><td><input type='text' value=".$arr[$i]['bookID']."  style='width:70px;height:20px' ></td>
				<td><input type='text' value=".$arr[$i]['bookName']." style='width:150px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookAuthor']." style='width:90px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookClassify']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPress']." style='width:150px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookDate']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPrice']." style='width:70px;height:20px'></td></tr>";
				 "</div>";
			
			}
			
			echo "</table>";
			echo  "<center>";
            echo "<br><br>     &nbsp;&nbsp;<button class='buttonType' type='submit'>修改</button>" ;
            echo "<button class='buttonType'type='reset'>返回</button>";
            echo "<button class='buttonType' type='submit'>继续</button> ";
            echo "</center> ";
			exit();
			mysql_free_result($res);
			mysql_close($conn);
			}
			
		}
		else if($bookAuthor != '')
			{
			$sql = "select * from bookInfo where bookAuthor='$bookAuthor';";
			//$sqll = "update booinfo set bookAuthor='$bookAuthor'";	
			//$res = mysql_query($sqll);	
			 $res = mysql_query($sql);	
			if(!mysql_num_rows($res))
			{
				header("Location:updateprocess.php?errno=11");	
				exit();
			}
			else{
				$arr = array();
			while($row = mysql_fetch_array($res))
			{
				$arr[] = $row;
				
			}
			
			echo "<table style='border-color:#EFEFEF' width=400px height=200px align=center border='1px' cellpadding=0 cellspacing=0>";
			echo "<tr align=center><td>书  号</td><td>书  名</td><td>作  者</td><td>类  别</td><td>出版社</td><td>日  期</td><td>价  格</td></tr>";
			for($i=0;$i<count($arr);$i++)
			{
				echo "<div class='menu'>";
				echo "<tr align=center><td><input type='text' value=".$arr[$i]['bookID']."  style='width:70px;height:20px' ></td>
				<td><input type='text' value=".$arr[$i]['bookName']." style='width:150px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookAuthor']." style='width:90px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookClassify']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPress']." style='width:150px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookDate']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPrice']." style='width:70px;height:20px'></td></tr>";
				 "</div>";
			
			}
			
			echo "</table>";
			echo  "<center>";
            echo "<br><br>     &nbsp;&nbsp;<button class='buttonType' type='submit'>修改</button>" ;
            echo "<button class='buttonType'type='reset'>返回</button>";
            echo "<button class='buttonType' type='submit'>继续</button> ";
            echo "</center> ";
			exit();
			mysql_free_result($res);
			mysql_close($conn);
			}
			
		}
		else if($bookClassify != '')
			{
			$sql = "select * from bookInfo where bookClassify='$bookClassify';";
			//$sqll = "update booinfo set bookClassify='$bookClassify';";	
			//$res = mysql_query($sqll);	
			 $res = mysql_query($sql);	
			if(!mysql_num_rows($res))
			{
				header("Location:updateprocess.php?errno=11");	
				exit();
			}
			else{
				$arr = array();
			while($row = mysql_fetch_array($res))
			{
				$arr[] = $row;
				
			}
			
			echo "<table style='border-color:#EFEFEF' width=400px height=200px align=center border='1px' cellpadding=0 cellspacing=0>";
			echo "<tr align=center><td>书  号</td><td>书  名</td><td>作  者</td><td>类  别</td><td>出版社</td><td>日  期</td><td>价  格</td></tr>";
			for($i=0;$i<count($arr);$i++)
			{
				echo "<div class='menu'>";
				echo "<tr align=center><td><input type='text' value=".$arr[$i]['bookID']."  style='width:70px;height:20px' ></td>
				<td><input type='text' value=".$arr[$i]['bookName']." style='width:150px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookAuthor']." style='width:90px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookClassify']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPress']." style='width:150px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookDate']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPrice']." style='width:70px;height:20px'></td></tr>";
				 "</div>";
			
			}
			
			echo "</table>";
			echo  "<center>";
            echo "<br><br>     &nbsp;&nbsp;<button class='buttonType' type='submit'>修改</button>" ;
            echo "<button class='buttonType'type='reset'>返回</button>";
            echo "<button class='buttonType' type='submit'>继续</button> ";
            echo "</center> ";
			exit();
			mysql_free_result($res);
			mysql_close($conn);
			}
			
		}
		else if($bookPress != '')
			{
			$sql = "select * from bookInfo where bookPress='$bookPress';";
			//$sqll = "update booinfo set bookClassify=bookPress in '$bookPress';";	
			//$res = mysql_query($sqll);	
			 $res = mysql_query($sql);	
			if(!mysql_num_rows($res))
			{
				header("Location:updateprocess.php?errno=11");	
				exit();
			}
			else{
				$arr = array();
			while($row = mysql_fetch_array($res))
			{
				$arr[] = $row;
				
			}
			
			echo "<table style='border-color:#EFEFEF'  align=center border='1px' cellpadding=0 cellspacing=0>";
			echo "<tr align=center><td>书  号</td><td>书  名</td><td>作  者</td><td>类  别</td><td>出版社</td><td>日  期</td><td>价  格</td></tr>";
			for($i=0;$i<count($arr);$i++)
			{
				echo "<div class='menu'>";
				echo "<tr align=center><td><input type='text' value=".$arr[$i]['bookID']."  style='width:70px;height:20px' ></td>
				<td><input type='text' value=".$arr[$i]['bookName']." style='width:150px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookAuthor']." style='width:90px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookClassify']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPress']." style='width:150px;height:20px'></td>
				 <td><input type='text' value=".$arr[$i]['bookDate']." style='width:90px;height:20px'></td>"
				 ."</td><td><input type='text' value=".$arr[$i]['bookPrice']." style='width:70px;height:20px'></td></tr>";
				 "</div>";
			}
			
			echo "</table>";
			echo  "<center>";
            echo "<br><br>&nbsp;&nbsp;<button class='buttonType' type='submit'>修改</button>" ;
            echo "<button class='buttonType'type='reset'>返回</button>";
            echo "<button class='buttonType' type='submit'>继续</button> ";
            echo "</center> ";
			exit();
			mysql_free_result($res);
			mysql_close($conn);
			}
			
		}
	}
	/*if(!$conn)*/
	else{
		die("数据库连接失败".mysql_errno());
		}

?>



</body>
</html>