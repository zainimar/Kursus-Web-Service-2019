<?php
//return senarai kedai ini
//step2 utk buat web service

//1.connect ke DB
$server = 'localhost';
$user = 'root';
$pwd = '';
$db = 'sakila';
$port = 3307;

$conn = mysqli_connect($server, $user, $pwd, $db,$port);
if (! $conn) {
    echo "Connection problem!";
    exit;
}


//2. query data
$sql = "SELECT * FROM film LIMIT 0,20";
$rs =  mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($rs)) {
    echo $row['title'] . '<br>';
}



//3. print data sbg json

