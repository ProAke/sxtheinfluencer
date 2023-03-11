<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$mydata = '';
foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
        $mydata .= $key . ' : ' . $value ;
        
    }

}

/*entries : {"TeamName":"abc","ProjectName":"WowWow","T1FName":"wr","T1LName":"fc","T1NickName":"f","T1Bdate":"11-03-2023","T1Phone":"0","T1FB":"\u0e48https:\/\/facebook.com\/ake.pro","T1Email":"","T1JobDescription":"do you ","agreement3":"Agreement3"}entry_id : 856form_id : 822version : 3.2.3file_uploads : {"T1CardUpload":[{"url":"https:\/\/www.sxtheinfluencer.com\/wp-content\/uploads\/2023\/03\/1678549156-sr9WySZCLW.png","error":false,"name":"sr9WySZCLW.png","file":"\/var\/www\/vhosts\/sxtheinfluencer.com\/httpdocs\/wp-content\/uploads\/2023\/03\/1678549156-sr9WySZCLW.png","type":"image\/png"}]}

*/
$rsdata = json_decode($_REQUEST, true);

$myfile = fopen("db.txt", "w") or die("Unable to open file!");
fwrite($myfile, $mydata);
fwrite($myfile, $rsdata);
fclose($myfile);

echo "200";

?>