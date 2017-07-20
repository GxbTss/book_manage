<?php
header("content-type:text/html;charset=utf-8");
if ($_SERVER[REQUEST_METHOD]='POST') {
	$bookName=$_POST['bookName'];
	$bookClass=$_POST['bookClass'];
	$bookAuthor=$_POST['bookAuthor'];
	$filename=$_FILES['bookfile']['name'];
	$filenamekz=strstr($filename,'.');
	$filesize=$_FILES['bookfile']['size'];
	include("conn.php");
	if (!empty($filename)) {
		$fileNewName=substr($filename, 0,strlen($filename)-4).time().strstr($filename, '.');
		if ($filesize<=512000) {
			if (strstr('.jpg.gif.png', $filenamekz)) {
				move_uploaded_file($_FILES['bookfile']['tmp_name'], 'img/'.$fileNewName);
				echo "上传成功";
				include("conn.php");
				$num=mysql_query("update books set bookName='$bookName',bookClass='$bookClass',bookAuthor='$bookAuthor',bookPic='$fileNewName' where bookId='$bookId'");
				if ($num>0) {
					echo '<script>alert("更新成功");location.href="show.php";</script>';
				}else{
					echo '<script>alert("更新失败，请联系管理员");history.go(-1);</script>';
				}
			}else{
				echo "文件名应为：.jpg.gif.png";
			}
		}else{
			echo '<script>alert("文件不得超过500kb")</script>';
		}
	}else{
		$num=mysql_query("update books set bookName='$bookName',bookClass='$bookClass',bookAuthor='$bookAuthor'where bookId='$bookId'");
		if ($num>0) {
			echo '<script>alert("更新成功");location.href="show.php";</script>';
		}else{
			echo '<script>alert("更新失败，请联系管理员");location.href="show.php";</script>';
		}
	}
}else{
	echo '<script>location.href="error.php";</script>';
}
?>