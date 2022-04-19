<?php

if (!isset($_SESSION)) {
    session_start();
}

$STUDENT = new Student(NULL);
$PAYMENT = new Payment(NULL);

if (!$STUDENT->authenticate()) {
    redirect('login.php');
}

if ($STUDENT->checkMobileNumberVerifried($_SESSION['id'])) {
    redirect('mobile-verify.php?id=' . $_SESSION['id']);
}


date_default_timezone_set("Asia/Calcutta");
$date = date('m-d');


if ($PAYMENT->checkPayment($_SESSION['id'], $date)) {
    redirect('manage-payments.php');
}
