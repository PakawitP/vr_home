<?php

include '../../config/config.php';
include '../../component/php/sqlQuery.php';
include '../../component/php/base64Convert.php';


session_start();

$conn = ServerConnect();
$rsArr = array();
$rs = array();


if ($_GET['action'] == 'getmenuLink') { //ดึงข้อมูลทรัพสินทั้งหมดเรียงตามวันที่

    $typeMenu = $_GET['type'];
    $rsArr['data'] = array();
    $sql = " SELECT * FROM LinkMenu WHERE menu_type = '" . $typeMenu ."'";
    $stmt = sqlsrv_query($conn, $sql);
    if ($stmt === false) {
        $rsArr['status'] = 0;
        $rsArr['error'] = handleError(sqlsrv_errors());
    } else {
        $rsArr['status'] = 1;
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            $rs['No'] = $row['ID'];
            $rs['Name'] = $row['menu_Name'];
            $rs['Description'] = $row['menu_Description'];
            $rs['Link'] = $row['menu_Link'];
            $rs['CreateDate'] = !empty($row['menu_CreateDate']) ? date_format($row['menu_CreateDate'], 'Y-m-d H:i:s') : '-';
            array_push($rsArr['data'], $rs);
        }
    }
} else {
    $rsArr['status'] = 0;
}

echo json_encode($rsArr);
