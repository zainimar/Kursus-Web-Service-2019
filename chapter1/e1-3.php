<?php

require "../vendor/autoload.php"; //include semua lib dr vendor

$url = "http://localhost:8080/webservice/chapter1/data2.php";
$data = ["name" => "Zainimar", "email" => "zainimm@gmail.com"];

$client = new \GuzzleHttp\Client();

$result = $client->post($url, ["json" =>$data]);
echo $result->getBody();