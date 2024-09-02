<?php
$count = 0;

//========= Function Ultimo SMS =======\\
function showlast()
{
    include("../assets/php/connect_mysql.php");

    $sql = "SELECT * FROM sms ORDER BY id DESC LIMIT 1";
    $stmt = $conn->query($sql);
    $rows = $stmt->fetchAll();

    return ($rows);
}

//========= Function Busca SMS por periodo =======\\
function findsms($dataini, $datafim)
{

    include("../assets/php/connect_mysql.php");

    $dataini = "$dataini" . " 00:00:00";
    $datafim = "$datafim" . " 23:59:00";

    $sql = "SELECT id FROM sms WHERE dt BETWEEN '$dataini' AND '$datafim' LIMIT 5000";
    $stmt = $conn->query($sql);
    $count = $stmt->rowCount();

    return ($count);
}

//============ START ============\\

//Ultimo SMS
$rows = showlast();
foreach ($rows as [$id, $number, $msg, $dt]) {
    //echo "$id,$number, $msg, $dt";
}

//Pequisa por data
$dataini = $_POST["dataini"];
$datafim = $_POST["datafim"];

if ($datafim >= $dataini) {
    $count = findsms($dataini, $datafim);
} else {
    $count = "Error:'Ate' não pode ser anterior a 'De'";
}
?>
