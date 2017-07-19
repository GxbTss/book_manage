<?php
header("content-type:text/html;charset=utf-8");
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$userName=$_POST['userName'];
	$pwd=md5($_POST['pwd']);
	include("conn.php");
	$num=mysql_query("insert into user(userName,pwd) value('$userName','$pwd')");
	if ($num>0) {
		echo '<script>alert("注册成功！！！");location.href="login.php";</script>';
	}else{
		echo '<script>alert("注册失败！！！");history.go(-1);</script>';
	}
}else{
	header("location:error.php");
}
?>