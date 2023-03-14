<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");


include_once("../include/config.inc.php");
include_once("../include/class.inc.php");
include_once("../include/function.inc.php");
require('system/config.php');

$tbtaximaillog = "tb_taximail_log";
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


// start apps
if($T1Email != ""){

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
$rs = $conn->query($query);


$regis_id = $conn->insert_id;

$resulttx = Login();
 if($resulttx['status'] == 'success'){
    
    //------------- T1 ---------------------------------   
    if ($T1Email != "") {

        $session_id1 = $resulttx['data']['session_id'];
        $message_id1 = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T1FName." ".$T1LName; 
        $param['to_email'] = $T1Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        $param['content_html'] = '{"Firstname":"'.$T1FName.'","Lastname":"'.$T1LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $message_id1= genMessageID($message_id1);
        $param['message_id'] = $message_id1;
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id1;         
        $result1 = sendTransactional($param);
        $session_id1="";

        if($result1){ 
            $tdate1 = date("Y-m-d H:i:s");
            $status1 = 0;
            $query1="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T1Email."', '".$message_id1."', '".$status1."', '".$tdate1."')"; 
            $rs1 = $conn->query($query1); 
        }
    

    }
    //------------- T2 ---------------------------------   
    if ($T2Email != "") {
        $session_id2 = $resulttx['data']['session_id'];
        $message_id2 = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T2FName." ".$T2LName; 
        $param['to_email'] = $T2Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        $param['content_html'] = '{"Firstname":"'.$T2FName.'","Lastname":"'.$T2LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $message_id2= genMessageID($message_id2);
        $param['message_id'] = $message_id2;
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id2;         
        $result2 = sendTransactional($param);
        $session_id2="";
        if($result2){ 
            $tdate2 = date("Y-m-d H:i:s");
            $status2 = 0;
            $query2="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T2Email."', '".$message_id2."', '".$status2."', '".$tdate2 ."')"; 
            $rs2 = $conn->query($query2); 
        }
    }   
    //------------- T3 ---------------------------------   
    if ($T3Email != "") {
        $session_id3 = $resulttx['data']['session_id'];
        $message_id3 = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T3FName." ".$T3LName;
        $param['to_email'] = $T3Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        $param['content_html'] = '{"Firstname":"'.$T3FName.'","Lastname":"'.$T3LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $message_id3= genMessageID($message_id3);
        $param['message_id'] = $message_id3;
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id3;         
        $result3 = sendTransactional($param);
        $session_id3="";
        if($result3){ 
            $tdate3 = date("Y-m-d H:i:s");
            $status3 = 0;
            $query3="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T3Email."', '".$message_id3."', '".$status3."', '".$tdate3."')"; 
            $rs3 = $conn->query($query3);
        }


    }
    //------------- T4 ---------------------------------   
    if ($T4Email != "") {
        $session_id4 = $resulttx['data']['session_id'];
        $message_id4 = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T4FName." ".$T4LName;
        $param['to_email'] = $T4Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        $param['content_html'] = '{"Firstname":"'.$T4FName.'","Lastname":"'.$T4LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $message_id4= genMessageID($message_id4);      
        $param['message_id'] = $message_id4;
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id4;         
        $result4 = sendTransactional($param);
        $session_id4="";
        if($result4){ 
            $tdate4 = date("Y-m-d H:i:s");
            $status4 = 0;
            $query4="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T4Email."', '".$message_id4."', '".$status4."', '".$tdate4."')"; 
            $rs4 = $conn->query($query4);
        }
    
     } 
    //------------- T5 ---------------------------------   
    if ($T5Email != "") {
        $session_id5 = $resulttx['data']['session_id'];
        $message_id5 = "";
        $param = array();
        $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
        $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
        $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
        $param['to_name'] = $T5FName." ".$T5LName; 
        $param['to_email'] = $T5Email;
        /* กรณีส่งแบบ TEMPLATE KEY */
        $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
        $param['content_html'] = '{"Firstname":"'.$T5FName.'","Lastname":"'.$T5LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
        $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
        $message_id5= genMessageID($message_id5);
        $param['message_id'] = $message_id5;
        $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
        $param['session_id'] = $session_id5;         
        $result5 = sendTransactional($param);
        $session_id="";

        if($result5){ 
            $tdate5 = date("Y-m-d H:i:s");
            $status5 = 0;
            $query5="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T5Email."', '".$message_id5."', '".$status5."', '".$tdate5."')"; 
            $rs5 = $conn->query($query5);
        }    
    }  
    //------------- T6 ---------------------------------   
    if ($T6Email != "") {
    $session_id6 = $resulttx['data']['session_id'];
    $message_id6 = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T6FName." ".$T6LName;
    $param['to_email'] = $T6Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    $param['content_html'] = '{"Firstname":"'.$T6FName.'","Lastname":"'.$T6LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $message_id6= genMessageID($message_id6);
    $param['message_id'] = $message_id6;
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id6;         
    $result6 = sendTransactional($param);
    $session_id6="";
    
    if($result6){ 
        $tdate6 = date("Y-m-d H:i:s");
        $status6 = 0;
        $query6="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T6Email."', '".$message_id6."', '".$status6."', '".$tdate6."')"; 
        $rs6 = $conn->query($query6);
       }
    }
    //------------- T7 ---------------------------------   
    if ($T7Email != "") {
    $session_id7 = $resulttx['data']['session_id'];
    $message_id7 = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T7FName." ".$T7LName;
    $param['to_email'] = $T7Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    $param['content_html'] = '{"Firstname":"'.$T7FName.'","Lastname":"'.$T7LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $message_id7= genMessageID($message_id7);
    $param['message_id'] = $message_id7;
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id7;         
    $result7 = sendTransactional($param);
    $session_id="";

    if($result7){ 
        $tdate7 = date("Y-m-d H:i:s");
        $status7 = 0;
        $query7="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T7Email."', '".$message_id7."', '".$status7."', '".$tdate7."')"; 
        $rs7 = $conn->query($query7);
                }

    }  


    //------------- T8 ---------------------------------   
    if ($T8Email != "") {
    $session_id8 = $resulttx['data']['session_id'];
    $message_id8 = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T8FName." ".$T8LName;
    $param['to_email'] = $T8Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    $param['content_html'] = '{"Firstname":"'.$T8FName.'","Lastname":"'.$T8LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $message_id8= genMessageID($message_id8);
    $param['message_id'] = $message_id8;
    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id8;         
    $result8 = sendTransactional($param);
    $session_id8="";
    if($result8){ 
        $tdate8 = date("Y-m-d H:i:s");
        $status8 = 0;
        $query8="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T8Email."', '".$message_id8."', '".$status8."', '".$tdate8."')"; 
        $rs8 = $conn->query($query8);
                }
        

    }  
    //------------- T9 ---------------------------------   
    if ($T9Email != "") {
    $session_id9 = $resulttx['data']['session_id'];
    $message_id9 = "";
    $param = array();
    $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
    $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
    $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
    $param['to_name'] = $T9FName." ".$T9LName;
    $param['to_email'] = $T9Email;
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    $param['content_html'] = '{"Firstname":"'.$T9FName.'","Lastname":"'.$T9LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
    $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
    $message_id9= genMessageID($message_id9);
    $param['message_id'] = $message_id9;

    $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id9;         
    $result9 = sendTransactional($param);
    $session_id9="";
    if($result9){ 
        $tdate9 = date("Y-m-d H:i:s");
        $status9 = 0;
        $query9="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T9Email."', '".$message_id9."', '".$status9."', '".$tdate9."')"; 
        $rs9 = $conn->query($query9);
                }

    }  



    //------------- T10 ---------------------------------   
    if ($T10Email != "") {
       $session_id10 = $resulttx['data']['session_id'];
       $message_id10 = "";
       $param = array();
       $param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
       $param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
       $param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
       $param['to_name'] = $T10FName." ".$T10LName;
       $param['to_email'] = $T10Email;
       /* กรณีส่งแบบ TEMPLATE KEY */
       $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
       $param['content_html'] = '{"Firstname":"'.$T10FName.'","Lastname":"'.$T10LName.'"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
       $param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
       $message_id10= genMessageID($message_id10);
       $param['message_id'] = $message_id10;

       $param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
       $param['session_id'] = $session_id10;         
       $result10 = sendTransactional($param);
       $session_id10="";

         if($result10){ 
          $tdate10 = date("Y-m-d H:i:s");
          $status10 = 0;
          $query10="INSERT TO `".$tbtaximaillog."` (`regis_id`, `email`, `message_id`, `status`, `tdatetime`) VALUES('".$regis_id."', '".$T10Email."', '".$message_id10."', '".$status10."', '".$tdate10."')"; 
          $rs10 = $conn->query($query10);
                 }





     }
 

  }else{
        echo "Login Failed!! : ".$resulttx['ErrorMessage'];
  }



} // end  apps 











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


