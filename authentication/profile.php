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



$tpl = new TemplatePower("../template/_tp_inner.html");
$tpl->assignInclude("body", "_tp_profile.html");
$tpl->prepare();
$tpl->assign("_ROOT.page_title", "หน้าจัดการข้อมูลส่วนตัว");
$tpl->assign("_ROOT.logo_brand_alt", $Brand);
$tpl->assign("_ROOT.fullname",$_SESSION['FULLNAME']);
$tpl->assign("_ROOT.avatar","../static/avatars/".$_SESSION['AVATAR']);



$tpl->newBlock("DATA");














$tpl->assign("_ROOT.Powerby", $Powerby);
$tpl->assign("_ROOT.Copyright", $Copyright);
$tpl->printToScreen();
