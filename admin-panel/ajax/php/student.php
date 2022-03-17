<?php

include '../../../class/include.php';


if (isset($_POST['update'])) {


    $STUDENT = new Student($_POST['id']);

    $STUDENT->full_name = $_POST['full_name'];
    $STUDENT->phone_number = $_POST['phone_number'];
    $STUDENT->email = $_POST['email'];


    $STUDENT->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

 
    