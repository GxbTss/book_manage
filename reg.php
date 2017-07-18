<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册页面</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<header class="clearfix">
			<div class="top_logo">
				<img src="img/logo.png" alt="">
			</div>
			<div class="top_links">
				<ul>
					<li><a href="">图书管理系统</a></li>
					<li><a href="">关于图书</a></li>
					<li><a href="">开发者</a></li>
					<li><a href="">意见反馈</a></li>
					<li><a href="">帮助</a></li>
				</ul>
			</div>
		</header>
		<section>
			<div class="box_bg">
				<img src="img/theme-pic1.jpg" alt="">
			</div>
			<div class="box_login">
				<form action="login_chuli.php" method="post" name="login">
					<div class="login_group">
						<label for="userName">注册账号</label>
						<input type="text" placeholder="请输入账号" name="userName">
					</div>
					<div class="login_group">
						<label for="pwd">密码</label>
						<input type="password" placeholder="请输入密码" name="pwd">
					</div>
					<div class="login_group">
						<label for="yzm" >验证码</label>
						<input type="text" placeholder="请输入验证码" name="yzm">
					</div>
					<div class="login_group">
						<p class="reg"><a href="reg.php">注册账号</a></p>
					</div>
					<div class="login_group">
						<input type="submit" value="登录">
					</div>
				</form>
			</div>
		</section>
		<footer>
			<p>Copyright © 2017.Async  All rights reserved.Guo</p>
		</footer>
	</div>
</body>
</html>