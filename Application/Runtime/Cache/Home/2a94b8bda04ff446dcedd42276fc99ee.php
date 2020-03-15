<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>忘羡酒店</title>
<link href="/legacy1/Public/css/home.css" rel="stylesheet" />
<link href="/legacy1/Public/css/bootstrap.css" rel="stylesheet" />
<script src="/legacy1/Public/js/jquery.min.js"></script>
<script src="/legacy1/Public/js/bootstrap.js"></script>
</head>
<body>
<div id="top"></div>
<nav class="navbar navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">忘羡</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/legacy1/Home/Index/index">主页</a></li>
				<li><a href="/legacy1/Home/Index/about">关于我们</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">查看房型<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="/legacy1/Home/Reserve/roomrank/roomtype/'单人间'"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>单人间</a></li>
						<li><a href="/legacy1/Home/Reserve/roomrank/roomtype/'大床房'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>大床房</a></li>
						<li><a href="/legacy1/Home/Reserve/roomrank/roomtype/'标间'"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>标间</a></li>
						<li><a href="/legacy1/Home/Reserve/roomrank/roomtype/'套房'"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>套房</a></li>
					</ul>
				</li>
				<li><a href="/legacy1/Home/Reserve/addorder">酒店预订</a></li>
				<li><a href="/legacy1/Home/Index/contactus">联系我们</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if(isset($mid)): ?><li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo ($mname); ?><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/legacy1/Home/Reserve/order/name/<?php echo ($mname); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>查看订单</a></li>
							<li><a href="/legacy1/Home/User/message/name/<?php echo ($mname); ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>查看个人信息</a></li>
						</ul>
					</li>
					<li><a href="/legacy1/Home/User/logout">退出</a><li>
				<?php else: ?>
					<li><a href="/legacy1/Home/User/login">登录</a></li>
					<li><a href="/legacy1/Home/User/register">免费注册</a></li><?php endif; ?>
			</ul>
		</div>
	</div>
</nav>
<div id="content">
<style type="text/css">

</style>
<div class="col-md-8" id="carousel">
<img src="/legacy1/Public/image/slide3.jpg" />
</div>
<div class="col-md-4" id="message">
	<div id="gonggao">
		<h2>本站公告：</h2>
		<?php if(is_array($notice)): foreach($notice as $key=>$v): ?><ul class="item">
				<li><?php echo ($v["content"]); ?></li>
			</ul><?php endforeach; endif; ?>
	</div>
	<div id="pinglun">
		<h2>本站评论：</h2>
		<?php if(is_array($comm)): foreach($comm as $key=>$v): ?><ul class="item">
				<li><?php echo ($v["username"]); ?>：<?php echo ($v["comment"]); ?></li>
			</ul><?php endforeach; endif; ?>
	</div>
</div>

</div>
<div class="footer-main">
	<center>
		忘羡酒店
		地址：重庆师范大学
		有需要请联系：1461729781@qq.com
		<br>
		本网站根据thinkphp制作
	</center>
</div>
</body>
</html>