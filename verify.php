
<?php 
$access_token = 'fdwxYsoX3Thohsr8F0nbMcZxOklTcl54mNVh8M7bmD3jmzfCFKLCVY87RRGmihqCa2eXpWnp/aET+9dSEBM+DqhYU6wYCO+KuakJbUBAlmiOE8MSSUiDCgHkS1H9/0enuZHiw+nttvlXAshXWRmaSgdB04t89/1O/w1cDnyilFU=
';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
