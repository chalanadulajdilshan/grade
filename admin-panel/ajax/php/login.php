<?php

include '../../../class/include.php';
  
$USER = new User(NULL);

$username = $_POST['username'];
$password = $_POST['password'];
 

if ($USER->login($username, $password)) {
    $result = [
        "status" => 'success'
    ];
    echo json_encode($result);
    exit();
} else {
    $result = [
        "status" => 'error'
    ];
    echo json_encode($result);
    exit();
} 
