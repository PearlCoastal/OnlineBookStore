
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<!--//webfonts-->
<link rel="stylesheet" href="css/login.css" type="text/css"></link></head>
<body>
	<div class="main">
		<div class="header" >
			<h1>My E-BookStore</h1>
		</div>
		<p>Login or Create a Free Account!</p>
			<form action="registerProcessor.php" method="post">
				<ul class="left-form">
					<h2>New Account:</h2>
					<li>
						<input name="name" type="text"   placeholder="用户名" required/>
						
						<div class="clear"> </div>
					</li> 
					<li>
						<input name ="address" type="text"   placeholder="邮箱" required/>
						
						<div class="clear"> </div>
					</li> 
					<li>
						<input name="phoneno" type="text"   placeholder="手机号" required/>
						
						<div class="clear"> </div>
					</li> 
					<li>
						<input name="password" type="password"   placeholder="密码" required/>
						
						<div class="clear"> </div>
					</li> 
					<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>给我发送推送：新图书信息、图书折扣、购买活动</label>
					<input type="submit" value="Create Account">
					<?php
							@$errno = $_GET['errno'];
					if($errno != NULL)
					{
							if($errno == 10)
								echo "<font style='color:red;margin-left:100px;'>用户名已存在！请更换用户名</font>";
							else{}
							
					}		
					?>
						<div class="clear"> </div>
				</ul>
				</form>
				<form action="loginProcess.php" method="post">
				<ul class="right-form">
					<h3>Login:</h3>
					<div>
						<li><input name="userName" type="text"  placeholder="用户名" required/></li>
						<li> <input name="userPwd" type="password"  placeholder="密码" required/></li>
						<h4>I forgot my Password!</h4>

							<input type="submit" value="Login" >
													<br/>	<br/>	<br/>	<br/>	<br/>
						 <?php
							@$errno = $_GET['errno'];
					if($errno != NULL)
					{
							if($errno == 11)
								echo "<font style='color:red;'>密码不能为空！</font>";
							else if($errno == 12)
							echo "<font style='color:red;'>密码错误！</font>";
						//echo '$PWD=$_GET['PWD']';}
							else if($errno == 13)
								echo "<font style='color:red;'>用户名不能为空！</font>";
							else if($errno == 14)
								echo "<font style='color:red;'>用户名不存在！</font>";
							else{}
							
					}		
							?>
					</div>
					<div class="clear"> </div>
				</ul>
				<div class="clear"> </div>
					
			</form>
			
		</div>
			<!-----start-copyright---->
			
   					<div class="copy-right">
						<p>地址：中国山东省烟台市莱山区清泉路30号  邮编：264005 </a>  <a href="mailto:fei_fei_sun@sina.com" target="_blank">&nbsp;&nbsp;&nbsp;管理员信箱</a><br /></p> 
					</div>
				<!-----//end-copyright---->

	
</body>
</html>