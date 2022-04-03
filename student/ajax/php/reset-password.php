
<?php

include '../../../class/include.php';


if (isset($_POST['PasswordReset'])) {
    $STUDENT = new Student(NULL);
    $code = $_POST["reset_code"];
    $password = $_POST["password"];
    $confpassword = $_POST["confirmpassword"];

    if ($password === $confpassword && $password != NULL && $confpassword != NULL) {
        if ($STUDENT->SelectResetCode($code)) {
            $STUDENT->updatePassword($password, $code);
            $result = ["status" => 'success'];
            echo json_encode($result);
            exit();
        } else {
            $result = ["status" => 'error_code'];
            echo json_encode($result);
            exit();
        }
    } else {
        $result = ["status" => 'error'];
        echo json_encode($result);
        exit();
    }
}

