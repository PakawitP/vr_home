<?php
function queryCom($dStart, $dEnd, $option, $id, $summary)
{
    $optionQuery = ' WHERE AssetsCode = a.Code ';
    $getCholie = '';
    $queryData = " a.Code,
                a.CapDate,
                a.LocationCode,
                a.CostCtrCode,
                a.CreateDate,
                a.StatusCode AS CheckStatus,
                e.StatusCode, ";

    switch ($option) {
        case "Assets_Data":
            break;
        case "Location_Data":
            $getCholie = " WHERE a.LocationCode = " . $id;
            break;
        case "CostCenter_Data":
            $getCholie = " WHERE a.CostCtrCode = " . $id;
            break;
        default:
            $getCholie = "";
    }
    if ($dStart != null && $dEnd != null) {
        $optionQuery = $optionQuery . " AND CreateDate BETWEEN '$dStart 00:00:00' AND '$dEnd 23:59:59' ";
    }

    if (!$summary) {
        $queryData = $queryData . " a.Description,
        a.SerialNumber,
        a.Quantity,
        a.LastUpdate,
        a.Images,
        a.Room,
        a.Remark,
        e.Note,
        e.PhysicalCount, ";
    }

    return  "SELECT" . $queryData . " 
    checkDate,
    d.Name AS StatusName,
    b.Name AS Location, 
    c.Name AS CostCtr 
    FROM Assets_Data as a
    OUTER APPLY (
    SELECT TOP 1 CreateDate AS checkDate ,AssetsCode, StatusCode,Note,PhysicalCount
    FROM Assets_StatusLog " .
        $optionQuery .
        " ORDER BY CreateDate DESC
    ) AS e
    LEFT JOIN Assets_Status AS d ON e.StatusCode = d.Code
    LEFT JOIN Assets_Location as b ON a.LocationCode = b.Code
    LEFT JOIN Assets_CostCtr AS c ON a.CostCtrCode = c.Code"
        . $getCholie .
        " ORDER BY a.Code ASC";
}

function convertData($row)
{
    $row['SNo'] = substr($row['Code'], -2);
    $row['Code'] = substr($row['Code'], 0, -2);
    $row['CapDate'] = date_format($row['CapDate'], 'Y-m-d');
    $row['CreateDate'] = date_format($row['CreateDate'], 'Y-m-d H:i:s');
    $row['Remark'] = !empty($row['Remark']) ? $row['Remark'] : '-';
    $row['PhysicalCount'] = !empty($row['PhysicalCount']) ? $row['PhysicalCount'] : '-';
    $row['Room'] = !empty($row['Room']) ? $row['Room'] : '-';
    $row['Note'] = !empty($row['Note']) ? $row['Note'] : '-';
    $row['checkDate'] = !empty($row['checkDate']) ? date_format($row['checkDate'], 'Y-m-d H:i:s') : '-';
    $row['LastUpdate'] = !empty($row['LastUpdate']) ? date_format($row['LastUpdate'], 'Y-m-d H:i:s') : '-';
    $row['SerialNumber'] = !empty($row['SerialNumber']) ? $row['SerialNumber'] : '-';
    return $row;
}


function sqlQueryAll($option, $id)
{
    $getCholie = '';
    $getOrder = " ORDER BY a.Code ASC";
    switch ($option) {
        case "Assets_Data":
            break;
        case "Location_Data":
            $getCholie = " WHERE a.LocationCode = " . $id;
            break;
        case "CostCenter_Data":
            $getCholie = " WHERE a.CostCtrCode = " . $id;
            break;
        case "QRScan":
            $getCholie = " WHERE a.Code = " . $id;
            break;
        default:
            $getCholie = "";
    }

    if($option == "QRScan"){
        $getOrder = '';
    }

    return "SELECT a.Code,
    a.CapDate,
    a.LocationCode,
    a.CostCtrCode,
    a.CreateDate,
    a.StatusCode AS CheckStatus,
    a.StatusCode,  a.Description,
    a.SerialNumber,
    a.Quantity,
    a.LastUpdate,
    a.Images,
    a.Room,
    a.Remark,
    e.Note,
    e.PhysicalCount,
    checkDate,
    d.Name AS StatusName,
    b.Name AS Location, 
    c.Name AS CostCtr 
    FROM Assets_Data as a
    OUTER APPLY (
    SELECT TOP 1 CreateDate AS checkDate ,AssetsCode, StatusCode,Note,PhysicalCount
    FROM Assets_StatusLog  WHERE AssetsCode = a.Code  ORDER BY CreateDate DESC
    ) AS e
    LEFT JOIN Assets_Status AS d ON a.StatusCode = d.Code
    LEFT JOIN Assets_Location as b ON a.LocationCode = b.Code
    LEFT JOIN Assets_CostCtr AS c ON a.CostCtrCode = c.Code "
        . $getCholie .
        $getOrder;
}
