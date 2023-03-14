<?
/*
entries : {"TeamName":"\u0e19\u0e32\u0e07\u0e1f\u0e49\u0e32\u0e41\u0e2a\u0e19\u0e2a\u0e27\u0e22","ProjectName":"\u0e23\u0e35\u0e27\u0e34\u0e27\u0e2b\u0e21\u0e39\u0e01\u0e23\u0e30\u0e17\u0e30\u0e2a\u0e32\u0e21\u0e1e\u0e35\u0e48\u0e19\u0e49\u0e2d\u0e07","T1FName":"\u0e2b\u0e27\u0e32\u0e19\u0e43\u0e08","T1LName":"\u0e40\u0e2a\u0e23\u0e34\u0e21\u0e2a\u0e38\u0e02","T1NickName":"o","T1Bdate":"11-03-2023","T1Phone":"0817725922","T1FB":"\u0e48https:\/\/facebook.com\/ake.pro","T1Email":"","T1JobDescription":"do you ","agreement3":"Agreement3"}\nentry_id : 842\nform_id : 822\nversion : 3.2.3\nfile_uploads : {"T1CardUpload":[{"url":"https:\/\/www.sxtheinfluencer.com\/wp-content\/uploads\/2023\/03\/1678543527-sr9WySZCLW.png","error":false,"name":"sr9WySZCLW.png","file":"\/var\/www\/vhosts\/sxtheinfluencer.com\/httpdocs\/wp-content\/uploads\/2023\/03\/1678543527-sr9WySZCLW.png","type":"image\/png"}]}\n
*/


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
fwrite($myfile, $T1FName);
fwrite($myfile, $T1LName);
fwrite($myfile, $T1NickName);
fwrite($myfile, $T1Bdate);
fwrite($myfile, $T1Phone);
fwrite($myfile, $T1FB);
fwrite($myfile, $T1Email);
fwrite($myfile, $T1JobDescription);
fwrite($myfile, $agreement3);
fwrite($myfile, $T1CardUpload);
fclose($myfile);


//

?>