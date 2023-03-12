<?php error_reporting(E_ALL ^ E_NOTICE);
/*****************************************************************
Created :04/03/2565
Author : worapot pilabut (aj.ake)
E-mail : worapot.playdigital@gmail.com
Website : https://www.playdigital.co.th
Copyright (C) 2023, Play digital Co.,Ltd. all rights reserved.
 *****************************************************************/


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/class.TemplatePower.inc.php");
include_once("../include/function.inc.php");
include_once("../authentication/check_login.php");

$tbAppform = "tb_app_form";












$tpl = new TemplatePower("../template/_tp_inner.html");
$tpl->assignInclude("body", "_tp_index.html");
$tpl->prepare();
$tpl->assign("_ROOT.page_title", "หน้าแรก");
$tpl->assign("_ROOT.logo_brand_alt", $Brand);
$tpl->assign("_ROOT.fullname",$_SESSION['FULLNAME']);
$tpl->assign("_ROOT.avatar","../static/avatars/".$_SESSION['AVATAR']);

//$TodayThaiShow = ThaiToday($strDateTime, $tnow);


// Update Status
if($_GET['action'] == "change" && $_GET['id'] != ""){
	$query = "UPDATE `$tbAppform` SET `status`='{$_GET['show']}' WHERE `ID`='{$_GET['id']}' ";
	$result = mysql_query($query);
	$tpl->newBlock("SAVE");
}

// Delete
if($_GET['action'] == "delete" && $_GET['id'] != ""){
	$query = "DELETE FROM `$tbAppform` WHERE `id`='{$_GET['id']}' ";
	$result = mysql_query($query);
	$tpl->newBlock("REMOVE");
}






$query = "SELECT * FROM `tb_app_form` WHERE `status`='0' ORDER BY `created_at` DESC LIMIT 0,1000";
$result = $conn->query($query);
while( $line = $result->fetch_assoc()){
    $tpl->newBlock("DATA");
    $tpl->assign("datas", $Pline['datas']);
    $tpl->assign("TeamName", $line['TeamName']);
    $tpl->assign("RegisterDate", $line['created_at']);
    $tpl->assign("id", $line['id']);

}






$tpl->assign("_ROOT.Powerby", $Powerby);
$tpl->assign("_ROOT.Copyright", $Copyright);
$tpl->printToScreen();

