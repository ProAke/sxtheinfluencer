<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");



$data = $_REQUEST;
$TeamName0 = $_REQUEST[0]['TeamName'];
$TeamName1 = $_REQUEST[1]['TeamName'];
$TeamName2 = $_REQUEST[2]['TeamName'];
$created_at = date("Y-m-d H:i:s");



$arrData = array();

$arrData['datas']     = $data;
$arrData['TeamName']     = $TeamName0."-1".$TeamName1."-2".$TeamName2";
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


if($result){
    echo "200";
}

?>


