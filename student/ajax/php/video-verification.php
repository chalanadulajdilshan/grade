<?php

include '../../../../class/include.php';

if ($_POST['action'] == 'CREATE') {


    $VIDEO_VERIFIcATION = new VideoVerification(NULL);

    $VIDEO_VERIFIcATION->lesson_id = $_POST['lesson_id'];
    $VIDEO_VERIFIcATION->student_id = $_POST['student_id'];
    $VIDEO_VERIFIcATION->viwed = 1;


    $VIDEO_VERIFIcATION->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $dir_dest = '../../../../upload/classes/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 255;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TUTTION_CLASS = new Offer($_POST['id']);

    $TUTTION_CLASS->image_name = $_POST['oldImageName'];
    $TUTTION_CLASS->category = $_POST['category'];
    $TUTTION_CLASS->title = $_POST['title'];
    $TUTTION_CLASS->start_date = $_POST['start_date'];
    $TUTTION_CLASS->end_date = $_POST['end_date'];
    $TUTTION_CLASS->offer_presentage = $_POST['offer_presentage'];
    $TUTTION_CLASS->short_description = $_POST['short_description'];
    $TUTTION_CLASS->offer_duration = $_POST['offer_duration'];
    $TUTTION_CLASS->price = $_POST['price'];
    if (isset($_POST['is_publish'])) {
        $TUTTION_CLASS->is_publish = $_POST['is_publish'];
    } else {
        $TUTTION_CLASS->is_publish = 0;
    }

    $TUTTION_CLASS->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TUTTION_CLASS = Offer::arrange($key, $img);

        header('Location:../../arrange-offer.php?message=9');
    }
}
    