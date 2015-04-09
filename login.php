<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="styles/login.css">
<!-- <link rel="stylesheet" type="text/css" href="styles/css.css"> -->
<style type="text/css">
.code{
font-family:Arial,宋体;
font-style:italic;
color:green;
border:0;
padding:2px 3px;
letter-spacing:3px;
font-weight:bolder;
}
</style>
</head>
<body onLoad="createCode();">

<!-- top开始 -->
<div id="top">
    <div id="top_content">
		<div id="top_left"><a href="#">加入收藏</a></div>
		<div id="top_right">欢迎来到桃李蹊！<a href="reg.php">[免费注册]</a></div>
	</div>
</div>
<!-- top结束 -->
<!-- logo开始 -->
<div id="logo">
	<div id="logo_left"><a href="index.html"><img src="images/logo.jpg" /></a></div>
	<div id="logo_right">桃李蹊，一个神奇的网站</div>
</div>
<!-- logo结束 -->


<div class="loginBox">
	<form method="post" id="loginform" action="doAction.php?act=login" >
		<ul>
			<li class="l_tit">邮箱/用户名/手机号</li>
			<li class="mb_10"><input type="text"  name="username" placeholder="请输入用户名" class="login_input"></li>
			<li class="l_tit">密码</li>
			<li class="mb_10"><input type="password" name="password" class="login_input"></li>
			<li class="l_tit">验证码</li>
			<li class="mb_10"><input type="text" id="input1" class="login_input"></li>
			<input type="button" id="checkCode" class="code" style="width:60px" onClick="createCode()" />
			<li class="autoLogin"><input type="checkbox" id="a1" class="checked"><label for="a1">自动登陆</label></li>
			<li><input type="submit" onClick="validate();" value="登陆" class="login_btn"></li>
		</ul>
	</form>
	<div class="login_partners">
		<p class="l_tit">使用合作方账号登陆网站</p>
		<ul class="login_list clearfix">
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
<script language="javascript" type="text/javascript">
var code ; //在全局 定义验证码
function createCode(){ 
code = new Array();
var codeLength = 4;//验证码的长度
var checkCode = document.getElementById("checkCode");
checkCode.value = "";

var selectChar = new Array(2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z');

for(var i=0;i<codeLength;i++) {
   var charIndex = Math.floor(Math.random()*32);
   code +=selectChar[charIndex];
}
if(code.length != codeLength){
   createCode();
}
checkCode.value = code;
}

function validate () {
var inputCode = document.getElementById("input1").value.toUpperCase();

if(inputCode.length <=0) {
   alert("请输入验证码！");
   return false;
}
else if(inputCode != code ){
   alert("验证码输入错误！");
   createCode();
   document.getElementById("loginform").action="";
   return false;
}
else {
   return true;
}
}
</script>
</body>
</html>
