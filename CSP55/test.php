<?php
function consultaBDO($destino){
$url = "http://10.101.255.165:2080/api/ris/process";
$now = date("Y-m-d H:i:s");

$data = array();
$data['data'] = '<?xml version="1.0" encoding="UTF-8"?>
<transaction id="1" date="'.$now.'">
<commands>
  <command name="get" seq="1">
    <route tn="'.$destino.'" />
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

//return ($response);


$xml = simplexml_load_string($response);

//print_r($xml);

$value = $xml->commands->command->route->locale->locg;

echo $value;

//$xml->locale[0]->locg->__toString();

/*foreach( $xml->transactionResponse[0]->attributes() as $a => $b ){
       echo "$a=$b\n";
}
 */

}

$destino = "5421218900";
consultaBDO($destino);

?>
