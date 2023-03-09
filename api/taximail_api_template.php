<?php

require('system/config.php');

$result = Login();
if($result['status'] == 'success'){


//------------- foreach ---------------------------------

	$session_id = $result['data']['session_id'];
	$message_id = "";
	$param = array();
	$param['priority'] = "1"; // ความสำคัญของ email : 0 = ปกติ , 1 = สูง
	$param['from_name'] = ""; // ชื่อผู้ส่ง หากไม่มี ใส่ค่าว่าง
	$param['from_email'] = ""; // ** อีเมลล์ผู้ส่ง
	$param['to_name'] = "worapot"; // ชื่อผู้รับ หากไม่มีเป็นค่าว่าง
	$param['to_email'] = "worapot@outlook.com"; // ** อีเมลล์ผู้รับ
	//$param['subject'] = "Hello World"; // หัวข้ออีเมลล์
    /* กรณีส่งแบบ HTML */
	//$param['content_html'] = "<html><head></head><body>Hello World <a href='www.google.co.th'>Click here</a></body></html>"; // ** เนื้อหาอีเมลล์ html
    // $param['content_plain'] = "Hello World"; // เนื้อหาอีเมลล์ plain text
    
    /* กรณีส่งแบบ TEMPLATE KEY */
    $param['template_key'] = "159026409b53464fa0"; // template id ที่ต้องการส่ง
    $param['content_html'] = '{"Firstname":"วรพจน์","Lastname":"พิลาบุตร"}'; // ค่าของ custom field ที่ต้องการ replace ใน template ในรูปแบบ json
	$param['transactional_group_name'] = "MUSTER"; // ชื่อของกลุ่ม transactional ลักษณะคล้ายกับ ชื่อของ campaign
	$param['message_id'] = genMessageID($message_id);
	$param['report_type'] = "False"; // โหมด report จำเป็นต้องใส่ web service ที่ เว็บไซท์ https://app2.taximail.com/app/user/system/ : False = ปิดโหมดรีพอร์ต , Unique = รีพอร์ตเฉพาะข้อมูลที่ ยูนิค , Full = รีพอร์ตทุกข้อมูล
    $param['session_id'] = $session_id;

    
    //$attachment_field = array();
    //$path = './pdf-test.pdf';

    //$filename = basename($path);
    //$attach_file_data = file_get_contents($path); // อ่านข้อมูลไฟล์ขึ้นมา
    //$base64_attach_file = base64_encode($attach_file_data); // แปลงข้อมูลที่ได้มาให้อยู่ในรูป base64
    // การแนบไฟล์นั้นมีอยู่สองแบบ
    //$attachment_field[] = array('filename' =>  $filename,'file_data' => $base64_attach_file);  // 1.base64 => ต้องแปลงข้อมูลเป็น base64 ก่อน แล้วส่งข้อมูลของไฟล์ไป ด้วย index file_data และต้องระบุชื่อไฟล์ที่ index filename ด้วย ชื่อไฟล์ต้องมีนามสกุลบอกด้วย
    //$attachment_field[] = array('filename' =>  $filename ,'path' => $path); // 2.path ที่เข้าถึงได้ => ต้องระบุชื่อไฟล์ที่ index filename ด้วย ชื่อไฟล์ต้องมีนามสกุลบอกด้วย

    //if(count($attachment_field) > 0) {
    //    $param['attachment'] = json_encode($attachment_field);
    //}

	$result = sendTransactional($param);

//----------------------------------------------



	echo json_encode($result);
}else{
	echo "Login Failed!! : ".$result['ErrorMessage'];
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