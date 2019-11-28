
<?php 
$access_token = 'mHJbIuf7LlUNKYzzGctAgYvSvjemEQCAcSxfCvMT5c+ubYC0VrZ8p6MPogSvvnYHKE3YBM74JKkmBTlTPy/3ZPcYRKMdF1cN2PhXgC5sANgOAC0Hjte0S40RiumBonyRdlXAybCytWDSP0XtnOdnzgdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
