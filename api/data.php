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

/*
$TeamName = $_POST['TeamName'];
$ProjectName = $_POST['ProjectName'];
*/

$TeamName = "Team A";
$ProjectName = "Project A";
$T1FName = $_POST['T1FName'];
$T1LName = $_POST['T1LName'];
$T1NickName = $_POST['T1NickName'];
$T1Bdate = $_POST['T1Bdate'];
$T1Phone = $_POST['T1Phone'];
$T1FB = $_POST['T1FB'];
$T1Email = $_POST['T1Email'];
$T1JobDescription = $_POST['T1JobDescription'];
$T1CardUpload = $_POST['T1CardUpload'];
$T2FName = $_POST['T2FName'];
$T2LName = $_POST['T2LName'];
$T2NickName = $_POST['T2NickName'];
$T2Bdate = $_POST['T2Bdate'];
$T2Phone = $_POST['T2Phone'];
$T2FB = $_POST['T2FB'];
$T2Email = $_POST['T2Email'];
$T2JobDescription = $_POST['T2JobDescription'];
$T2CardUpload = $_POST['T2CardUpload'];
$T3FName = $_POST['T3FName'];
$T3LName = $_POST['T3LName'];
$T3NickName = $_POST['T3NickName'];
$T3Bdate = $_POST['T3Bdate'];
$T3Phone = $_POST['T3Phone'];
$T3FB = $_POST['T3FB'];
$T3Email = $_POST['T3Email'];
$T3JobDescription = $_POST['T3JobDescription'];
$T3CardUpload = $_POST['T3CardUpload'];
$T4FName = $_POST['T4FName'];
$T4LName = $_POST['T4LName'];
$T4NickName = $_POST['T4NickName'];
$T4Bdate = $_POST['T4Bdate'];
$T4Phone = $_POST['T4Phone'];
$T4FB = $_POST['T4FB'];
$T4Email = $_POST['T4Email'];
$T4JobDescription = $_POST['T4JobDescription'];
$T4CardUpload = $_POST['T4CardUpload'];
$T5FName = $_POST['T5FName'];
$T5LName = $_POST['T5LName'];
$T5NickName = $_POST['T5NickName'];
$T5Bdate = $_POST['T5Bdate'];
$T5Phone = $_POST['T5Phone'];
$T5FB = $_POST['T5FB'];
$T5Email = $_POST['T5Email'];
$T5JobDescription = $_POST['T5JobDescription'];
$T5CardUpload = $_POST['T5CardUpload'];
$T6FName = $_POST['T6FName'];
$T6LName = $_POST['T6LName'];
$T6NickName = $_POST['T6NickName'];
$T6Bdate = $_POST['T6Bdate'];
$T6Phone = $_POST['T6Phone'];
$T6FB = $_POST['T6FB'];
$T6Email = $_POST['T6Email'];
$T6JobDescription = $_POST['T6JobDescription'];
$T6CardUpload = $_POST['T6CardUpload'];
$T7FName = $_POST['T7FName'];
$T7LName = $_POST['T7LName'];
$T7NickName = $_POST['T7NickName'];
$T7Bdate = $_POST['T7Bdate'];
$T7Phone = $_POST['T7Phone'];
$T7FB = $_POST['T7FB'];
$T7Email = $_POST['T7Email'];
$T7JobDescription = $_POST['T7JobDescription'];
$T7CardUpload = $_POST['T7CardUpload'];
$T8FName = $_POST['T8FName'];
$T8LName = $_POST['T8LName'];
$T8NickName = $_POST['T8NickName'];
$T8Bdate = $_POST['T8Bdate'];
$T8Phone = $_POST['T8Phone'];
$T8FB = $_POST['T8FB'];
$T8Email = $_POST['T8Email'];
$T8JobDescription = $_POST['T8JobDescription'];
$T8CardUpload = $_POST['T8CardUpload'];
$T9FName = $_POST['T9FName'];
$T9LName = $_POST['T9LName'];
$T9NickName = $_POST['T9NickName'];
$T9Bdate = $_POST['T9Bdate'];
$T9Phone = $_POST['T9Phone'];
$T9FB = $_POST['T9FB'];
$T9Email = $_POST['T9Email'];
$T9JobDescription = $_POST['T9JobDescription'];
$T9CardUpload = $_POST['T9CardUpload'];
$T10FName = $_POST['T10FName'];
$T10LName = $_POST['T10LName'];
$T10NickName = $_POST['T10NickName'];
$T10Bdate = $_POST['T10Bdate'];
$T10Phone = $_POST['T10Phone'];
$T10FB = $_POST['T10FB'];
$T10Email = $_POST['T10Email'];
$T10JobDescription = $_POST['T10JobDescription'];
$T10CardUpload = $_POST['T10CardUpload'];
$status = $_POST['status'];
$created_at = date("Y-m-d H:i:s");



$query = "SELECT * FROM `tb_app_form` ORDER BY `id` DESC";
$result = $conn->query($query);
if ($line = $result->fetch_assoc()) {
    $newid = $line['id'] + 1;

    if ($newid < 10) {
        $newcode = "SX" . "000" . $newid;
    } else if ($newid < 100 and $newid >= 10) {
        $newcode = "SX" . "00" . $newid;
    } else {
        $newcode = "SX0" . $newid;
    }
}





if ($_FILES["T1CardUpload"]["size"] > "0") {
    $T1extension  = pathinfo($_FILES["T1CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T1new_name   = $newcode . "_1." . $T1extension;
    $T1Photo_type = ["T1CardUpload"]["type"];
    $T1Card= SaveUploadImg($_FILES['T1CardUpload'], '../uploads/');
    rename('../uploads/' . $T1new_name);
    $T1CardUploadName = $T1new_name;
}
if ($_FILES["T2CardUpload"]["size"] > "0") {
    $T2extension  = pathinfo($_FILES["T2CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T2new_name   = $newcode . "_2." . $T2extension;
    $T2Photo_type = ["T2CardUpload"]["type"];
    $T2Card= SaveUploadImg($_FILES['T2CardUpload'], '../uploads/');
    rename('../uploads/' . $T2new_name);
    $T2CardUploadName = $T2new_name;
}

if ($_FILES["T3CardUpload"]["size"] > "0") {
    $T3extension  = pathinfo($_FILES["T3CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T3new_name   = $newcode . "_3." . $T3extension;
    $T3Photo_type = ["T3CardUpload"]["type"];
    $T3Card= SaveUploadImg($_FILES['T3CardUpload'], '../uploads/');
    rename('../uploads/' . $T3new_name);
    $T3CardUploadName = $T3new_name;
}

if ($_FILES["T4CardUpload"]["size"] > "0") {
    $T4extension  = pathinfo($_FILES["T4CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T4new_name   = $newcode . "_4." . $T4extension;
    $T4Photo_type = ["T4CardUpload"]["type"];
    $T4Card= SaveUploadImg($_FILES['T4CardUpload'], '../uploads/');
    rename('../uploads/' . $T4new_name);
    $T4CardUploadName = $T4new_name;
}
if ($_FILES["T5CardUpload"]["size"] > "0") {
    $T5extension  = pathinfo($_FILES["T5CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T5new_name   = $newcode . "_5." . $T5extension;
    $T5Photo_type = ["T5CardUpload"]["type"];
    $T5Card= SaveUploadImg($_FILES['T5CardUpload'], '../uploads/');
    rename('../uploads/' . $T5new_name);
    $T5CardUploadName = $T5new_name;
}


if ($_FILES["T6CardUpload"]["size"] > "0") {
    $T6extension  = pathinfo($_FILES["T6CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T6new_name   = $newcode . "_6." . $T6extension;
    $T6Photo_type = ["T6CardUpload"]["type"];
    $T6Card= SaveUploadImg($_FILES['T6CardUpload'], '../uploads/');
    rename('../uploads/' . $T6new_name);
    $T6CardUploadName = $T6new_name;
}

if ($_FILES["T7CardUpload"]["size"] > "0") {
    $T7extension  = pathinfo($_FILES["T7CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T7new_name   = $newcode . "_7." . $T7extension;
    $T7Photo_type = ["T7CardUpload"]["type"];
    $T7Card= SaveUploadImg($_FILES['T7CardUpload'], '../uploads/');
    rename('../uploads/' . $T7new_name);
    $T7CardUploadName = $T7new_name;
}

if ($_FILES["T8CardUpload"]["size"] > "0") {
    $T8extension  = pathinfo($_FILES["T8CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T8new_name   = $newcode . "_8." . $T8extension;
    $T8Photo_type = ["T8CardUpload"]["type"];
    $T8Card= SaveUploadImg($_FILES['T8CardUpload'], '../uploads/');
    rename('../uploads/' . $T8new_name);
    $T8CardUploadName = $T8new_name;
}

if ($_FILES["T9CardUpload"]["size"] > "0") {
    $T9extension  = pathinfo($_FILES["T9CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T9new_name   = $newcode . "_9." . $T9extension;
    $T9Photo_type = ["T9CardUpload"]["type"];
    $T9Card= SaveUploadImg($_FILES['T9CardUpload'], '../uploads/');
    rename('../uploads/' . $T9new_name);
    $T9CardUploadName = $T9new_name;
}

if ($_FILES["T10CardUpload"]["size"] > "0") {
    $T10extension  = pathinfo($_FILES["T10CardUpload"]["name"], PATHINFO_EXTENSION); // jpg
    $T10new_name   = $newcode . "_10." . $T10extension;
    $T10Photo_type = ["T10CardUpload"]["type"];
    $T10Card= SaveUploadImg($_FILES['T10CardUpload'], '../uploads/');
    rename('../uploads/' . $T10new_name);
    $T10CardUploadName = $T10new_name;
}


/*
id
TeamName
ProjectName
T1FName
T1LName
T1NickName
T1Bdate
T1Phone
T1FB
T1Email
T1JobDescription
T1CardUpload
T2FName
T2LName
T2NickName
T2Bdate
T2Phone
T2FB
T2Email
T2JobDescription
T2CardUpload
T3FName
T3LName
T3NickName
T3Bdate
T3Phone
T3FB
T3Email
T3JobDescription
T3CardUpload
T4FName
T4LName
T4NickName
T4Bdate
T4Phone
T4FB
T4Email
T4JobDescription
T4CardUpload
T5FName
T5LName
T5NickName
T5Bdate
T5Phone
T5FB
T5Email
T5JobDescription
T5CardUpload
T6FName
T6LName
T6NickName
T6Bdate
T6Phone
T6FB
T6Email
T6JobDescription
T6CardUpload
T7FName
T7LName
T7NickName
T7Bdate
T7Phone
T7FB
T7Email
T7JobDescription
T7CardUpload
T8FName
T8LName
T8NickName
T8Bdate
T8Phone
T8FB
T8Email
T8JobDescription
T8CardUpload
T9FName
T9LName
T9NickName
T9Bdate
T9Phone
T9FB
T9Email
T9JobDescription
T9CardUpload
T10FName
T10LName
T10NickName
T10Bdate
T10Phone
T10FB
T10Email
T10JobDescription
T10CardUpload
status
created_at

*/

$arrData = array();
$arrData['TeamName']     = $TeamName;
$arrData['ProjectName']  = $ProjectName;
for($i=1;$i<=10;$i++){
    if(${"T".$i."FName"} != ""){    $arrData['T'.$i.'FName']      = ${"T".$i."FName"};}
    if(${"T".$i."LName"} != ""){    $arrData['T'.$i.'LName']      = ${"T".$i."LName"};}
    if(${"T".$i."NickName"} != "")  {$arrData['T'.$i.'NickName']   = ${"T".$i."NickName"};}
    if(${"T".$i."Bdate"} != ""){    $arrData['T'.$i.'Bdate']      = ${"T".$i."Bdate"};}
    if(${"T".$i."Phone"} != ""){    $arrData['T'.$i.'Phone']      = ${"T".$i."Phone"};}
    if(${"T".$i."FB"} != ""){       $arrData['T'.$i.'FB']        = ${"T".$i."FB"};}
    if(${"T".$i."Email"} != ""){    $arrData['T'.$i.'Email']      = ${"T".$i."Email"};}
    if(${"T".$i."JobDescription"} != ""){$arrData['T'.$i.'JobDescription'] = ${"T".$i."JobDescription"};}
    if(${"T".$i."CardUploadName"} != ""){$arrData['T'.$i.'CardUpload']    = ${"T".$i."CardUploadName"};}
}
$arrData['status']      = 0;
$arrData['created_at']   = $created_at;
foreach ($arrData as $key => $value) {
    $arrFieldTmp[] = "`$key`";
    $arrValueTmp[] = "'$value'";
}
$strFieldTmp = implode(",", $arrFieldTmp);
$strValueTmp = implode(",", $arrValueTmp);
$query = "INSERT INTO `tb_app_form`($strFieldTmp) VALUES($strValueTmp)";
$result = $conn->query($query);



echo "OK";


?>