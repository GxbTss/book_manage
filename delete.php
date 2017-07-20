<?php
header("content-type:text/html;charset=utf-8");
	$bookId=$_GET['bookId'];
	echo $bookId;
	include("conn.php");
	$num=mysql_query("delete from books where bookId='$bookId'");
	if ($num>0) {
		echo '<script>alert("删除成功");location.href="show.php";</script>';
	}else{
		echo '<script>alert("删除失败，请联系管理员");location.href="show.php";</script>';
	}
?>