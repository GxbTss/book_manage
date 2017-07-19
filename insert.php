<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加图书</title>
	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
	<link rel="stylesheet" href="css/admin.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.js"></script>
</head>
<body>
	<div id="content">
		<h2 id="add-book" >添加图书</h2>
		<form action="insert_chuli.php" method="post" name="addbook" id="addbook" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="bookName">图书名称</label>
		    <input type="text" class="form-control addbook-item" id="bookName" name="bookName" placeholder="请输入图书名称">
		  </div>
		  <div class="form-group">
		    <label for="bookClass">图书类别</label>
		    <input type="text" class="form-control addbook-item" id="bookClass" name="bookClass" placeholder="请输入图书类别">
		  </div>
		  <div class="form-group">
		    <label for="bookAuthor">图书作者</label>
		    <input type="text" class="form-control addbook-item" id="bookAuthor" name="bookAuthor" placeholder="请输入图书作者">
		  </div>
		  <div class="form-group">
		    <label for="bookPic">图书封面</label>
		    <input type="file" class="form-control addbook-item" id="bookPic" name="bookfile" placeholder="请输入图书名称">
		  </div>
		  <button type="submit" class="btn btn-default add">添加</button>
		</form>
	</div>
</body>
</html>