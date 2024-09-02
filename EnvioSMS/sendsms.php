<!DOCTYPE html>
<html data-bs-theme="light" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SendSMS</title>
    <meta http-equiv="refresh" content="5; url =http://localhost/sistemas/EnvioSMS/index.php" />
</head>

<body>
    <div style="text-align:center">
        <p>Enviando Mensagem.......</p>
</body>

</html>

<?php
function update_sql($msg, $number)
{
    include("/var/www/html/sistemas/assets/php/connect_mysql.php");

    try {
        $sql = "INSERT INTO sms(number,msg,dt) VALUES('$number','$msg',NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        echo "\n";
    }
}

//============ START ============\\
$msg = $_GET["msg"];
$number = $_GET["numero"];
$user = $_GET["user"];
$password = $_GET["token"];
$acao = "*******";
$_username = "*********";
$_passwd = "*********";

if ($user == "" || $password == "") {
    echo "</br></br>";
} else if ($user == $_username  && $password == $_passwd) {
    sleep(2);
    update_sql($msg, $number);
    sleep(2);
    $url = "http://sbc1.adyl.net.br/sms/php/sms.php";
    header("Location: $url");
} else {
    echo "</br></br>";
    echo "<p>Password Failed</p";
    echo "</div>";
}
exit;
?>
