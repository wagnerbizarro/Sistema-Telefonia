<?php
$count = 0;

function volumetria_sbc2($did, $dataini, $datafim)
{
    include("../assets/php/connect_psql_cdr.php");

    $dataini = "$dataini" . " 00:00:00";
    $datafim = "$datafim" . " 23:59:00";

    $sql = "SELECT DISTINCT uniqueid FROM cdr WHERE dst='$did' AND disposition='ANSWERED' AND calldate BETWEEN '$dataini' AND '$datafim' LIMIT 10000";
    $stmt = $conn->query($sql);
    $count = $stmt->rowCount();
    sleep(5);
    return ($count);
}

function volumetria_sbc1($did, $dataini, $datafim)
{
    include("../assets/php/connect_mysql_cdr.php");

    $dataini = "$dataini" . " 00:00:00";
    $datafim = "$datafim" . " 23:59:00";

    $sql = "SELECT DISTINCT uniqueid FROM cdr WHERE dst='$did' AND disposition='ANSWERED' AND calldate BETWEEN '$dataini' AND '$datafim' LIMIT 10000";
    $stmt = $conn->query($sql);
    $count = $stmt->rowCount();
    sleep(5);
    return ($count);
}

//============ START ============\\
$dataini = $_POST["dataini"];
$datafim = $_POST["datafim"];
$did = $_POST["did"];

if ($dataini !== null and $dataini !== '') {
    if ($datafim >= $dataini) {
        if ($did == 333333 or $did == 444444) {
            $count = volumetria_sbc1($did, $dataini, $datafim);
        } else {
            $count = volumetria_sbc2($did, $dataini, $datafim);
        }
    } else {
        $count = "Error:'Ate' não pode ser anterior a 'De'";
    }
}
?>
