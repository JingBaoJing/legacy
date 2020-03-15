<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>忘羡酒店 - 登录</title>
<link href="/legacy1/Public/css/member.css" rel="stylesheet" />
<script src="/legacy1/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="box">
	<h1>忘羡酒店 - 欢迎登录</h1>
	<div id="main">
		<form method="post">
		<table class="login">
			<tr><th>用户名：</th><td><input type="text" name="user" /></td></tr>
			<tr><th>密码：</th><td><input type="password" name="pwd" /></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="captcha" /></td></tr>
			<tr><td>&nbsp;</td><td><img src="/legacy1/Home/User/captcha" onclick="this.src='/legacy1/Home/User/captcha/'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="button" type="submit" value="登　录" /></td></tr>
			<tr><td colspan="2" class="center"><a href="/legacy1/Home/User/register">立即注册</a><a href="/legacy1/">返回首页</a></td></tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>