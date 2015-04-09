<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="styles/login.css">
</head>
<body>

<!-- top开始 -->
<div id="top">
    <div id="top_content">
		<div id="top_left"><a href="#">加入收藏</a></div>
		<div id="top_right">欢迎来到暖阳慈善！<a href="login.php">[登陆]</a></div>
	</div>
</div>
<!-- top结束 -->
<!-- logo开始 -->
<div id="logo">
	<div id="logo_left"><a href="index.html"><img src="images/logo.jpg" /></a></div>
	<div id="logo_right">暖阳，一个神奇的网站</div>
</div>
<!-- logo结束 -->


<div class="loginBox">
	<form method="post" enctype="multipart/form-data" action="doAction.php?act=reg" >
		<ul class="login">
			<li class="l_tit">用户名：</li>
			<li><input type="text" name="username" placeholder="请输入用户名" class="login_input" required="required"></li>
			<li class="l_tit">密码：</li>
			<li><input type="password" name="password" class="login_input"required="required"></li>
			<li class="l_tit">邮箱：</li>
			<li><input type="email" name="email" placeholder="请输入合法邮箱" class="login_input" required="required"></li>
			<li class="l_tit">头像：</li>
			<li><input type="file" class="login_input" name="myFace" ></li>
			<li class="autoLogin"><span class="reg_item">&nbsp;</span>
			<input type="checkbox" id="t1" class="checked"><label for="t1">我同意什么什么条款</label></li>
			<li><input type="submit" value="注册" class="login_btn"></li>
		</ul>
	</form>
	<div class="login_partners">
		<p class="l_tit">使用合作方账号登陆网站</p>
		<ul class="login_list">
			<li><a href="#">QQ</a></li>
			<li><span>|</span></li>
			<li><a href="#">网易</a></li>
			<li><span>|</span></li>
			<li><a href="#">新浪微博</a></li>
			<li><span>|</span></li>
			<li><a href="#">腾讯微博</a></li>
			<li><span>|</span></li>
			<li><a href="#">新浪微博</a></li>
		</ul>
	</div>
</div>

<!-- copyright开始 -->
<div id="copyright">
	<span id="copyright_top">友情链接</span>
	<p>
	  <a href="#">腾讯公益</a><i>|</i>
	  <a href="#">新浪公益</a><i>|</i> 
	  <a href="#">中国红会</a><i>|</i>
	  <a href="#">南开大学</a><i>|</i>
	  <a href="#">百度公益</a>
	</p>
	<p>
	  Copyright &copy;
	  2014-2015桃李蹊版权所有&nbsp;&nbsp;&nbsp;
	  京ICP备09037834号&nbsp;&nbsp;&nbsp;
	  京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;
	  北京市公安局分局备案编号：12345678912
	</p>
</div>
</body>
</html>