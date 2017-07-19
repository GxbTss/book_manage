<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>图书管理系统后台中心</title>
	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
	<link rel="stylesheet" href="css/admin.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.js"></script>
	
</head>
<body>
	<div class="header bg-main">
		<div class="logo">
			<h1><img src="img/404.jpg" width="50" height="50" alt="">图书管理系统后台中心</h1>
		</div>
		<div class="header-l">
			<a class="button" href="" target="_blank">
				<span class="label label-success "><i class="glyphicon glyphicon-home"></i>前台页面</span> &nbsp;&nbsp;
			<a class="button" href="login.php"><span class="label label-danger "><i class="glyphicon glyphicon-off"></i>退出登录</span></a>
		</div>
	</div>
	<div class="leftnav">
		<div class="leftnav-title">
			<strong><span class="icon-list"></span>菜单列表</strong>
		</div>
		<h2 style="margin-top: 0"><span class="glyphicon glyphicon-user"></span>基础设置</h2>
		<ul style="display: block;">
			<li><a href="error.php"><span class="glyphicon glyphicon-triangle-right"></span>网站设置</a></li>
			<li><a href="index.php"><span class="glyphicon glyphicon-triangle-right"></span>修改密码</a></li>
			<li><a href="index-1.php"><span class="glyphicon glyphicon-triangle-right"></span>管理员管理</a></li>
			<li><a href=""><span class="glyphicon glyphicon-triangle-right"></span>留言管理</a></li>
		</ul>
		<h2><span class="glyphicon glyphicon-edit"></span>图书管理</h2>
		<ul>
			<li><a href="insert.php"><span class="glyphicon glyphicon-triangle-right"></span>添加图书</a></li>
			<li><a href=""><span class="glyphicon glyphicon-triangle-right"></span>查询图书</a></li>
			<li><a href=""><span class="glyphicon glyphicon-triangle-right"></span>修改图书</a></li>
			<li><a href=""><span class="glyphicon glyphicon-triangle-right"></span></a></li>
			<li><a href=""><span class="glyphicon glyphicon-triangle-right"></span></a></li>
		</ul>
	</div>
	<script type="text/javascript">
		$(function (argument) {
			$(".leftnav h2").click(function (argument) {
				$(this).next().slideToggle();
				$(this).toggleClass("on");
			});
			$(".leftnav ul li a").click(function(e){
				$("#a_leader_txt").text($(this).text());
		  		$(".leftnav ul li a").removeClass("on");
				$(this).addClass("on");
				$("#admin").attr("src",$(this).attr("href")?$(this).attr("href"):"error.php");
				return false;
			})
		})
	</script>
	<ul class="bread">
	  <li><a href="index.php"><i class="glyphicon glyphicon-home"></i>首页</a></li>
	  <li><a href="##" id="a_leader_txt">网站信息</a></li>
	</ul>
	<div class="admin">
		<iframe src="show.php" id="admin" rameborder="0" scrolling="auto" frameborder="0" width="100%" height="100%"></iframe>
	</div>
</body>
</html>