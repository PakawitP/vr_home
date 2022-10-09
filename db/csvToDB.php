<?php
    include 'connect.php';
    $csvFile = file_get_contents('STGT4.csv');
    $row = str_getcsv($csvFile, "\n");  
    $length = count($row);   
    $thisDate = date('Y-m-d H:i:s');
    for($i=0;$i<$length;$i++) {
        $val = str_getcsv($row[$i], ",");
        $sql = "INSERT INTO [iot].[dbo].[STGT_waterTest_Emplo]([No_Section],[No_Dpt],[Emplo_ID],[Emplo_Name],[Emplo_Position],[Emplo_Group],[Create_Date],[Update_Date]) VALUES(?,?,?,?,?,?,?,?)";
        $params = array(intval($val[0]),intval($val[1]),intval($val[2]),$val[3],$val[4],$val[5],$thisDate,$thisDate);
        $stmt = sqlsrv_query($conn, $sql, $params);
        if ($stmt === false) {
            print_r(sqlsrv_errors());
        }      
    } 
    sqlsrv_close($conn);
?>
