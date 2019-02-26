<?php
$url2 = 'http://www.moh.gov.my';
$url = 'http://localhost:8080/webservice/data.php';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;
curl_close($ch);
