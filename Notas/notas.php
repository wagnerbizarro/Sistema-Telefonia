<?php
include("../assets/php/connect_mysql.php");

$sql = "SELECT cliente,nota,data FROM notas ORDER BY data DESC LIMIT 25";
$count = 1;
$cliente = array();
$valor = array();
$data = array();

foreach ($conn->query($sql) as $row) {
    $number = $row['cliente'];
    $value = $row['nota'];
    $date = $row['data'];

    $cliente[$count] = $number;
    $valor[$count] = $value;
    $data[$count] = $date;

    if ($valor[$count] < 3) {
        $valor[$count] = "<span class='text-danger'>" . "$valor[$count]" . "</span>";
    } elseif ($valor[$count] >= 4) {

        $valor[$count] = "<span class='text-primary'>" . "$valor[$count]" . "</span>";
    } else {

        $valor[$count] = "<span class='text-dark'>" . "$valor[$count]" . "</span>";
    }
    $count++;
}
?>
