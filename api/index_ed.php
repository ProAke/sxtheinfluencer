<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$mydata = '';
foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
        $mydata .= $key . ' : ' . $value ;
        $keyonly .=$key;
    }

}



$myfile = fopen("db.txt", "w") or die("Unable to open file!");
fwrite($myfile, $mydata);
fwrite($myfile, '\n\n\n------------------\n\n\n\n');
fwrite($myfile, $keyonly);
fclose($myfile);

echo "200";


// data sent from android app
// Replace API KEY with your own API KEY

?>