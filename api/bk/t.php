<?php

include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");
$created_at = date("Y-m-d H:i:s");
$arrData = array();
$arrData['status']          = 0;
$arrData['created_at']      = $created_at;
foreach ($arrData as $key => $value) { $arrFieldTmp[] = "`$key`"; $arrValueTmp[] = "'$value'";}
$strFieldTmp = implode(",", $arrFieldTmp);
$strValueTmp = implode(",", $arrValueTmp);
$query = "INSERT INTO `tb_app_form2`($strFieldTmp) VALUES($strValueTmp)";
$rs = $conn->query($query);
$regis_id = $conn->insert_id;

echo "---->".$regis_id;


















?>