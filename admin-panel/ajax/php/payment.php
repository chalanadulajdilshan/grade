<?php

include '../../../class/include.php';

date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d H:i:s');

$PAYMENT = new Payment($_POST['id']);
  
$PAYMENT->status = $_POST['status'];
//add resize slip image

$PAYMENT->update();

$result = ["status" => "success"];
echo json_encode($result);
exit();
