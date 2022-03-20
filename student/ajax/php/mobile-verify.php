<?php

include '../../../class/include.php';

if (!isset($_SESSION)) {
    session_start();
}

 

if ($_POST['action'] === 'MOBILECODE') {

    $STUDENT = new Student($_SESSION['id']);

    if ($STUDENT->GenarateMobileCode()) {

        $status = $STUDENT->sendSMS($STUDENT->phone_number, "Your account verification code is " . $STUDENT->phone_code . "  %0a%0a provide by - easytutor.lk.");

 
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
        $status = $STUDENT->updateMobileVerification();




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
