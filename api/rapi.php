<?php

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        //echo json_encode(array('message' => 'You sent a GET request'));
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        //echo json_encode(array('message' => 'You sent a POST request', 'data' => $data));
        $data2 = json_encode(array('message' => 'You sent a POST request', 'data' => $data));

        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        //echo json_encode(array('message' => 'You sent a PUT request', 'data' => $data));
        break;
    case 'DELETE':
        //echo json_encode(array('message' => 'You sent a DELETE request'));
        break;
    default:
        //echo json_encode(array('message' => 'Invalid request method'));
        break;
}


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");
$created_at = date("Y-m-d H:i:s");
$arrData = array();
$arrData['datas']     = $data;
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