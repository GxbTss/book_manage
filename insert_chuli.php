<?php
header("content-type:text/html;charset=utf-8");
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$bookName=$_POST['bookName'];
	$bookClass=$_POST['bookClass'];
	$bookAuthor=$_POST['bookAuthor'];
	$bookClass=$_POST['bookClass'];
	$filename=$_FILES['bookfile']['name'];
	$filesize=$_FILES['bookfile']['size'];
	$filenamekz=strstr($filename, '.');
	$fileNewName=substr($filename, 0,strlen($filename)-4).time().strstr($filename, '.');
	if ($filesize<=512000) {
		if (strstr('.jpg.gif.png', $filenamekz)) {
			move_uploaded_file($_FILES['bookfile']['tmp_name'], 'img/'.$fileNewName);
			echo "上传成功";
			include("conn.php");
			$num=mysql_query("insert into books(bookName,bookClass,bookAuthor,addTime,bookPic) value('$bookName','$bookClass','$bookAuthor',now(),'$fileNewName')");
			if ($num>0) {
				echo '<script>alert("添加成功！！！");location.href="insert.php";</script>';
			}else{
				echo '<script>alert("添加失败！！！");history.go(-1);</script>';
			}
		}else{
			echo "文件名应为：.jpg.gif.png";
		}
	}else{
		echo '<script>alert("文件不得超过500kb")</script>';
	}


	
}else{
	header("location:error.php");
}
?>