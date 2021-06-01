<?php

$link = 'https://' . $domain . '.amocrm.ru/private/api/v3/json/lead/list';
 
$curl = curl_init();

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-API-client/2.0');
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_COOKIEFILE, dirname(__FILE__) . '/cookis.txt');
curl_setopt($curl,CURLOPT_COOKIEJAR,dirname(__FILE__) . '/cookis.txt');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

CheckCurlResponse($code);
$response = json_decode($out, true);
$lead_li = $response['response'];

