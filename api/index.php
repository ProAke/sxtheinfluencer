<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");



foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
        $mydata .= $key . ' : ' . $value ;
        
    }

}

$mydata2 = json_decode($mydata ,true);
$TeamName =$mydata2['entries']['TeamName'];

$t1 =$_REQUEST[0]['TeamName'];
$t2   = json_decode($_REQUEST, true);
$created_at = date("Y-m-d H:i:s");



$arrData = array();

$arrData['datas']     = $t2."------------".$t1;
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


