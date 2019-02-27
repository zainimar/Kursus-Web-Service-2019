<?php

include_once 'db.php';

function isToken() 
{
    global $conn; // untuk call dalam function
    if (isset($_GET['token']))
    {
        $token = $_GET['token'];
    }
    else if (isset($_POST['token']))
    {
        $token = $_POST['token'];
    } 
    else
    {
        //tiada token
        $obj = new stdClass();
        $obj->err = 'No Token';
        header('Content-Type:application/json');
        echo json_encode($obj);
        exit;
    }
    // else
    // {
    //     //set dalam header
    //     $data = file_get_contents('php:\\input', true);
    //     $token = $data['token'];
    // }

    $sql = "SELECT * FROM token WHERE token = '$token'";
    $rs =  mysqli_query($conn,$sql);
    $rows = mysqli_fetch_array($rs);
    if(!$rows)
    {
        //token salah
        $obj = new stdClass();
        $obj->err = 'No Permission';

        header('Content-Type:application/json');
        echo json_encode($obj);
        exit;
    }
}
    

    