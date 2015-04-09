<?php 
require_once 'include.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>桃李蹊</title>
<script type="text/javascript" src="js/myfocus-2.0.1.min.js"></script>
<script type="text/javascript" src="js/mF_YSlider.js"></script>
<link rel="stylesheet" type="text/css" href="js/mF_YSlider.css">
<link rel="stylesheet" type="text/css" href="styles/css.css">
<script type="text/javascript">
	myFocus.set({
	    id:'myFocus',//焦点图盒子ID
	    pattern:'mF_YSlider',
	    txtHeight: 0
	});
</script>
</head>
<body>
<!-- top开始 -->
<div id="top">
    <div id="top_content">
		<div id="top_left"><a href="#">加入收藏</a></div>
		<div id="top_right">欢迎来到桃李蹊！
			<?php if($_SESSION['loginFlag']):?>
			<span>欢迎您</span><?php echo $_SESSION['username'];?>
			<a href="doAction.php?act=userOut">[退出]</a>
			<?php else:?>
			<a href="login.php">[登录]</a><a href="reg.php">[免费注册]</a>
			<?php endif;?>
		</div>
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
<!-- nav结束 -->
<!-- myFocus开始 -->
<div id="myFocus">
  	<div class="loading"><img src="images/loading.gif" alt="请稍候..." /></div>
  	<div class="pic"><!--myFocusContentList-->
    	<ul>
          <li><a href="#"><img src="images/ad1.jpg" /></a></li>
          <li><a href="#"><img src="images/ad2.jpg" /></a></li>
          <li><a href="#"><img src="images/ad3.jpg" /></a></li>
    	</ul>
  	</div>
</div>
<!-- myFocus结束 -->
<!-- project开始 -->
<div id="project">
	<div id="project_left"><!-- projectOverview -->
		<div class="project_title">
	        <span class="project_title_left">近期项目</span>
	        <span class="project_title_right"><a href="#">More&gt;&gt;</a></span>
        </div>
        <div class="pic_news"> <img src="images/news.jpg" alt="520 慕女神喊你来表白" width="113" height="77" />
        <h2><a href="news.html">520 慕女神喊你来表白！</a></h2>
        <p>活动时间：5月20日—5月25日<br />
          获奖公布时间：5月26日<br />
          <a href="news.html">Learn More>></a></p>
      </div>
      <!--pic_news结束-->
	</div>


	<div id="project_mid"><!-- projectImplementation -->
		<div class="project_title">
	        <span class="project_title_left">最新动态</span>
	        <span class="project_title_right"><a href="#">More&gt;&gt;</a></span>
        </div>
        <div class="product_list"><img src="images/css.jpg" alt="CSS圆角进化论" width="158" height="106" />
	        <h2><a href="news.html">CSS圆角进化论</a></h2>
	        <p> CSS圆角的实现，经历了三大发展阶段：背景图片方式、CSS2.0+HTML标签模拟、CSS3.0圆角属性）。本案例详细讲解每一种的实现方式，并对实现的优缺点进行对比分析。</p>
      	</div>
	</div>
	<div id="project_right">
		<div class="project_title">
	        <span class="project_title_left">媒体报道</span>
	        <span class="project_title_right"><a href="#">More&gt;&gt;</a></span>
        </div>
	</div>
</div>
<!-- project结束 -->
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