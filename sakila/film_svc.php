<?php
//return senarai kedai ini
//step2 utk buat web service

//1.connect ke DB
//rujuk file db.php
include 'db.php';


//2. query data
$sql = "SELECT * FROM film LIMIT 0,20";
$rs =  mysqli_query($conn,$sql);
$arr= [];

while($row = mysqli_fetch_array($rs)) {
    // echo $row['title'] . '<br>';

    // create object dlm array utk display 2 colum
    $obj = new stdClass();
    $obj->title = $row['title'];
    $obj->descr = $row['description'];
    $arr[] = $obj;
}


//3. print data sbg json
$json = json_encode($arr);
//untuk return default Json bukan Html
header('Content-Type:application/json');
echo $json;