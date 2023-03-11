<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


$data = json_decode($_REQUEST['entries'], true);
$TeamName = $data['TeamName'];
$ProjectName = $data['ProjectName'];
$T1FName = $data['T1FName'];
$T1LName = $data['T1LName'];
$T1NickName = $data['T1NickName'];
$T1Bdate = $data['T1Bdate'];
$T1Phone = $data['T1Phone'];
$T1FB = $data['T1FB'];
$T1Email = $data['T1Email'];
$T1JobDescription = $data['T1JobDescription'];
$agreement3 = $data['agreement3'];
$T1CardUpload = $data['file_uploads']['T1CardUpload'][0]['url'];

$myfile = fopen("db.txt", "w") or die("Unable to open file!");
fwrite($myfile, $TeamName);
fwrite($myfile, $ProjectName);
fclose($myfile);











?>