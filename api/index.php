<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");



foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
        $data .= $key . ' : ' . $value ;
        
    }

}



// Extract the "entries" object from the data
preg_match('/"entries"\\s*:\\s*({[^}]+})/', $data, $matches);
$entries = json_decode($matches[1], true);

// Extract the "TeamName" and "T1JobDescription" values
$TeamName = $entries['TeamName'];
//$t1JobDescription = $entries['T1JobDescription'];
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


