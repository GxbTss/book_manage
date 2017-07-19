<?php
session_start();
header("content-type:text/html;charset=utf-8");
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$userName=$_POST['userName'];
	$pwd=md5($_POST['pwd']);
	$yzm=$_POST['yzm'];
	echo $userName;
	if ($yzm==$_SESSION['yzm']) {
		include("conn.php");
		$num=mysql_query("select * from user where userName='$userName' and pwd='$pwd'");
		if ($num>0) {
			echo '<script>alert("登录成功");location.href="index.php"</script>';
		}else{
			echo '<script>alert("账号或密码错误！");history.go(-1)</script>';
		}
	}else{
		echo '<script>alert("验证码错误！");history.go(-1)</script>';
	}
}else{
	header("location:error.php");
}
?>