<?php
$access_token = 'sdQDgB7nnIUBdH6pRuIuOthhuwlPARCoA5rlssPf4qyUd6RGOTTlxuWKUIz2U5z/u1Xv5JDNxl85mjeTcwpWP684FqvUak5WEgQ2LhmwbvHLeTPzdRAprzcsCsmofXSuQOPFzeNneKlt4Pgh1N4w1AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
