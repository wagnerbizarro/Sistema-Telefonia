<?php
$texto = "";
$contrato = $_POST["contrato"];
$problema = $_POST["problema"];
$formato = $_POST["formato"];
$ramais = $_POST["ramais"];
$pon = $_POST["pon"];
$ativo = $_POST["ativo"];
$tom = $_POST["tom"];
$equipamentos = $_POST["equipamentos"];
$data = $_POST["data"];
$hora = $_POST["hora"];
$origem = $_POST["origem"];
$destino = $_POST["destino"];
$contato = $_POST["contato"];
$retorno = $_POST["retorno"];
$descricao = $_POST["descricao"];

if ($pon == "") {
    $pon = "PON:NAO Verificado";
}

if ($ativo == "") {
    $ativo = "ATIVO:NAO Verificado";
}

if ($tom == "") {
    $tom = "TOM:NAO Verificado";
}

if ($equipamentos == "") {
    $equipamentos = "Equip.Reiniciados: NAO";
}

$cpfNaoRecebe = "
          Contrato: Adyl $contrato
          <br>Problema: $problema
          <br>$pon
          <br>$ativo
          <br>$tom
          <br>$equipamentos
          <br>Data: $data-$hora
          <br>Origem: $origem
          <br>Destino: $destino
          <br>Contato: $contato";

$cpfNaoFaz = "
          Contrato: Adyl $contrato
          <br>Problema: $problema
          <br>$pon
          <br>$ativo
          <br>$tom
          <br>$equipamentos
          <br>Data: $data-$hora
          <br>Origem: $origem
          <br>Destino: $destino
          <br>Formato: $formato
          <br>Retorno: $retorno
          <br>Contato: $contato";

$cpfOutro = "
          Contrato: Adyl $contrato
          <br>Problema: $problema
          <br>$pon
          <br>$ativo
          <br>$tom
          <br>$equipamentos
          <br>Descricao: $descricao";

$ddrNaoRecebe =
    "
          Contrato: Adyl $contrato
          <br>Problema: $problema
          <br>$ramais
          <br>$pon
          <br>$ativo
          <br>$tom
          <br>$equipamentos
          <br>Data: $data-$hora
          <br>Origem: $origem
          <br>Destino: $destino
          <br>Contato: $contato";

$ddrNaoFaz = "
          Contrato: Adyl $contrato
          <br>Problema: $problema
          <br>$pon
          <br>$ativo
          <br>$tom
          <br>$equipamentos
          <br>Data: $data-$hora
          <br>Origem: $origem
          <br>Destino: $destino
          <br>Formato: $formato
          <br>Retorno: $retorno
          <br>Contato: $contato";


$ddrOutro = "
          Contrato: Adyl $contrato
          <br>Problema: $problema
          <br>$ramais
          <br>$pon
          <br>$ativo
          <br>$tom
          <br>$equipamentos
          <br>Descricao: $descricao";

if ($contrato != "Contrato" && $problema != "problema") {
    if ($contrato == "fone" && $problema == "naofaz") {
        $texto = $cpfNaoFaz;
    } else if ($contrato == "fone" && $problema == "naorecebe") {
        $texto = $cpfNaoRecebe;
    } else if ($contrato == "fone" && $problema == "outro") {
        $texto = $cpfOutro;
    } else if ($contrato == "ddr" && $problema == "naofaz") {
        $texto = $ddrNaoFaz;
    } else if ($contrato == "ddr" && $problema == "naorecebe") {
        $texto = $ddrNaoRecebe;
    } else if ($contrato == "ddr" && $problema == "outro") {
        $texto = $ddrOutro;
    } else if ($contrato == "uniq" && $problema == "naofaz") {
        $texto = $ddrNaoFaz;
    } else if ($contrato == "uniq" && $problema == "naorecebe") {
        $texto = $ddrNaoRecebe;
    } else if ($contrato == "uniq" && $problema == "outro") {
        $texto = $ddrOutro;
    } else {
        $texto = "";
    }
}

?>
