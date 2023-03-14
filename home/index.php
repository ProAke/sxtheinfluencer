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
	$result = $conn->query($query);
	$tpl->newBlock("SAVE");
}

// Delete
if($_GET['action'] == "delete" && $_GET['id'] != ""){
	$query = "DELETE FROM `$tbAppform` WHERE `id`='{$_GET['id']}' ";
    $result = $conn->query($query);
	$tpl->newBlock("REMOVE");
}

// Show Data



$query = "SELECT * FROM `tb_app_form` WHERE `status`='0' ORDER BY `created_at` DESC LIMIT 0,1000";
$result = $conn->query($query);
while( $line = $result->fetch_assoc()){
    $tpl->newBlock("DATA");
    $tpl->assign("datas", $line['datas']);
    $tpl->assign("TeamName", $line['TeamName']);
    $tpl->assign("ProjectName", $line['ProjectName']);


    if($line['T1FName'] != ""){$AllTeam = "1.".$line['T1FName']." ".$line['T1LName']."  หน้าที่ : ".$line['T1JobDescription']."<br>";}
    if($line['T2FName'] != ""){$AllTeam .= "2.".$line['T2FName']." ".$line['T2LName']." หน้าที่ : ".$line['T2JobDescription']."<br>";}
    if($line['T3FName'] != ""){$AllTeam .= "3.".$line['T3FName']." ".$line['T3LName']." หน้าที่ : ".$line['T3JobDescription']."<br>";}
    if($line['T4FName'] != ""){$AllTeam .= "4.".$line['T4FName']." ".$line['T4LName']." หน้าที่ : ".$line['T4JobDescription']."<br>";}
    if($line['T5FName'] != ""){$AllTeam .= "5.".$line['T5FName']." ".$line['T5LName']." หน้าที่ : ".$line['T5JobDescription']."<br>";}
    if($line['T6FName'] != ""){$AllTeam .= "6.".$line['T6FName']." ".$line['T6LName']." หน้าที่ : ".$line['T6JobDescription']."<br>";}
    if($line['T7FName'] != ""){$AllTeam .= "7.".$line['T7FName']." ".$line['T7LName']." หน้าที่ : ".$line['T7JobDescription']."<br>";}
    if($line['T8FName'] != ""){$AllTeam .= "8.".$line['T8FName']." ".$line['T8LName']." หน้าที่ : ".$line['T8JobDescription']."<br>";}
    if($line['T9FName'] != ""){$AllTeam .= "9.".$line['T9FName']." ".$line['T9LName']." หน้าที่ : ".$line['T9JobDescription']."<br>";}
    if($line['T10FName'] != ""){$AllTeam .= "10.".$line['T10FName']." ".$line['T10LName']." หน้าที่ : ".$line['T10JobDescription']."<br>";}

    $tpl->assign("AllTeam", $AllTeam);
    $tpl->assign("RegisterDate", $line['created_at']);
    $tpl->assign("id", $line['id']);

}






$tpl->assign("_ROOT.Powerby", $Powerby);
$tpl->assign("_ROOT.Copyright", $Copyright);
$tpl->printToScreen();

