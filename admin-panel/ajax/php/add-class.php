<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $TUTTION_CLASS = new TutionClass(NULL);

    $TUTTION_CLASS->name = ucfirst($_POST['name']);
    $TUTTION_CLASS->grade = ucfirst($_POST['grade']);
    $TUTTION_CLASS->description = $_POST['description'];


    $dir_dest = '../../../upload/classes/';

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

    $TUTTION_CLASS->image_name = $imgName;
    $TUTTION_CLASS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/classes/';
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

    $TUTTION_CLASS = new TutionClass($_POST['id']);

    $TUTTION_CLASS->image_name = $_POST['oldImageName'];
    $TUTTION_CLASS->name = ucfirst($_POST['name']);
    $TUTTION_CLASS->grade = $_POST['grade'];
    $TUTTION_CLASS->description = $_POST['description'];

    $TUTTION_CLASS->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


