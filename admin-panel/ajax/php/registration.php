<?php

include '../../../class/include.php';

$STUDENT = new Student(NULL);

$STUDENT->full_name = $_POST['full_name'];
$STUDENT->phone_number = $_POST['phone_number'];
$STUDENT->student_id = $_POST['student_id'];
$STUDENT->email = $_POST['email'];
$STUDENT->password = md5($_POST['password']);


$res = $STUDENT->create();
if ($res == TRUE) {

    $STUDENT->login($_POST['student_id'], $_POST['password']);
    $response = ["status" => 'success'];

    echo json_encode($response);
    exit();
} else {

    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}
