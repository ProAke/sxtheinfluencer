<?php error_reporting(E_ALL ^ E_NOTICE);
/*****************************************************************
Created :20/01/2022
Author : worapot pilabut (pros.ake)
E-mail : worapot.bhi@gmail.com
# Index Check Session
 *****************************************************************/
include_once("../include/config.inc.php");
include_once("../include/function.inc.php");
include_once("../include/class.TemplatePower.inc.php");


if ($_POST['username'] != "" && $_POST['password'] != "") {
	$query = "SELECT * FROM `$tableAdmin` WHERE `USERNAME`='{$_POST['username']}' && `PASSWORD`='{$_POST['password']}'";
	$result = $conn->query($query);

	if ($result->num_rows == 1) {

		$line = $result->fetch_assoc();
	
		$_SESSION['USERNAME'] 	= $line['USERNAME'];
		$_SESSION['PASSWORD'] 	= $line['PASSWORD'];
		$_SESSION['PIN'] 		= $line['PIN'];
		$_SESSION['USER_ID'] 	= $line['USER_ID'];
		$_SESSION['EMAIL'] 		= $line['EMAIL'];
		$_SESSION['NAME'] 		= $line['NAME'];
		$_SESSION['FULLNAME'] 	= $line['FULLNAME'];
		$_SESSION['NICK_NAME']	= $line['NICK_NAME'];
		$_SESSION['PHONE'] 		= $line['PHONE'];
		$_SESSION['LINE_ID'] 	= $line['LINE_ID'];
		$_SESSION['LINEKEY'] 	= $line['LINEKEY'];
		$_SESSION['FACEBOOK'] 	= $line['FACEBOOK'];
		$_SESSION['PRIVILEGES'] = $line['PRIVILEGES'];
		$_SESSION['AVATAR'] 	= $line['AVATAR'];
		$_SESSION['LAST_LOGIN'] = $line['LAST_LOGIN'];
		$_SESSION['COUNT'] 		= $line['COUNT'];
		$_SESSION['STATUS'] 	= $line['TATUS'];
		$_SESSION['LEVEL'] 		= $line['LEVEL'];
		



		// Update Last Login
		$query = "UPDATE `$tableAdmin` SET `LAST_LOGIN`=NOW(),`COUNT`=`COUNT`+1 WHERE `USERNAME`='{$_POST['username']}' && `PASSWORD`='{$_POST['password']}'";
		$result = $conn->query($query);

		header("Location: ../home/index.php");
		exit;
	} else if ($_SESSION['LineID']) {
		header("Location: ../home/index.php");
		exit;
	} else {
		$tpl = new TemplatePower("../template/_tp_login.html");
		$tpl->assignInclude("body", "_tp_index.html");
		$tpl->prepare();

		$tpl->newBlock("ERROR");
		$tpl->assign("strMessage", "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
		$tpl->newBlock("FORM");
		//CheckLogin($_COOKIE[$cookie_name]);
	}
} else {

	$tpl = new TemplatePower("../template/_tp_login.html");
	$tpl->assignInclude("body", "_tp_index.html");
	$tpl->prepare();
	$tpl->newBlock("FORM");


	//CheckLogin($_COOKIE[$cookie_name]);
}

$tpl->assign("_ROOT.page_title", "ระบบจัดการข้อมูล");
$tpl->printToScreen();
