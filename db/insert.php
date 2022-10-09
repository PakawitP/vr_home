<?php
    include 'connect.php';

    for ($i=3; $i <= 100; $i++) { 
        /*
        $sql = "INSERT INTO QC_Machine (MachineName, Customer, CreateDate) VALUES (?,?,?)";
        $params = array('Line '.$i, 'IX100', date("Y-m-d H:i:s"));
        $stmt = sqlsrv_query($conn, $sql, $params);
            
        sqlsrv_free_stmt($stmt);
        */
        for ($x=1; $x <= 18; $x++) { 
            if ($x != 17) {
                $sql = "INSERT INTO QC_MachineModule (MachineID, ModuleID, CreateDate) VALUES (?,?,?)";
                $params = array($i, $x, date("Y-m-d H:i:s"));
                $stmt = sqlsrv_query($conn, $sql, $params);
                    
                sqlsrv_free_stmt($stmt);
            }
        }
    }

sqlsrv_close($conn);
?>