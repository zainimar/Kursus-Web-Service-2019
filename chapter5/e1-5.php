<?php
/*
JSON notation
{} - object
[] - array

"key":"val"
sample : ["nama" : "zainimar"]

- mesti dalam double code "", xbole single code '
- number tak perlu ""
*/

//create object tanpa custom class
$obj = new stdClass();

//dalam bentuk obj nk convert ke string json
$obj -> nama = 'Zainimar';
$obj -> alamat = 'Putrajaya';
echo json_encode($obj);

echo '<hr>';

//dalam bentuk array nk convert ke string json
$arr = ['nama' => 'Zulkifli', 'umur' => 70];
echo json_encode($arr);