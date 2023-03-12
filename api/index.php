<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");
require('system/config.php');


$data = $_REQUEST;
$i=1;
foreach($_REQUEST as $key => $value) {
    if(!empty($value)) {
        $data0 .= $key.$value . '\n';
        if($i==1){
            $data1 = $key.$value;
        }
        if($i==2){
            $data2 = $key.$value;
        }
        if($i==3){
            $data3 = $key.$value;
        }
        if($i==4){
            $data4 = $key.$value;
        }     
        if($i==5){
            $data5 = $key.$value;
        }   
        if($i==6){
            $data6 = $key.$value;
        }
    }
    $i++;
}


$jsonString = substr($data1, strpos($data1, '{'), strrpos($data1, '}') - strpos($data1, '{') + 1);
$dataArray = json_decode($jsonString, true);




$durl = json_decode(substr($data5, strpos($data5, '{')), true);
$T1CardUpload = $durl['T1CardUpload'][0]['url'];
$T2CardUpload = $durl['T2CardUpload'][0]['url'];
$T3CardUpload = $durl['T3CardUpload'][0]['url'];
$T4CardUpload = $durl['T4CardUpload'][0]['url'];
$T5CardUpload = $durl['T5CardUpload'][0]['url'];
$T6CardUpload = $durl['T6CardUpload'][0]['url'];
$T7CardUpload = $durl['T7CardUpload'][0]['url'];
$T8CardUpload = $durl['T8CardUpload'][0]['url'];
$T9CardUpload  = $durl['T9CardUpload'][0]['url'];
$T10CardUpload = $durl['T10CardUpload'][0]['url'];




$TeamName = $dataArray['TeamName'];
$ProjectName = $dataArray['ProjectName'];
$TeamName = $dataArray['TeamName'];
$ProjectName = $dataArray['ProjectName'];
$T1FName = $dataArray['T1FName'];
$T1LName = $dataArray['T1LName'];
$T1NickName = $dataArray['T1NickName'];
$T1Bdate = $dataArray['T1Bdate'];
$T1Phone = $dataArray['T1Phone'];
$T1FB = $dataArray['T1FB'];
$T1Email = $dataArray['T1Email'];
$T1JobDescription = $dataArray['T1JobDescription'];

$T2FName = $dataArray['T2FName'];
$T2LName = $dataArray['T2LName'];
$T2NickName = $dataArray['T2NickName'];
$T2Bdate = $dataArray['T2Bdate'];
$T2Phone = $dataArray['T2Phone'];
$T2FB = $dataArray['T2FB'];
$T2Email = $dataArray['T2Email'];
$T2JobDescription = $dataArray['T2JobDescription'];

$T3FName = $dataArray['T3FName'];
$T3LName = $dataArray['T3LName'];
$T3NickName = $dataArray['T3NickName'];
$T3Bdate = $dataArray['T3Bdate'];
$T3Phone = $dataArray['T3Phone'];
$T3FB = $dataArray['T3FB'];
$T3Email = $dataArray['T3Email'];
$T3JobDescription = $dataArray['T3JobDescription'];

$T4FName = $dataArray['T4FName'];
$T4LName = $dataArray['T4LName'];
$T4NickName = $dataArray['T4NickName'];
$T4Bdate = $dataArray['T4Bdate'];
$T4Phone = $dataArray['T4Phone'];
$T4FB = $dataArray['T4FB'];
$T4Email = $dataArray['T4Email'];
$T4JobDescription = $dataArray['T4JobDescription'];

$T5FName = $dataArray['T5FName'];
$T5LName = $dataArray['T5LName'];
$T5NickName = $dataArray['T5NickName'];
$T5Bdate = $dataArray['T5Bdate'];
$T5Phone = $dataArray['T5Phone'];
$T5FB = $dataArray['T5FB'];
$T5Email = $dataArray['T5Email'];
$T5JobDescription = $dataArray['T5JobDescription'];

$T6FName = $dataArray['T6FName'];
$T6LName = $dataArray['T6LName'];
$T6NickName = $dataArray['T6NickName'];
$T6Bdate = $dataArray['T6Bdate'];
$T6Phone = $dataArray['T6Phone'];
$T6FB = $dataArray['T6FB'];
$T6Email = $dataArray['T6Email'];
$T6JobDescription = $dataArray['T6JobDescription'];

$T7FName = $dataArray['T7FName'];
$T7LName = $dataArray['T7LName'];
$T7NickName = $dataArray['T7NickName'];
$T7Bdate = $dataArray['T7Bdate'];
$T7Phone = $dataArray['T7Phone'];
$T7FB = $dataArray['T7FB'];
$T7Email = $dataArray['T7Email'];
$T7JobDescription = $dataArray['T7JobDescription'];

$T8FName = $dataArray['T8FName'];
$T8LName = $dataArray['T8LName'];
$T8NickName = $dataArray['T8NickName'];
$T8Bdate = $dataArray['T8Bdate'];
$T8Phone = $dataArray['T8Phone'];
$T8FB = $dataArray['T8FB'];
$T8Email = $dataArray['T8Email'];
$T8JobDescription = $dataArray['T8JobDescription'];

$T9FName = $dataArray['T9FName'];
$T9LName = $dataArray['T9LName'];
$T9NickName = $dataArray['T9NickName'];
$T9Bdate = $dataArray['T9Bdate'];
$T9Phone = $dataArray['T9Phone'];
$T9FB = $dataArray['T9FB'];
$T9Email = $dataArray['T9Email'];
$T9JobDescription = $dataArray['T9JobDescription'];

$T10FName = $dataArray['T10FName'];
$T10LName = $dataArray['T10LName'];
$T10NickName = $dataArray['T10NickName'];
$T10Bdate = $dataArray['T10Bdate'];
$T10Phone = $dataArray['T10Phone'];
$T10FB = $dataArray['T10FB'];
$T10Email = $dataArray['T10Email'];
$T10JobDescription = $dataArray['T10JobDescription'];

/*rule1
rule2
agreement2
agreement3
*/
$rule1 = $dataArray['rule1'];
$rule2 = $dataArray['rule2'];
$agreement2 = $dataArray['agreement2'];
$agreement3 = $dataArray['agreement3'];





$created_at = date("Y-m-d H:i:s");
$arrData = array();
$arrData['datas']           = $data0;
$arrData['datas2']          = $data2."#3)".$data3."#4)".$data4."#5)".$data5."#6)".$data6;
$arrData['TeamName']        = $TeamName;
$arrData['ProjectName']     = $ProjectName;
$arrData['T1FName']         = $T1FName;
$arrData['T1LName']         = $T1LName;
$arrData['T1NickName']      = $T1NickName;
$arrData['T1Bdate']         = $T1Bdate;
$arrData['T1Phone']         = $T1Phone;
$arrData['T1FB']            = $T1FB;
$arrData['T1Email']         = $T1Email;
$arrData['T1JobDescription']   = $T1JobDescription;
$arrData['T1CardUpload']    = $T1CardUpload;

$arrData['T2FName']         = $T2FName;
$arrData['T2LName']         = $T2LName;
$arrData['T2NickName']      = $T2NickName;
$arrData['T2Bdate']         = $T2Bdate;
$arrData['T2Phone']         = $T2Phone;
$arrData['T2FB']            = $T2FB;
$arrData['T2Email']         = $T2Email;
$arrData['T2JobDescription']   = $T2JobDescription;
$arrData['T2CardUpload']    = $T2CardUpload;

$arrData['T3FName']         = $T3FName;
$arrData['T3LName']         = $T3LName;
$arrData['T3NickName']      = $T3NickName;
$arrData['T3Bdate']         = $T3Bdate;
$arrData['T3Phone']         = $T3Phone;
$arrData['T3FB']            = $T3FB;
$arrData['T3Email']         = $T3Email;
$arrData['T3JobDescription']   = $T3JobDescription;
$arrData['T3CardUpload']    = $T3CardUpload;

$arrData['T4FName']         = $T4FName;
$arrData['T4LName']         = $T4LName;
$arrData['T4NickName']      = $T4NickName;
$arrData['T4Bdate']         = $T4Bdate;
$arrData['T4Phone']         = $T4Phone;
$arrData['T4FB']            = $T4FB;
$arrData['T4Email']         = $T4Email;
$arrData['T4JobDescription']   = $T4JobDescription;
$arrData['T4CardUpload']    = $T4CardUpload;

$arrData['T5FName']         = $T5FName;
$arrData['T5LName']         = $T5LName;
$arrData['T5NickName']      = $T5NickName;
$arrData['T5Bdate']         = $T5Bdate;
$arrData['T5Phone']         = $T5Phone;
$arrData['T5FB']            = $T5FB;
$arrData['T5Email']         = $T5Email;
$arrData['T5JobDescription']   = $T5JobDescription;
$arrData['T5CardUpload']    = $T5CardUpload;

$arrData['T6FName']         = $T6FName;
$arrData['T6LName']         = $T6LName;
$arrData['T6NickName']      = $T6NickName;
$arrData['T6Bdate']         = $T6Bdate;
$arrData['T6Phone']         = $T6Phone;
$arrData['T6FB']            = $T6FB;
$arrData['T6Email']         = $T6Email;
$arrData['T6JobDescription']   = $T6JobDescription;
$arrData['T6CardUpload']    = $T6CardUpload;

$arrData['T7FName']         = $T7FName;
$arrData['T7LName']         = $T7LName;
$arrData['T7NickName']      = $T7NickName;
$arrData['T7Bdate']         = $T7Bdate;
$arrData['T7Phone']         = $T7Phone;
$arrData['T7FB']            = $T7FB;
$arrData['T7Email']         = $T7Email;
$arrData['T7JobDescription']   = $T7JobDescription;
$arrData['T7CardUpload']    = $T7CardUpload;

$arrData['T8FName']         = $T8FName;
$arrData['T8LName']         = $T8LName;
$arrData['T8NickName']      = $T8NickName;
$arrData['T8Bdate']         = $T8Bdate;
$arrData['T8Phone']         = $T8Phone;
$arrData['T8FB']            = $T8FB;
$arrData['T8Email']         = $T8Email;
$arrData['T8JobDescription']   = $T8JobDescription;
$arrData['T8CardUpload']    = $T8CardUpload;
$arrData['T9FName']         = $T9FName;
$arrData['T9LName']         = $T9LName;
$arrData['T9NickName']      = $T9NickName;
$arrData['T9Bdate']         = $T9Bdate;
$arrData['T9Phone']         = $T9Phone;
$arrData['T9FB']            = $T9FB;
$arrData['T9Email']         = $T9Email;
$arrData['T9JobDescription']   = $T9JobDescription;
$arrData['T9CardUpload']    = $T9CardUpload;

$arrData['T10FName']        = $T10FName;
$arrData['T10LName']        = $T10LName;
$arrData['T10NickName']     = $T10NickName;
$arrData['T10Bdate']        = $T10Bdate;
$arrData['T10Phone']        = $T10Phone;
$arrData['T10FB']           = $T10FB;
$arrData['T10Email']        = $T10Email;
$arrData['T10JobDescription']  = $T10JobDescription;
$arrData['T10CardUpload']   = $T10CardUpload;
$arrData['rule1']           = $rule1;
$arrData['rule2']           = $rule2;
$arrData['agreement2']      = $agreement2;
$arrData['agreement3']      = $agreement3;
$arrData['status']          = 0;
$arrData['created_at']      = $created_at;
foreach ($arrData as $key => $value) {
    $arrFieldTmp[] = "`$key`";
    $arrValueTmp[] = "'$value'";
}
$strFieldTmp = implode(",", $arrFieldTmp);
$strValueTmp = implode(",", $arrValueTmp);
$query = "INSERT INTO `tb_app_form`($strFieldTmp) VALUES($strValueTmp)";
$result = $conn->query($query);


if($result){

for($i=1;$i<=10;$i++){

    $resulttx = Login();
    if($resulttx['status'] == 'success'){
    
    //------------- T1 ---------------------------------   
     if ($T1Email != "") {
        $session_id = $resulttx['data']['session_id'];
        $message_id = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T1FName." ".$T1LName;; 
        $param['to_email'] = $T1Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $param['message_id'] = genMessageID($message_id);
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id;         
        $resulttx = sendTransactional($param);
        $session_id="";
    
        }
      //------------- T2 ---------------------------------   
      if ($T2Email != "") {
        $session_id = $resulttx['data']['session_id'];
        $message_id = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T2FName." ".$T2LName;; 
        $param['to_email'] = $T2Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $param['message_id'] = genMessageID($message_id);
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id;         
        $resulttx = sendTransactional($param);
        $session_id="";
    
        }  
    
    
    //------------- T3 ---------------------------------   
    if ($T3Email != "") {
        $session_id = $resulttx['data']['session_id'];
        $message_id = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T3FName." ".$T3LName;; 
        $param['to_email'] = $T3Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $param['message_id'] = genMessageID($message_id);
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id;         
        $resulttx = sendTransactional($param);
        $session_id="";
    
        }
      //------------- T4 ---------------------------------   
      if ($T4Email != "") {
        $session_id = $resulttx['data']['session_id'];
        $message_id = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T4FName." ".$T4LName;; 
        $param['to_email'] = $T4Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $param['message_id'] = genMessageID($message_id);
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id;         
        $resulttx = sendTransactional($param);
        $session_id="";
    
        }  



      //------------- T5 ---------------------------------   
      if ($T5Email != "") {
        $session_id = $resulttx['data']['session_id'];
        $message_id = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T5FName." ".$T5LName;; 
        $param['to_email'] = $T5Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $param['message_id'] = genMessageID($message_id);
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id;         
        $resulttx = sendTransactional($param);
        $session_id="";
    
        }  




 //------------- T6 ---------------------------------   
 if ($T6Email != "") {
    $session_id = $resulttx['data']['session_id'];
    $message_id = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T6FName." ".$T6LName;; 
    $param['to_email'] = $T6Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $param['message_id'] = genMessageID($message_id);
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id;         
    $resulttx = sendTransactional($param);
    $session_id="";

    }
  //------------- T2 ---------------------------------   
  if ($T7Email != "") {
    $session_id = $resulttx['data']['session_id'];
    $message_id = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T7FName." ".$T7LName;; 
    $param['to_email'] = $T7Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $param['message_id'] = genMessageID($message_id);
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id;         
    $resulttx = sendTransactional($param);
    $session_id="";

    }  


//------------- T8 ---------------------------------   
if ($T8Email != "") {
    $session_id = $resulttx['data']['session_id'];
    $message_id = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T8FName." ".$T8LName;; 
    $param['to_email'] = $T8Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $param['message_id'] = genMessageID($message_id);
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id;         
    $resulttx = sendTransactional($param);
    $session_id="";

    }
  //------------- T9 ---------------------------------   
  if ($T9Email != "") {
    $session_id = $resulttx['data']['session_id'];
    $message_id = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T9FName." ".$T9LName;; 
    $param['to_email'] = $T9Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $param['message_id'] = genMessageID($message_id);
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id;         
    $resulttx = sendTransactional($param);
    $session_id="";

    }  



  //------------- T10 ---------------------------------   
  if ($T10Email != "") {
    $session_id = $resulttx['data']['session_id'];
    $message_id = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T10FName." ".$T10LName;; 
    $param['to_email'] = $T10Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    //$param['content_html'] = '{"Firstname":"'.$FName[$i].'","Lastname":"'.$LName[$i].'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $param['message_id'] = genMessageID($message_id);
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id;         
    $resulttx = sendTransactional($param);
    $session_id="";

    }  












    }else{
        echo "Login Failed!! : ".$resulttx['ErrorMessage'];
    }

}
















}












function sendTransactional($param){
	$url = WEB_BASE_API.'transactional';
	$result = cURL('POST',$url,$param);
	return $result;
}

function genMessageID($message_id){
	if($message_id == ""){
		$time = strtotime(date('Y-m-d H:i:s'));
		$characters = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	  	$out = "";
	  	for($i=0;$i<5;$i++){
			$rand_num = rand(0,60);
			$alpha_out = $characters[$rand_num];
			$out = $out.$alpha_out;
		}
		$message_id = md5("MESSAGE"."_".$time."_".$out);
	}
	return $message_id;
}

function Login(){
	$url = WEB_BASE_API.'user/login';
    $param = array();
    $param['username'] = WEB_LOGIN_EMAIL;
    $param['password'] = WEB_LOGIN_PASSWORD;
	$result = cURL('POST',$url,$param);
    $result = json_decode($result,true);
	return $result;
}

function cURL($mode="POST",$url=NULL,$params=array(),$opts=array()){
    if ($mode == "") {
        $mode = "POST";
    }

    if(isset($mode) && strtoupper($mode) == "GET"){
        $query_str = "";
        foreach ($params as $key => $value) {
            if($query_str != ""){
                $query_str .= "&";
            }
            $query_str .= $key."=".urlencode($value);
        }
        if($query_str != ""){
            $url .= "?".$query_str;
        }
    }else{
        $params = http_build_query($params);
        $opts[CURLOPT_POSTFIELDS] = $params;
    }
    
    $ch = curl_init();    // initialize curl handle

    if (strtoupper($mode) != "POST" && strtoupper($mode) != "GET") {
        $opts[CURLOPT_CUSTOMREQUEST] = strtoupper($mode);
    }
    
    $opts[CURLOPT_URL] = $url;

        if (isset($opts[CURLOPT_HTTPHEADER])) {
          $existing_headers = $opts[CURLOPT_HTTPHEADER];
          $existing_headers[] = "Expect:";
          $opts[CURLOPT_HTTPHEADER] = $existing_headers;
        } else {
          $opts[CURLOPT_HTTPHEADER] = array("Expect:","REQUESTFROM:127.0.0.1");
        }
    curl_setopt_array($ch, $opts);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $result = curl_exec($ch); // run the whole process
    curl_close($ch);
    return $result;
}




?>


