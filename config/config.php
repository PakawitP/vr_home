<?php

$salt = '$1$pse@2021$'; //crypt password
$directory = "../../images/assets_img/"; //directory images
$directoryTemp  = "../../tmp/"; // directory เก็บไฟล์ temp
$permis = 'Admin'; // permisstion ที่สามารถเข้าถึงเนื้อหาได้ทั้งหมด User || Admin
$Unverified = 'Unverified'; // ชื่อค่าที่ไม่ได้ประเมินง
$UnverCode = '0097'; //Code ของค่าที่ยังไม่ได้ประเมิน
$connect = false;// database server Connect true = real server; fasle = test server 
$OAuthLogin = false; //เลือกรูปเเบบการเข้าระบบ true = OAuth; fasle = User Password

function ServerConnect() //database server 
{
    global $connect;
    if ($connect == true) {
        $serverName = "S-PSEDEV-SQL12";
        $connectionOptions = array(
            "database" => "iot",
            "uid" => "jaru",
            "pwd" => "dev@pponline",
            "CharacterSet"  => 'UTF-8'
        );
    } else {
        $serverName = "PSE-PCENXX42\\SQLEXPRESS";
        $connectionOptions = array(
            "database" => "menuLink",
            "uid" => "sa",
            "pwd" => "111111",
            "CharacterSet"  => 'UTF-8'
        );
    }

    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if ($conn === false) {
        echo "Unable to connect.</br>";
        die(print_r(sqlsrv_errors(), true));
    }else{
        return $conn;
    }
}



function handleError($error)
{ 
    // ดักจับ error ที่เข้าถึงฐานข้อมูลเเละเ return กลับเป็น ตัวอักษร
    $s = '';
    $error = $error[0]['SQLSTATE'];
    switch ($error) {
        case "23000":
            $s = "Code : 23000 This data is the reference of other table data or code already exists ";
            break;
        case "22001":
            $s = "Code : 22001 Check code or ID length";
            break;
        case "01000":
            $s = "Code : 01000 The statement has been terminated";
            break;
        case "22003":
            $s = "Code : 22003 Numeric value out of range";
        default:
            $s = "error " . $error;;
    }
    return $s;
}
