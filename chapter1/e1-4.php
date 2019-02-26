<?php

require "../vendor/autoload.php"; //include semua lib dr vendor

$client = new \GuzzleHttp\Client();

//untuk get data
$response = $client->request('GET', 'http://localhost:8080/webservice/chapter1/data3.php', 
    ['query' => 
        [
            'jantina' =>'gugurl',
            'nama' =>'zainimar',
            'email' =>'zainimm@gmail.com'
        ]
    ]);
echo $response->getBody();
echo '<hr>';

//untuk post data pula
$response2 = $client->request('POST', 'http://localhost:8080/webservice/chapter1/data2.php', 
    ['form_params' => 
        [
            'nama' =>'zainimar',
            'email' =>'zainimm@gmail.com',
            'jantina' =>'perempuan'
        ]
    ]);
echo $response2->getBody();