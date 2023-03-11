<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$mydata = '';
foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
       $mydata = $mydata.$key . ' : ' . $value . '\n';
    
//  $mydata ='entries : {"TeamName":"Angle Play","ProjectName":"Reviews Something","T1FName":"worapot","T1LName":"pilabut","T1NickName":"ake ","T1Bdate":"11-03-2023","T1Phone":"0817725922","T1FB":"\u0e48https:\/\/facebook.com\/ake.pro","T1Email":"","T1JobDescription":"\u0e17\u0e33\u0e04\u0e19\u0e40\u0e14\u0e35\u0e22\u0e27","agreement3":"Agreement3"}\nentry_id : 846\nform_id : 822\nversion : 3.2.3\nfile_uploads : {"T1CardUpload":[{"url":"https:\/\/www.sxtheinfluencer.com\/wp-content\/uploads\/2023\/03\/1678545124-sr9WySZCLW.png","error":false,"name":"sr9WySZCLW.png","file":"\/var\/www\/vhosts\/sxtheinfluencer.com\/httpdocs\/wp-content\/uploads\/2023\/03\/1678545124-sr9WySZCLW.png","type":"image\/png"}]}\n';
    }
}


$myfile = fopen("db.txt", "w") or die("Unable to open file!");
fwrite($myfile, $mydata);
fclose($myfile);




?>