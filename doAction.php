<?php 
require_once 'include.php';
$act=$_REQUEST['act'];
$id=$_SESSION['loginFlag'];
if($act==="reg"){
	$mes=reg();
}elseif($act==="login"){
	$mes=login();
}elseif($act==="userOut"){
	userOut();
}elseif ($act==="addItem"){
	$mes=addItem();
}elseif ($act==="addItemCom") {
	$mes=addItemCom();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
</head>
<body>
<?php
	if($mes){
		echo $mes;
	}
?>
</body>
</html>