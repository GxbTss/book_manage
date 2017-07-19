<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>欢迎登录图书管理系统主页</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<script type="text/javascript">
		$(function (argument) {
			$(".meun-item").click(function(){
				$(".meun-item").removeClass("meun-item-active");
				$(this).addClass("meun-item-active");
				let item=$(this).attr("aria-controls");
				let tabpaneObj=$(".tab-pane");
				tabpaneObj.each(function(){
					$(this).removeClass("tab-pane-active");
					let tabpane=$(this).attr("aria-controls");
					if ($(this).attr("id")==item) {
						$(this).addClass("tab-pane-active");
					}
				})
			})
		})
	</script>
</head>
<body>
	<div id="wrap">
		<!-- 左侧菜单栏目 -->
		<div class="leftMeun" id="leftMeun">
			<div id="logoDiv">
				<p><img src="img/404.jpg" id="logo" alt="">欢迎登录后台管理页面</p>
			</div>
			<div id="personInfor">
				<p id="userName">tom</p>
				<p><span>Async@qq.com</span></p>
				<p><a href="login.php">退出登录</a></p>
			</div>
			<div class="meun-title">
				账号管理
			</div>
			<div class="meun-item meun-item-active" href="#sour" aria-controls="sour" role="tab" data-toggle="tab"><img src="img/icon_source.png" alt="">资源管理</div>
			<div class="meun-item" href="#char" aria-controls="char" role="tab" data-toggle="tab"><img src="img/icon_chara_grey.png">权限管理</div>
            <div class="meun-item" href="#user" aria-controls="user" role="tab" data-toggle="tab"><img src="img/icon_user_grey.png">用户管理</div>
            <div class="meun-item" href="#chan" aria-controls="chan" role="tab" data-toggle="tab"><img src="img/icon_change_grey.png">修改密码</div>
            <div class="meun-title">地区管理</div>
            <div class="meun-item" href="#scho" aria-controls="scho" role="tab" data-toggle="tab"><img src="img/icon_house_grey.png">地区管理</div>
            <div class="meun-item" href="#regu" aria-controls="regu" role="tab" data-toggle="tab"><img src="img/icon_rule_grey.png">规则管理</div>
            <div class="meun-item" href="#stud" aria-controls="stud" role="tab" data-toggle="tab"><img src="img/icon_card_grey.png">人员信息</div>
            <div class="meun-item" href="#sitt" aria-controls="sitt" role="tab" data-toggle="tab"><img src="img/icon_char_grey.png">座位管理</div>
		</div>
		<!-- 右侧具体内容 -->
		<div id="rightContent">
			<!--用户管理模块-->
	        <div role="tabpanel" class="tab-pane tab-pane-active" id="user">
		        <div class="check-div form-inline">
		             11<img src="img/1.png" alt="">       
				</div>
	        </div>
	        
	        <!-- 修改密码模块 -->
            <div role="tabpanel" class="tab-pane" id="chan">
                <div class="check-div form-inline">
	                  22<img src="img/404.jpg" alt="">  
				</div>
            </div>   	
	        <!--地区管理模块-->
            <div role="tabpanel" class="tab-pane" id="scho">
                <div class="check-div form-inline">
                	33<img src="img/3.jpg" alt="">
                </div>
            </div>
		</div>

	</div>
</body>
</html>