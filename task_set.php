<?php

$link = 'https://' . $domain . '.amocrm.ru/private/api/v3/json/task/set';

$curl = curl_init();

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/2.0');
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($task));
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookis.txt');
curl_setopt($curl, CURLOPT_COOKIEJAR, dirname(__FILE__) . '/cookis.txt');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
 
$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

CheckCurlResponse($code);
$response = json_decode($out, true);
$response = $response['response']['task']['add'];
$outs = 'ID добавленных задач:' . PHP_EOL;

foreach($response as $a)
  if(is_array($a))
    $outs.= $a['id'] . PHP_EOL;
echo $outs;


