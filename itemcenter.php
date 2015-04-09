<?php 
require_once 'include.php';
checkLogind();
$sql="select * from item";
$rows=fetchAll($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript" src="js/itemcenter.js"/></script>
<link rel="stylesheet" type="text/css" href="styles/itemcenter.css">
	<title></title>
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
<!-- 项目中心开始 -->
<div id="itemcenter_hot">
	热门项目
	<hr/>
</div>

<div id="itemcenter_wrap">
	<?php
		foreach($rows as $row):
	?>
    <div class="item">
        <a href="item.php?itemId=<?php echo $row['itemId'];?>" target="_blank">
        <div class="item_image">
            <img class="item_image_in" src="itemcenterimages/<?php echo $row['itemPho'];?>"/>
        </div>
        <div class="item_text">
        	<a target="_blank" href="#"><?php echo $row['itemName'];?></a>
        </div>
        </a>
		<div class="item_money">
			<span>已筹资</span><strong>￥<i><?php echo $row['itemAlready'];?></i></strong>
		</div>	
		<div class="item_progressbar">
			<span class="progress" style="width:<?php echo 100*round($row['itemAlready']/$row['itemMoney'],2);?>%;"></span>
		</div>
		<div class="item_rate">
			<span class="already"><?php echo 100*round($row['itemAlready']/$row['itemMoney'],2);?>%</span>
			<span class="lefttime">剩余
			<?php $lefttime=round((strtotime($row['itemDeadline'])-strtotime(date('y-m-d')))/86400);
			echo $lefttime<0?0:$lefttime;
			?>天</span>							
		</div>
        <div class="item_like">
	    	<div class="like"><a href="#"><img src="images/like.png" /><?php echo $row['itemLikeNo'];?></a></div>
	    	<div class="comment"><a href="#"><img src="images/comment.png" /><?php echo $row['itemComNo'];?></a></div>
        </div>
    </div>
	<?php 
		endforeach;
	?>


    <div class="item">
        <div class="item_image">
            <img class="item_image_in" src="itemcenterimages/1.jpg"/>
        </div>
        <div class="item_text">
        	<a target="_blank" href="#">三亚雅墨半岛酒店--中国首家众筹酒店邀您做老板</a>
        </div>
		<div class="item_money">
			<span>已筹资</span><strong>￥<i>16,238</i></strong>
		</div>	
		<div class="item_progressbar">
			<span class="progress" style="width:17%;"></span>
		</div>
		<div class="item_rate">
			<span class="already">17%</span>
			<span class="lefttime">剩余14天</span>							
		</div>
        <div class="item_like">
	    	<div class="like"><img src="images/like.png" /><a href="#">240</a></div>
	    	<div class="comment"><img src="images/comment.png" /><a href="#">23</a></div>
        </div>
    </div>
    <div class="item">
        <div class="item_image">
            <img class="item_image_in" src="itemcenterimages/1.jpg"/>
        </div>
        <div class="item_text">
        	<a target="_blank" href="#">三亚雅墨半岛酒店--中国首家众筹酒店邀您做老板</a>
        </div>
		<div class="item_money">
			<span>已筹资</span><strong>￥<i>16,238</i></strong>
		</div>	
		<div class="item_progressbar">
			<span class="progress" style="width:17%;"></span>
		</div>
		<div class="item_rate">
			<span class="already">17%</span>
			<span class="lefttime">剩余14天</span>							
		</div>
        <div class="item_like">
	    	<div class="like"><img src="images/like.png" /><a href="#">240</a></div>
	    	<div class="comment"><img src="images/comment.png" /><a href="#">23</a></div>
        </div>
    </div>
    <div class="item">
        <div class="item_image">
            <img class="item_image_in" src="itemcenterimages/1.jpg"/>
        </div>
        <div class="item_text">
        	<a target="_blank" href="#">三亚雅墨半岛酒店--中国首家众筹酒店邀您做老板</a>
        </div>
		<div class="item_money">
			<span>已筹资</span><strong>￥<i>16,238</i></strong>
		</div>	
		<div class="item_progressbar">
			<span class="progress" style="width:17%;"></span>
		</div>
		<div class="item_rate">
			<span class="already">17%</span>
			<span class="lefttime">剩余14天</span>							
		</div>
        <div class="item_like">
	    	<div class="like"><img src="images/like.png" /><a href="#">240</a></div>
	    	<div class="comment"><img src="images/comment.png" /><a href="#">23</a></div>
        </div>
    </div>
</div>

<!-- 项目中心结束 -->
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
