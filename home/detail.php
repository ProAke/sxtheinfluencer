<?php error_reporting(E_ALL ^ E_NOTICE);
/*****************************************************************
Created :04/03/2565
Author : worapot pilabut (aj.ake)
E-mail : worapot.playdigital@gmail.com
Website : https://www.playdigital.co.th
Copyright (C) 2023, Play digital Co.,Ltd. all rights reserved.

$TeamName = $dataArray['TeamName'];
$ProjectName = $dataArray['ProjectName'];
$TeamName = $dataArray['TeamName'];
$ProjectName = $dataArray['ProjectName'];
$T1FName = $dataArray['T1FName'];
$T1LName = $dataArray['T1LName'];
$T1NickName = $dataArray['T1NickName'];
$T1Bdate = $dataArray['T1Bdate'];
$T1Phone = $dataArray['T1Phone'];
$T1FB = $dataArray['T1FB'];
$T1Email = $dataArray['T1Email'];
$T1JobDescription = $dataArray['T1JobDescription'];

$T2FName = $dataArray['T2FName'];
$T2LName = $dataArray['T2LName'];
$T2NickName = $dataArray['T2NickName'];
$T2Bdate = $dataArray['T2Bdate'];
$T2Phone = $dataArray['T2Phone'];
$T2FB = $dataArray['T2FB'];
$T2Email = $dataArray['T2Email'];
$T2JobDescription = $dataArray['T2JobDescription'];

$T3FName = $dataArray['T3FName'];
$T3LName = $dataArray['T3LName'];
$T3NickName = $dataArray['T3NickName'];
$T3Bdate = $dataArray['T3Bdate'];
$T3Phone = $dataArray['T3Phone'];
$T3FB = $dataArray['T3FB'];
$T3Email = $dataArray['T3Email'];
$T3JobDescription = $dataArray['T3JobDescription'];

$T4FName = $dataArray['T4FName'];
$T4LName = $dataArray['T4LName'];
$T4NickName = $dataArray['T4NickName'];
$T4Bdate = $dataArray['T4Bdate'];
$T4Phone = $dataArray['T4Phone'];
$T4FB = $dataArray['T4FB'];
$T4Email = $dataArray['T4Email'];
$T4JobDescription = $dataArray['T4JobDescription'];

$T5FName = $dataArray['T5FName'];
$T5LName = $dataArray['T5LName'];
$T5NickName = $dataArray['T5NickName'];
$T5Bdate = $dataArray['T5Bdate'];
$T5Phone = $dataArray['T5Phone'];
$T5FB = $dataArray['T5FB'];
$T5Email = $dataArray['T5Email'];
$T5JobDescription = $dataArray['T5JobDescription'];

$T6FName = $dataArray['T6FName'];
$T6LName = $dataArray['T6LName'];
$T6NickName = $dataArray['T6NickName'];
$T6Bdate = $dataArray['T6Bdate'];
$T6Phone = $dataArray['T6Phone'];
$T6FB = $dataArray['T6FB'];
$T6Email = $dataArray['T6Email'];
$T6JobDescription = $dataArray['T6JobDescription'];

$T7FName = $dataArray['T7FName'];
$T7LName = $dataArray['T7LName'];
$T7NickName = $dataArray['T7NickName'];
$T7Bdate = $dataArray['T7Bdate'];
$T7Phone = $dataArray['T7Phone'];
$T7FB = $dataArray['T7FB'];
$T7Email = $dataArray['T7Email'];
$T7JobDescription = $dataArray['T7JobDescription'];

$T8FName = $dataArray['T8FName'];
$T8LName = $dataArray['T8LName'];
$T8NickName = $dataArray['T8NickName'];
$T8Bdate = $dataArray['T8Bdate'];
$T8Phone = $dataArray['T8Phone'];
$T8FB = $dataArray['T8FB'];
$T8Email = $dataArray['T8Email'];
$T8JobDescription = $dataArray['T8JobDescription'];

$T9FName = $dataArray['T9FName'];
$T9LName = $dataArray['T9LName'];
$T9NickName = $dataArray['T9NickName'];
$T9Bdate = $dataArray['T9Bdate'];
$T9Phone = $dataArray['T9Phone'];
$T9FB = $dataArray['T9FB'];
$T9Email = $dataArray['T9Email'];
$T9JobDescription = $dataArray['T9JobDescription'];

$T10FName = $dataArray['T10FName'];
$T10LName = $dataArray['T10LName'];
$T10NickName = $dataArray['T10NickName'];
$T10Bdate = $dataArray['T10Bdate'];
$T10Phone = $dataArray['T10Phone'];
$T10FB = $dataArray['T10FB'];
$T10Email = $dataArray['T10Email'];
$T10JobDescription = $dataArray['T10JobDescription'];
 *****************************************************************/


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/class.TemplatePower.inc.php");
include_once("../include/function.inc.php");
include_once("../authentication/check_login.php");

$tbAppform = "tb_app_form";

$tpl = new TemplatePower("../template/_tp_inner-print.html");
$tpl->assignInclude("body", "_tp_detail.html");
$tpl->prepare();
$tpl->assign("_ROOT.page_title", "ใบสมัคร");
$tpl->assign("_ROOT.logo_brand_alt", $Brand);
$tpl->assign("_ROOT.fullname",$_SESSION['FULLNAME']);
$tpl->assign("_ROOT.avatar","../static/avatars/".$_SESSION['AVATAR']);

//$TodayThaiShow = ThaiToday($strDateTime, $tnow);




$query = "SELECT * FROM `".$tbAppform."` WHERE `id`='".$_GET['id']."'";
$result = $conn->query($query);
while( $line = $result->fetch_assoc()){
    $tpl->newBlock("DATA");
    $tpl->assign("datas", $line['datas']);
    $tpl->assign("TeamName", $line['TeamName']);
    $tpl->assign("ProjectName", $line['ProjectName']);
    $tpl->assign("RegisterDate", $line['created_at']);
    $tpl->assign("id", $line['id']);


    if($line['T1FName'])!=""){
    $tpl->newBlock("DATA1");
    $tpl->assign("T1FName", $line['T1FName']);
    $tpl->assign("T1LName", $line['T1LName']);
    $tpl->assign("T1NickName", $line['T1NickName']);
    $tpl->assign("T1Bdate", $line['T1Bdate']);
    $tpl->assign("T1Phone", $line['T1Phone']);
    $tpl->assign("T1FB", $line['T1FB']);
    $tpl->assign("T1Email", $line['T1Email']);
    $tpl->assign("T1JobDescription", $line['T1JobDescription']);
    $tpl->assign("T1CardUpload", $line['T1CardUpload']);
}

    if($line['T2FName'])!=""){
        $tpl->newBlock("DATA2");
        $tpl->assign("T2FName", $line['T2FName']);
        $tpl->assign("T2LName", $line['T2LName']);
        $tpl->assign("T2NickName", $line['T2NickName']);
        $tpl->assign("T2Bdate", $line['T2Bdate']);
        $tpl->assign("T2Phone", $line['T2Phone']);
        $tpl->assign("T2FB", $line['T2FB']);
        $tpl->assign("T2Email", $line['T2Email']);
    }

    if($line['T3FName'])!=""){

    $tpl->newBlock("DATA3");
    $tpl->assign("T3FName", $line['T3FName']);
    $tpl->assign("T3LName", $line['T3LName']);
    $tpl->assign("T3NickName", $line['T3NickName']);
    $tpl->assign("T3Bdate", $line['T3Bdate']);
    $tpl->assign("T3Phone", $line['T3Phone']);
    $tpl->assign("T3FB", $line['T3FB']);
    $tpl->assign("T3Email", $line['T3Email']);
    $tpl->assign("T3JobDescription", $line['T3JobDescription']);
    $tpl->assign("T3CardUpload", $line['T3CardUpload']);



    } 

    if($line['T4FName'])!=""){

    $tpl->newBlock("DATA4");
    $tpl->assign("T4FName", $line['T4FName']);
    $tpl->assign("T4LName", $line['T4LName']);
    $tpl->assign("T4NickName", $line['T4NickName']);
    $tpl->assign("T4Bdate", $line['T4Bdate']);
    $tpl->assign("T4Phone", $line['T4Phone']);
    $tpl->assign("T4FB", $line['T4FB']);
    $tpl->assign("T4Email", $line['T4Email']);
    $tpl->assign("T4JobDescription", $line['T4JobDescription']);
    $tpl->assign("T4CardUpload", $line['T4CardUpload']);

    }

    if($line['T5FName'])!=""){
    $tpl->assign("T5FName", $line['T5FName']);
    $tpl->assign("T5LName", $line['T5LName']);
    $tpl->newBlock("DATA5");

    $tpl->assign("T5NickName", $line['T5NickName']);
    $tpl->assign("T5Bdate", $line['T5Bdate']);
    $tpl->assign("T5Phone", $line['T5Phone']);
    $tpl->assign("T5FB", $line['T5FB']);
    $tpl->assign("T5Email", $line['T5Email']);
    $tpl->assign("T5JobDescription", $line['T5JobDescription']);
    $tpl->assign("T5CardUpload", $line['T5CardUpload']);


    }




}






$tpl->assign("_ROOT.Powerby", $Powerby);
$tpl->assign("_ROOT.Copyright", $Copyright);
$tpl->printToScreen();

