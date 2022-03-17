<?php

include '../../../class/include.php';

$PAYMENT = new Payment(NULL);

date_default_timezone_set('Asia/Colombo');
$date_and_time = date('Y-M-d H:i:s');
 



$PAYMENT->student_id = $_POST['student_id'];
$PAYMENT->date_and_time = $date_and_time; 

//add resize slip image
 
$PAYMENT->create();

$result = ["status" => "success"];
echo json_encode($result);
exit();
?> 