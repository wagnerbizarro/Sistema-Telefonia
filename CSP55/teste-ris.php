<?php

$data = array();
$data['data'] = '<?xml version="1.0" encoding="UTF-8"?>
<transaction id="1" date="2015-05-13 15:32:15">
<commands>
  <command name="get" seq="1">
    <route tn="5421218900" />
  </command>
</commands>
</transaction>';

$url = 'http://10.101.255.165:2080/api/ris/process';

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

echo $response;
?>
