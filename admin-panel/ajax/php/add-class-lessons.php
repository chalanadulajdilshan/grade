<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $LESSONS = new Lessons(NULL);
     
    $LESSONS->title = $_POST['title'];
    $LESSONS->class_id = $_POST['class_id'];
    $LESSONS->description = $_POST['description'];
    $LESSONS->start_date = $_POST['start_date'];
    $LESSONS->start_time = $_POST['start_time'];
    $LESSONS->meeting_id = $_POST['meeting_id'];
    $LESSONS->password = $_POST['password'];     
     
    $LESSONS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $dir_dest = '../../../../upload/classes/lessons/';
    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 300;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }





    $LESSONS = new Lessons($_POST['id']);

    $LESSONS->title = $_POST['title'];
    $LESSONS->description = $_POST['description'];
    $LESSONS->image_name = $_POST['oldImageName'];
    $LESSONS->payment_method = $_POST['payment_method'];
    
    if (isset($_POST['class_fee'])) {
        $LESSONS->class_fee = $_POST['class_fee'];
    }
    if (isset($_POST['video_duration'])) {
        $LESSONS->video_duration = $_POST['video_duration'];
    }
    
    $LESSONS->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $LESSONS = Offer::arrange($key, $img);

        header('Location:../../arrange-offer.php?message=9');
    }
}
    