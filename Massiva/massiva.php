<?php
function ativarSBC1($tipo, $cidade, $ip)
{
    include("../assets/php/connect_mysql.php");

    if ($tipo === "0") {
        $sql = "UPDATE massiva set status=1,tipo=?,cidade=NULL,ip=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tipo, $ip]);
    } else {
        $sql = "UPDATE massiva set status=1,tipo=?,cidade=?,ip=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tipo, $cidade, $ip]);
    }
}


function desativarSBC1($ip)
{
    include("../assets/php/connect_mysql.php");
    $status = 0;
    $cidade = NULL;

    $sql = "UPDATE massiva set status=?,cidade=?,ip=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$status, $cidade, $ip]);
}

function ativarSBC2($tipo, $cidade, $ip)
{
    include("../assets/php/connect_psql.php");

    if ($tipo === "0") {
        $sql = "UPDATE massiva set status=1,tipo=?,cidade=NULL,ip=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tipo, $ip]);
    } else {
        $sql = "UPDATE massiva set status=1,tipo=?,cidade=?,ip=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$tipo, $cidade, $ip]);
    }
    exec("/var/www/html/sistemas/Massiva/assets/script/mailSend.sh $ip");
    sleep(5);
    $url = "http://10.101.255.61/sistemas/Massiva/index.php";
    header("Location: $url");
}


function desativarSBC2($ip)
{
    include("../assets/php/connect_psql.php");
    $status = 0;
    $cidade = NULL;

    $sql = "UPDATE massiva set status=?,cidade=?,ip=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$status, $cidade, $ip]);
    exec("/var/www/html/sistemas/Massiva/assets/script/mailSend.sh $ip");
    sleep(5);
    $url = "http://10.101.255.61/sistemas/Massiva/index.php";
    header("Location: $url");
}

function consultar()
{
    include("../assets/php/connect_psql.php");

    $sql = "SELECT status,tipo,cidade FROM massiva";
    $stmt = $conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
        $status = $row[0];
        $tipo = $row[1];
        $cidade = $row[2];
    }

    if ($status == 0) {
        $tipo = NULL;
        $cidade = NULL;
    }

    if ($tipo == 1) {
        $tipo = 'Cidade';
    } else {
        $tipo = 'Geral';
    }

    if ($status == 1) {
        $status = 'Ativado';
    } else {
        $status = 'Desativado';
        $cidade = "";
        $tipo = "";
    }

    return array(
        'a' => $status,
        'b' => $tipo,
        'c' => $cidade
    );

    sleep(5);
    $url = "http://10.101.255.61/sistemas/Massiva/index.php";
    header("Location: $url");
}

//============ START ============\\
$array = consultar();
$status = $array['a'];
$tipo = $array['b'];
$cidade = $array['c'];

//Submit
$status_POST = $_POST["status"];
$tipo_POST = $_POST["tipo"];
$cidade_POST = $_POST["cidade"];
$ip_cliente = $_SERVER['REMOTE_ADDR'];

if ($status_POST != "" && $tipo_POST != "") {
	if ($status_POST === "1") {
	ativarSBC1($tipo_POST, $cidade_POST, $ip_cliente);	
        ativarSBC2($tipo_POST, $cidade_POST, $ip_cliente);
	} else {
	desativarSBC1($ip_cliente);
        desativarSBC2($ip_cliente);
    }
}
?>

