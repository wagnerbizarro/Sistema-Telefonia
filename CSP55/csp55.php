<?php

function consultaBDO($TN){
$url = "http://10.101.255.165:2080/api/ris/process";
$now = date("Y-m-d H:i:s");

$data = array();
$data['data'] = '<?xml version="1.0" encoding="UTF-8"?>
<transaction id="1" date="'.$now.'">
<commands>
  <command name="get" seq="1">
    <route tn="'.$TN.'" />
  </command>
</commands>
</transaction>';


$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($data));

$response = curl_exec($handle);
$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
if ($code != 200) {
  die("erro\n");
}

$xml = simplexml_load_string($response);

$value = $xml->commands->command->route->locale->locg;

return $value;

}


//============ START ============\\
$assinante = $_POST["assinante"];
$destino = $_POST["destino"];

//$assinante = "5421218900";
//$destino = "5433180505";


if (($assinante != "" && $destino != "") || ($assinante !== NULL && $destino !== NULL)) {
	
	$tipo_dst = strlen($destino);
	$serv = stripos($destino, '800');
	$serv_2 = stripos($destino, '400');
	$serv_3 = stripos($destino, '300');
	
	
	if ($tipo_dst == 11) {
		//Móvel
		if ($serv == 1 || $serv_2 == 1 || $serv_3 == 1) {
			$csp = "Numero de serviço Sem CSP";
		
		} else {
			$cna = substr($assinante, 0, 2);
			$cnb = substr($destino, 0, 2);
			
			if ($cna != $cnb) {
				$csp = "COM CSP";
			} else {
				$csp = "SEM CSP";
			}
		}
   	
	} else if ($tipo_dst == 10) {
		//FIXO
		
		$origem = consultaBDO($assinante);
		$destino = consultaBDO($destino);

		if ($origem == $destino) {
			$csp = "SEM CSP";
			}else {
				$csp = "COM CSP";
			}

	} else {
        //INVALIDO
		$csp = "Destino inválido!";
	}

}

