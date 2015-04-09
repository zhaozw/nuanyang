<?php 
lllll
require_once 'include.php';
checkLogind();
$rows=getAllCate();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>桃李蹊</title>
<link rel="stylesheet" type="text/css" href="styles/css.css">
<!-- <link href="./styles/global.css"  rel="stylesheet"  type="text/css" media="all" /> -->
<script type="text/javascript" charset="utf-8" src="plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="plugins/kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="scripts/jquery-1.6.4.js"></script>
<script>
        KindEditor.ready(function(K) {
                window.editor = K.create('#editor_id');
        });
        $(document).ready(function(){
        	$("#selectFileBtn").click(function(){
        		$fileField = $('<input type="file" name="thumbs[]"/>');
        		$fileField.hide();
        		$("#attachList").append($fileField);
        		$fileField.trigger("click");
        		$fileField.change(function(){
        		$path = $(this).val();
        		$filename = $path.substring($path.lastIndexOf("\\")+1);
        		$attachItem = $('<div class="attachItem"><div class="left">a.gif</div><div class="right"><a href="#" title="删除附件">删除</a></div></div>');
        		$attachItem.find(".left").html($filename);
        		$("#attachList").append($attachItem);		
        		});
        	});
        	$("#attachList>.attachItem").find('a').live('click',function(obj,i){
        		$(this).parents('.attachItem').prev('input').remove();
        		$(this).parents('.attachItem').remove();
        	});
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
	  <li><a href="#">桃李首页</a></li>
      <li><a href="#">项目中心</a></li>
      <li><a href="#">项目发起</a></li>
      <li><a href="#">项目动态</a></li>
      <li><a href="#">慈善黄页</a></li>
      <li><a href="#">人才招聘</a></li>
	</ul>
</div>
<!-- nav结束 -->
<h3>发起项目</h3>
<form action="doAction.php?act=addItem" method="post" enctype="multipart/form-data">
<table width="1000px"  border="0" cellpadding="5" cellspacing="0" margin="0 auto">
	<tr>
		<td align="right">项目名称</td>
		<td><input type="text" name="itemName"  placeholder="请输入项目名称"/></td>
	</tr>
	<tr>
		<td align="right">项目类别</td>
		<td>		
		<select name="cName">
			<?php foreach($rows as $row):?>
				<option value="<?php echo $row['cName'];?>"> <?php echo $row['cName'];?> </option>
			<?php endforeach;?>
		</select>
		</td>
	</tr>
	<tr>
		<td align="right">项目简介</td>
		<td><input type="text" name="itemIntro" placeholder="项目简介不超过200字"/></td>
	</tr>
	<tr>
		<td align="right">截止时间</td>
		<td><input type="date" name="itemDeadline"/></td>
	</tr>
	<tr>
		<td align="right">目标金额</td>
		<td><input type="text" name="itemMoney"  placeholder="请输入目标金额"/></td>
	</tr>
	<tr>
		<td align="right">项目描述</td>
		<td><textarea name="itemDesc" id="editor_id" style="width:100%;height:150px;"></textarea></td>
	</tr>
	<tr>
		<td align="right">项目图片</td>
		<td><input type="file" name="itemPho" placeholder="请输入目标金额"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="发布项目"/></td>
	</tr>
</table>
</form>

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