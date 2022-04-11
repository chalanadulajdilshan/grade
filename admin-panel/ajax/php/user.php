<?php

include '../../../class/include.php';

//update
 
 

    $USER = new User($_POST['id']);

    $USER->name = $_POST['name'];
    $USER->email = $_POST['email'];
    $USER->username = $_POST['username'];
    $USER->sdk_key = $_POST['sdk_key'];
    $USER->sdk_secret = $_POST['sdk_secret'];
    $USER->subject = $_POST['subject'];



    // $dir_dest = '../../../upload/user/';

    // $handle = new Upload($_FILES['image_name']);
    // $HELP = new Helper();

    // $imgName = null;

    // if ($handle->uploaded) {
    //     $handle->image_resize = true;
    //     $handle->file_new_name_ext = 'jpg';
    //     $handle->image_ratio_crop = 'C';
    //     $handle->file_new_name_body = $HELP->randamId();
    //     $handle->image_x = 350;
    //     $handle->image_y = 230;

    //     $handle->Process($dir_dest);

    //     if ($handle->processed) {
    //         $info = getimagesize($handle->file_dst_pathname);
    //         $imgName = $handle->file_dst_name;
    //     }
    // }

    // $NEWS->image_name = $imgName;

    $USER->update();

    if ($USER) {
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
 