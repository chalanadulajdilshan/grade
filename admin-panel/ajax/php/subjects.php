<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $SUBJECTS = new Subjects(NULL);

    $SUBJECTS->name = ucfirst($_POST['name']);
    $SUBJECTS->grade = ucfirst($_POST['grade']);
    $SUBJECTS->description = $_POST['description'];
  
    
    $dir_dest = '../../../upload/Subjects/';

    $handle = new Upload($_FILES['image_name']);
    $HELP = new Helper();
    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $HELP->randamId();
        $handle->image_x = 300;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SUBJECTS->image_name = $imgName;
    $SUBJECTS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/Subjects/';
    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST["oldImageName"];
        $handle->image_x = 300;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $SUBJECTS = new Subjects($_POST['id']);

    $SUBJECTS->image_name = $_POST['oldImageName'];
    $SUBJECTS->name = ucfirst($_POST['name']);
    $SUBJECTS->grade = $_POST['grade'];
    $SUBJECTS->description = $_POST['description'];

    $SUBJECTS->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


