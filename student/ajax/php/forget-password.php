<?php

include '../../../class/include.php';


$STUDENT = new Student(NULL);

$mobile_number = $_POST['mobile_number'];


if ($STUDENT->checkMobileNumber($mobile_number)) {

    if ($STUDENT->GenarateCode($mobile_number)) {
        $res = $STUDENT->SelectForgetUser($mobile_number);

        $username = $STUDENT->full_name;
        $phone_number = $STUDENT->phone_number;
        $resetcode = $STUDENT->resetcode;

        $DEFAULTDATA = new DefaultData();
         

        //send verification mobile code
        $message = "Your account reset code is " .$STUDENT->resetcode;

        $SMS = $DEFAULTDATA->sendSMS('MYT-Partner', preg_replace('/[^0-9]/', '',  $phone_number), $message);


        if ($SMS) {
            $result = ["status" => 'success'];
            echo json_encode($result);
            exit();
        } else {
            $result = ["status" => 'error'];
            echo json_encode($result);
            exit();
        }
    }
    exit();
} else {
    $result = ["status" => 'error'];
    echo json_encode($result);
    exit();
}
