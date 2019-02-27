<?php

//read data melalui RESTful webservice di
//json placeholder

require "../vendor/autoload.php"; 
//klau guna http
// $client = new \GuzzleHttp\Client();

//klau nk letak https nk elakkan error ssl letak verify
$client = new \GuzzleHttp\Client(['verify' => false]);

//untuk get data object
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/20', []);
// var_dump($response->getBody()->getContents());
$str = $response->getBody()->getContents();
$data = json_decode($str); //return object bkn array
echo $data->title;
echo '<hr>';

//------------------------------------------------------------------------------------
//untuk get data array json
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts', []);
// var_dump($response->getBody()->getContents());
$str = $response->getBody()->getContents();
$arr = json_decode($str); //convert data json ke array object dlm php
//var_dump($arr);

foreach ($arr as $data) {
    echo $data->title . '<br>';
}