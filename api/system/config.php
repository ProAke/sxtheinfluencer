<?php

$smtp_data = array();
$smtp_data['host'] = "smtp.taximail.com"; // SMTP TRANSACTIONAL HOST
$smtp_data['username'] = "sm2315902"; 			// SMTP TRANSACTIONAL USERNAME
$smtp_data['password'] = "HV4jH0371mHjpcD"; // SMTP TRANSACTIONAL PASSWORD
$smtp_data['port'] = "587"; 				// SMTP TRANSACTIONAL PORT

define("SMTP_DATA",  json_encode($smtp_data));

// สามารถเปลี่ยนค่าต่างๆ ได้ที่ link : https://app2.taximail.com/app/user/system/

define("TRANSACTIONAL_GROUP_HEADER", "X-TM-Transc-Group"); // ค่าต้องเหมือนกับ ฟิลด์ Transactional Group Header
define("MESSAGE_ID_HEADER", "X-TM-Ref-Msg-Id"); // ค่าต้องเหมือนกับ ฟิลด์ Message ID Header
define("TRANSACTIONAL_REPORT_HEADER", "X-TM-Webhook"); // ค่าต้องเหมือนกับ ฟิลด์ Transactional Report Header จำเป็นต้องเปิด Transactional Report Status ให้เป็น enabled ก่อน

define("WEB_BASE_API",  "https://api.taximail.com/v2/");
define("WEB_LOGIN_EMAIL",  "jimm@playdigital.co.th"); // login email
define("WEB_LOGIN_PASSWORD",  "*Play11host"); // login password

?>