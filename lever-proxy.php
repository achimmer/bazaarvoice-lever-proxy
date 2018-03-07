<?php

$login = 'uhECYOuwq5qRaL1gKBMh/q0YJJskomU3in8Mz7nvtSBnSb1M';
$password = '';
$url = 'https://api.lever.co/v1/postings?state=internal';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
header("Access-Control-Allow-Origin: *");
$result = curl_exec($ch);
curl_close($ch);
echo($result);

?>
