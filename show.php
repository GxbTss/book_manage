<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>图书页面</title>
	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css">
	<link rel="stylesheet" href="css/admin.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.js"></script>
</head>
<body>
	<div id="content">
		<h2 id="add-book" >查询图书</h2>
		<div class="col-lg-6">
		      <form class="form-inline" action="show.php" method="get">
			  <div class="form-group">
			    <div class="input-group">
			      <input type="text" class="form-control" id="exampleInputAmount" placeholder="请输入查询内容" name="keywords">
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary">搜索</button>
			</form>
		    <table class="table table-bordered " style="margin-top: 20px">
			  <tr  style="text-align:center">
			  	<td>图书编号</td>
			  	<td>图书名称</td>
			  	<td>图书类型</td>
			  	<td>图书作者</td>
			  	<td>上架时间</td>
			  	<td>操作</td>
			  </tr>
			  <?php
			  	include("conn.php");
			  	$page=$_GET['page'];
			  	$keywords=$_GET['keywords'];
			  	if (empty($page)) {
			  		$page=1;
			  	}
			  	$rs=mysql_query("select * from books where bookName like '%$keywords%' order by addTime");
			  	//总记录数
			  	$rscount=mysql_num_rows($rs);
			  	if ($rscount>0) {
			  		//总页数
			  		if ($rscount%3==0) {
			  			$pagecount=floor($rscount/3);
			  		}else{
			  			$pagecount=ceil($rscount/3);
			  		}
			  		mysql_data_seek($rs, ($page-1)*3);
			  		for ($i=1; $i <=3 ; $i++) { 
			  			if ($info=mysql_fetch_array($rs)) {
				  		?>
						<tr style="text-align:center;vertical-align: middle;">
						  	<td style="vertical-align: middle;"><?php echo $info['bookId']?></td>
						  	<td style="vertical-align: middle;" class="bookpic"><img style="width:50px;border-radius: 10px;" src="img/<?php echo $info['bookPic']?>"><br><?php echo $info['bookName']?></td>
						  	<td style="vertical-align: middle;"><?php echo $info['bookClass']?></td>
						  	<td style="vertical-align: middle;"><?php echo $info['bookAuthor']?></td>
						  	<td style="vertical-align: middle;"><?php echo $info['addTime']?></td>
						  	<td style="vertical-align: middle;">
								<a href="update.php?bookId=<?php echo $info['bookId']?>">修改</a>
								<a href="delete.php?bookId=<?php echo $info['bookId']?>">删除</a>
						  	</td>
						</tr>		  		
					  <?php
					  }
					  	}
					  ?>
		    </table>
		    <nav aria-label="Page navigation" style="text-align: center;">
			  <ul class="pagination">
			    <li>
			      <a href="show.php?page=<?php echo $page<=1?1:$page-1;?>&keywords=<?php echo $keywords;?>" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <?php $pn=$_GET["pn"];
		            if(empty($pn)){
		            $pn=1;
		            }
		            if($pn<=5){
		             $pn=5;
		             }
		            $j=$pn;		          
		         ?>
		          <?php for($pn=$pn-4;$pn<=$j+5;$pn++){  
		                 if($pn>$pagecount){
		               $pn=$pagecount;
		                 break;
		               }          
		          ?>         
		          <li><a href="show.php?page=<?php echo $pn;  ?>&pn=<?php echo $pn; ?>&keywords=<?php echo $keywords;?>"><?php echo $pn; ?></a></li>		           
		    	<?php  } ?>
			    <li>
			      <a href="show.php?page=<?php echo $page>=$pagecount?$pagecount:$page+1;?>&keywords=<?php echo $keywords;?>" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
			  	<?php }?>
			  	
	  </div><!-- /.col-lg-6 -->
	  
	</div>	
</body>
</html>