<?php

//1.connect ke DB
//rujuk file db.php
include 'db.php';
//untuk cek token
include 'token.php';

//2.Verify Token supaya Api dan web service lebih secure
//a. senario pertama - server client php call web service (bkn guna javascript)
isToken(); // call function isToken() yg dah include n proceed to next line kalau token ok

//3. query data
// kena cek id sama ada id yg client hantar  betul@salah@tiada id dihantar, dafault to 0
$id = isset($_GET['idd']) ? $_GET['idd'] : 0; //service ni ade parameter yg die hantar.
// elak untuk sql injection
$id = mysqli_real_escape_string($conn,$id);
$sql = "SELECT * FROM film WHERE film_id = $id";
$rs =  mysqli_query($conn,$sql);

//paparkan result sama ada ade data atau tidak
if ($rs)
{
    //ada data
    $rows = mysqli_fetch_array($rs);
    if (!$rows) 
    {
        //id tidak wujud
        $data = new stdClass();
        $data->err = 'No Data';
    }
    else
    {
        //jika id wujud return data
        $data = $rows;
    }
    
}
else
{
    //tiada data
    $data = new stdClass();
    $data->err = 'No Data';

}

//4. print data sbg json
//untuk return default Json bukan Html
header('Content-Type:application/json');
echo json_encode($data);