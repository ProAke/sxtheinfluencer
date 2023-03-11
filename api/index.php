<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$mydata = '';
foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
        $mydata .= $key . ' : ' . $value ;
        
    }

}

$TeamName = $_REQUEST['TeamName'];


$myfile = fopen("db.txt", "w") or die("Unable to open file!");
fwrite($myfile, $mydata);
fwrite($myfile, $TeamName);
fclose($myfile);

echo "200";

?>