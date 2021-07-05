<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>个人信息修改</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/cloud-admin.css" >
	
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="css/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="css/animatecss/animate.min.css" />
	<!-- FONTS -->
	<link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login" >
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">登    录</h2>
								<div class="divide-40"></div>
								<form name="loginForm" action="adminLoginProcess.php" method="post">
								  <div class="form-group">
									<label for="exampleInputUserName">账户名</label>
									<i class="fa fa-user"></i>
									<input name="AdministratorName" type="text" class="form-control" id="exampleInputUsername" >
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">密码</label>
									<i class="fa fa-lock"></i>
									<input name="AdministratorPWD" type="password" class="form-control" id="exampleInputPassword1" >
								  </div>
								  <div class="form-actions">

									<button type="submit" class="btn btn-danger">提交</button>
								  </div>
								</form>
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('register');return false;">立即注册
										</a>
								</div>
								<?php
							@$errno = $_GET['errno'];
					if($errno != NULL)
					{
							if($errno == 11)
								echo "<font style='color:red;'>密码不能为空！</font>";
							else if($errno == 12)
								echo "<font style='color:red;'>密码错误！</font>";
							else if($errno == 13)
								echo "<font style='color:red;'>用户名不能为空！</font>";
							else if($errno == 14)
								echo "<font style='color:red;'>用户名错误！</font>";
							else{}
							
					}		
							?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
			<!-- Update -->
			<section id="register" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								<h2 class="bigintro">修改密码</h2>
								<div class="divide-40"></div>
								<form name="registerForm" action="adInfoUpdatePro.php" method="post">
								  <div class="form-group">
									<label for="exampleInputName">真实姓名</label>
									<i class="fa fa-user"></i>
									<input name="RealName" type="text" class="form-control" id="exampleInputName" >
								  </div>
								  <div class="form-group">
									<label for="exampleInputUsername">用户名</label>
									<i class="fa fa-user"></i>
									<input name="AdministratorName" type="text" class="form-control" id="exampleInputUsername" >
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword1">原密码</label>
									<i class="fa fa-lock"></i>
									<input name="OriginPWD" type="password" class="form-control" id="exampleInputPassword1" >
								  </div>
								  <div class="form-group"> 
									<label for="exampleInputPassword2">新密码</label>
									<i class="fa fa-check-square-o"></i>
									<input name="NewPwd" type="password" class="form-control" id="exampleInputPassword2" >
								  </div>
								  <div class="form-actions">
									<button type="submit" class="btn btn-success">提交</button>
								  </div>
								</form>
								<div class="login-helpers">
									<a href="#" onclick="swapScreen('login');return false;"> 返回登录</a> <br>
								</div>
								<?php
							@$errno = $_GET['errno'];
					if($errno != NULL)
					{
							if($errno == 11)
								echo "<center><font style='color:red;'>请输入用户名！</font></center>";
							else if($errno == 12)
								echo "<center><font style='color:red;'>用户名不存在！</font></center>";
							else if($errno == 13)
								echo "<center><font style='color:red;'>请输入原密码！</font></center>";
							else if($errno == 14)
								echo "<center><font style='color:red;'>请输入新密码！</font></center>";
							else if($errno == 15)
								echo "<center><font style='color:red;'>原密码输入有误！</font></center>";
							else if($errno == 16)
								echo "<center><font style='color:red;'>密码未更改！</font></center>";
							else{}
							
					}		
							?>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!--/REGISTER -->
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="js/jquery/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="js/jquery/bootstrap.min.js"></script>
	
	
	<!-- UNIFORM -->
	<script type="text/javascript" src="js/jquery/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("register");  //Set current page
			//Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>