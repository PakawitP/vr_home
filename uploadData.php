<?php
    include "../../db/connect.php";

    $csvFile = file_get_contents($_FILES["orderFile"]["tmp_name"]);
    $row = str_getcsv($csvFile, "\n");  
    $length = count($row);  

    $result = array();
    $err = 0;
    $suc = 0;
    
    for($i=1;$i<$length;$i++) {  
        $val = str_getcsv($row[$i], ",");  
        //print_r($val);
        $line = intval($val[3]);

        $sqlt = "SELECT ID FROM QC_Machine WHERE Customer = '".$val[4]."' AND MachineName = 'Line ".$line."'";
        $stmtt = sqlsrv_query( $conn, $sqlt );
        while( $rowt = sqlsrv_fetch_array( $stmtt, SQLSRV_FETCH_ASSOC) ) {
            $mID = $rowt['ID'];
        }

        $date = str_replace('/', '-', $val[6]);
        $sDate = date('Y-m-d', strtotime($date));

        $sql = "INSERT INTO QC_Order (OrderCode, MachineID, OrderProgram, OrderStatus, StartDate, CreateDate) VALUES (?,?,?,?,?,?)";
        $params = array($val[0], $mID, $val[2], 'No', $sDate, date("Y-m-d H:i:s"));
        $stmt = sqlsrv_query($conn, $sql, $params);

        if ($stmt == false) {
            $err++;
        } else {
            $suc++;
        }
        
            
        sqlsrv_free_stmt($stmt);  
    } 

    sqlsrv_close($conn);

    $result['error'] = $err;
    $result['success'] = $suc;

    echo json_encode($result);
?>