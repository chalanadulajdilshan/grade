<?php

include '../../../class/include.php';
//Create
if (isset($_POST['create'])) {
    $NEWS = new News(NULL);

    $NEWS->title = $_POST['title'];
    $NEWS->date = $_POST['date'];
    $NEWS->short_description = $_POST['short_description'];
    $NEWS->description = $_POST['description'];


    $dir_dest = '../../../upload/news/';

    $handle = new Upload($_FILES['image_name']);
    $HELP = new Helper();

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $HELP->randamId();
        $handle->image_x = 350;
        $handle->image_y = 230;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $NEWS->image_name = $imgName;

    $NEWS->create();

    if ($NEWS) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}

//Update
if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/news/';

    $handle = new Upload($_FILES['image_name']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST["oldImageName"];
        $handle->image_x = 350;
        $handle->image_y = 230;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $NEWS = new News($_POST['id']);
    $NEWS->image_name = $_POST['oldImageName'];
    $NEWS->title = $_POST['title'];
    $NEWS->date = $_POST['date'];
    $NEWS->short_description = $_POST['short_description'];
    $NEWS->description = $_POST['description'];

    $NEWS->update();

    if ($NEWS) {
        $result = [
            "status" => 'success'
        ];
        echo json_encode($result);
        exit();
    } else {
        $result = [
            "status" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}
//Arange slider
if (isset($_POST['arrange'])) {
    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;
        $NEWS = News::arrange($key, $img);
        header('Location:../../../arrange-news.php?message=9');
    }
}
