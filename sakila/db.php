<?php

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