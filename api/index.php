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
            $data1 = $key.$value;
        }
        if($i==2){
            $data2 = $key.$value;
        }
    }
    $i++;
}



$jsonString = substr($data1, strpos($data1, '{'), strrpos($data1, '}') - strpos($data1, '{') + 1);
// Convert the string to an array
$dataArray = json_decode($jsonString, true);
$TeamName = $dataArray['TeamName'];



$created_at = date("Y-m-d H:i:s");

$TeamName2 = "-2-".$_REQUEST['entries']['TeamName'];

$arrData = array();

$arrData['datas']     = $data;
$arrData['TeamName']     = $TeamName.$TeamName2;
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


