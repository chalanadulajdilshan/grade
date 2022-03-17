<?php

include '../../../../class/include.php';

if (!isset($_SESSION)) {
    session_start();
}

if (!Student::authenticate()) {
    redirect('login.php');
}


if ($_POST['action'] === 'MOBILECODE') {

    $STUDENT = new Student($_SESSION['id']);

    if ($STUDENT->GenarateMobileCode()) {

        $status = $STUDENT->sendSMS($STUDENT->phone_number, "Your account verification code is " . $STUDENT->phone_code . "  %0a%0a provide by - easytutor.lk.");

        //  $STUDENT->sendStudentRegistrationEmail($STUDENT->full_name, $STUDENT->email, $STUDENT->student_id,$STUDENT->phone_code);

        if ($status) {

            $reture['status'] = 'success';
            echo json_encode($reture);
            exit();
        }
    }
}

if ($_POST['action'] === 'MOBILEVERYFY') {

    $STUDENT = new Student($_POST['id']);
    $CHECK_CODE = $STUDENT->checkMobileVerificationCode($_POST['code']);


    if ($CHECK_CODE == 'true') {
        $STUDENT->phone_verification = 1;
        $STUDENT->updateMobileVerification();


        $message = 'Welcome to easytutor.lk!. %0a%0a'
                . 'Your Student account was created successfully%0a%0a'
                . 'Student ID: ' . $STUDENT->student_id . '%0a'
                . 'Thank you for choosing us.%0a'
                . 'Cheers!.';

        $status = $STUDENT->sendSMS($STUDENT->phone_number, $message);


        if ($status) {
            header('Content-Type: application/json; charset=UTF8');
            $reture['status'] = 'success';
            echo json_encode($reture);
            exit();
        }
    } else {
        $response['status'] = 'error';
        echo json_encode($response);
        exit();
    }
}



