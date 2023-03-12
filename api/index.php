<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");



$data = $_REQUEST;
$i=1;
foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
        $data .= $key . ' : ' . $value . '\n';
        if($i==1){
            $TeamName = "1-".$key.$value;
        }
        if($i==2){
            $TeamName = $TeamName."-2-".$key.$value;
        }
    }
    $i++;
}


$created_at = date("Y-m-d H:i:s");



$arrData = array();

$arrData['datas']     = $data;
$arrData['TeamName']     = $TeamName;
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


