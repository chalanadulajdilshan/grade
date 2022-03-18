<?php

include '../../../class/include.php';

$PAYMENT = new Payment(NULL);

$dir_dest = '../../../upload/payments/';

$handle = new Upload($_FILES['slip_image']);

$imgName = null;

if ($handle->uploaded) {
    $handle->image_resize = true;
    $handle->file_new_name_ext = 'jpg';
    $handle->image_ratio_crop = 'C';
    $handle->file_new_name_body = Helper::randamId();
    $handle->image_x = 500;
    $handle->image_y = 600;

    $handle->Process($dir_dest);

    if ($handle->processed) {
        $info = getimagesize($handle->file_dst_pathname);
        $imgName = $handle->file_dst_name;
    }
}

$PAYMENT->student_id = $_POST['student_id'];
$PAYMENT->date_and_time = $_POST['date'];
$PAYMENT->slip_image = $imgName;
$PAYMENT->status = 0;
//add resize slip image

$PAYMENT->create();

$result = ["status" => "success"];
echo json_encode($result);
exit();
