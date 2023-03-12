<?php

$data = '{entries : {"TeamName":"abc","ProjectName":"WowWow","T1FName":"wr","T1LName":"fc","T1NickName":"f","T1Bdate":"11-03-2023","T1Phone":"0","T1FB":"\\u0e48https:\\/\\/facebook.com\\/ake.pro","T1Email":"","T1JobDescription":"do you ","agreement3":"Agreement3"}entry_id : 856form_id : 822version : 3.2.3file_uploads : {"T1CardUpload":[{"url":"https:\\/\\/www.sxtheinfluencer.com\\/wp-content\\/uploads\\/2023\\/03\\/1678549156-sr9WySZCLW.png","error":false,"name":"sr9WySZCLW.png","file":"\\/var\\/www\\/vhosts\\/sxtheinfluencer.com\\/httpdocs\\/wp-content\\/uploads\\/2023\\/03\\/1678549156-sr9WySZCLW.png","type":"image\\/png"}]}}';


header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        echo json_encode(array('message' => 'You sent a GET request'));
        break;
    case 'POST':
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data === null) {
            echo json_encode(array('error' => 'Invalid JSON data'));
        } else {
            echo json_encode(array('message' => 'You sent a POST request', 'data' => $data));
        }
        break;
    case 'PUT':
        $data = json_decode(file_get_contents('php://input'), true);
        if ($data === null) {
            echo json_encode(array('error' => 'Invalid JSON data'));
        } else {
            echo json_encode(array('message' => 'You sent a PUT request', 'data' => $data));
        }
        break;
    case 'DELETE':
        echo json_encode(array('message' => 'You sent a DELETE request'));
        break;
    default:
        echo json_encode(array('error' => 'Invalid request method'));
        break;
}

?>
