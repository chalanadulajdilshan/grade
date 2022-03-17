<?php

include '../../../class/include.php';

$STUDENT = new Student(NULL);

$CHECK_MOBILE = $STUDENT->checkRegistrationMobileNo($_POST['phone_number']);
$CHECK_STUDENT_ID = $STUDENT->checkStudentId($_POST['student_id']);


if ($CHECK_MOBILE == 'true') {
    $response['status'] = 'duplicate_mobile_no';
    $response['message'] = " Your Mobile No is already exsists.!. Enter another Mobile Number.";
    echo json_encode($response);
    exit();
} else if ($CHECK_STUDENT_ID == 'true') {
    $response['status'] = 'duplicate_student_id';
    $response['message'] = "This student Id is Used now. Please Refresh your web browser and sing up again..!";
    echo json_encode($response);
    exit();
} else {

    $STUDENT->full_name = ucfirst($_POST['full_name']);
    $STUDENT->phone_number = $_POST['phone_number'];
    $STUDENT->student_id = $_POST['student_id'];
    $STUDENT->grade = $_POST['grade'];
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
}
