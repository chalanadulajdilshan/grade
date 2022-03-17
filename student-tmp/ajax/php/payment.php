<?php

include '../../../../class/include.php';

$PAYMENT = new Payment(NULL);

date_default_timezone_set('Asia/Colombo');
$date= date('yy-m-d');
$time = date('H:i:s');

$PAYMENT->student_id = $_POST['student_id'];
$PAYMENT->lesson_id = $_POST['lesson_id'];
$PAYMENT->invoice_id = $_POST['invoice_id'];
$PAYMENT->teacher_id = $_POST['teacher_id'];
$PAYMENT->amount = $_POST['amount'];
$PAYMENT->date = $date;
$PAYMENT->time = $time;
$PAYMENT->create();

$result = ["status" => "success"];
echo json_encode($result);
exit();
?> 