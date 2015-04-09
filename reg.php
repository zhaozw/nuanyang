<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>桃李蹊</title>
<script type="text/javascript" src="js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="js/mF_YSlider.js"></script>
<link rel="stylesheet" type="text/css" href="js/mF_YSlider.css">
<link rel="stylesheet" type="text/css" href="styles/css.css">
<link type="text/css" rel="stylesheet" href="styles/login.css">
<script language="JavaScript">
var ImageArray=new Array( );
for (i=1;i<=3;i++)
{   ImageArray[i]=new Image( );
ImageArray[i].src="images/zhuce"+i+".png";
}
</script>
<script language="JavaScript">
var ImageNum=1;
function Begin(){
document.MyImage.src=ImageArray[ImageNum].src;
ImageNum++;
if (ImageNum=4)  <!--改成3就可以换图片了。。-->
ImageNum=1;
}
</script>
</head>
<body>
<!-- top开始 -->
<div id="top">
    <div id="top_content">
		<div id="top_left"><a href="#">加入收藏</a></div>
		<div id="top_right">欢迎来到桃李蹊！<a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a></div>
	</div>
</div>
<!-- top结束 -->
<!-- logo开始 -->
<div id="logo">
	<div id="logo_left"><a href="index.html"><img src="images/logo.jpg" /></a></div>
	<div id="logo_right">桃李蹊，一个神奇的网站</div>
</div>
<!-- logo结束 -->
<!-- nav开始 -->
<div id="nav">
	<ul>
	  <li><a href="index.php">桃李首页</a></li>
      <li><a href="itemcenter.php">项目中心</a></li>
      <li><a href="additem.php">项目发起</a></li>
      <li><a href="item.php">项目动态</a></li>
      <li><a href="yelpage.html">慈善黄页</a></li>
      <li><a href="join.html">人才招聘</a></li>
  	</ul>
</div>

<div>
<center><table width=80% border="0">
  <tr>
    <td width="4"><td width="10"><center><td width="700"><div align="right"><img src="images/zhuce1.png" id="MyImage" width="600" height="420" align="middle" onLoad= "setTimeout('Begin( )',1000)">
</td>
    <left><td width="300"><div class="loginBox">
	<form method="post" enctype="multipart/form-data" action="doAction.php?act=reg" >
		<ul class="login">
			<li class="l_tit">用户名：</li>
			<li><input type="text" name="username" placeholder="请输入用户名" class="login_input" required="required"></li>
			<li class="l_tit">密码：</li>
			<li><input type="password" name="password" class="login_input" placeholder="请输入密码" required="required"></li>
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
		<center><p class="l_tit">使用合作方账号登陆网站</p></center>
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
</div></td></left>
  </tr>
</table></center>
</div>








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