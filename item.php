<?php
require_once 'include.php';
checkLogind();
$itemId=$_REQUEST['itemId'];
$sql="select * from item where itemId=".$itemId;
$row=fetchOne($sql);
$comSQL="select username,comCon,comDate from comment,user where user.id=comment.id and itemId=".$itemId;
$comRows=fetchAll($comSQL);
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



    	
<div>
  <p>&nbsp;</p>
  <center>
  <table width="1000" height="332" border="0" align="center">
  <center>
    <tr>
      <center>
      <td width="359" height="326">
        <p><img src="itemcenterimages/<?php echo $row['itemPho'];?>" width="424" height="257" /></p>
        <p class="项目１">支持
        <img src="images/项目图标.jpg" width="24" height="17" alt="爱心">分享：微信人人微博</p>
      </td>
      <td width="389">
      <p class="项目名称"><strong><?php echo $row['itemName'];?></strong></p>
      <p class="项目介绍"><?php echo $row['itemIntro'];?></p>
      <table width="393" height="182" border="0">
          <tr>
            <td width="126"><a href="payways.php" class="项目捐赠">捐赠　￥10</a></td>
            <td width="251" class="项目2">已有 捐赠者</td>
          </tr>
          <tr>
            <td><a href="payways.php" class="项目捐赠">捐赠　￥50</a></td>
            <td class="项目2">已有 捐赠者</td>
          </tr>
          <tr>
            <td><a href="payways.php" class="项目捐赠">捐赠 ￥100</a></td>
            <td><span class="项目2">已有 捐赠者</span></td>
          </tr>
          <tr>
            <td class="项目介绍"><a href="payways.php" class="项目捐赠"> 　捐 　赠　</a></td>
            <td class="项目2">自定义金额，最少10元</td>
          </tr>
      </table>
      </center>
  </table>
</div>
<center><img src="images/边框1.PNG" width="1000" height="16" alt="边框1"></center>
<div>
  <center>
  <table width="1000" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </center>

  <center><table width="1000" border="0" align="center" cellspacing="10">
    <tr>
     <td width="638">
     <table width="550" border="0">
        <tr>
           <td width="125" class="项目栏"><a href="项目首页.html">项目首页</a></td>
           <td width="125" class="项目栏">项目进展</td>
           <td width="125" class="项目栏">项目反馈</td>
           <td width="157" class="项目栏">捐赠情况</td>
        </tr>
     </table>
     <div><?php echo $row['itemDesc'];?></div>
     <td width="281">
     <div align="right">
       <table width="303" height="1000" border="0">
         <tr>
           <td width="328"><div align="center">其他项目</div></td>
         </tr>
         <tr>
           <td><center>
               <p><img src="images/项目2.PNG" alt="" width="250" height="200"></p>
               <p>&nbsp;</p>
               <p><img src="images/项目3.PNG" alt="" width="248" height="184"></p>
               <p>&nbsp;</p>
               <p><img src="images/项目4.PNG" alt="" width="250" height="179"></p>
               <p>&nbsp;</p>
               <p><img src="images/xiangmu 5.PNG" alt="" width="250" height="232"></p>
              </center>
            </td>
         </tr>
       </table>
     </div>
              <p>&nbsp;</p>
    </tr>
 </table>
<p>&nbsp;</p>
<br>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>

<div>
	<?php if ($comRows){?>
	  <?php foreach($comRows as $comRow):?>
	  <?php echo $comRow['username'];?>于
	  <?php echo $comRow['comDate'];?>发表了评论：
	  <?php echo $comRow['comCon'];?><br/>
	<?php endforeach;}?>
</div>

<div>
  <form action="doAction.php?act=addItemCom" method="post">
  我也要评论:<input type="text" name="comCon" placeholder="我感觉这个项目..."/>
  <input type="hidden" name="itemId" value="<?php echo $itemId;?>"/>
  <input type="submit"  value="评论"/>
</form>
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
</html>