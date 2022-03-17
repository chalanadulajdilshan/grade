<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $TEACHER = new Teacher(NULL);

    $TEACHER->full_name = $_POST['full_name'];
    $TEACHER->nic_number = $_POST['nic_number'];
    $TEACHER->mobile_number = $_POST['mobile_number'];
    $TEACHER->email = $_POST['email'];
    $TEACHER->city = $_POST['city'];
    $TEACHER->address = $_POST['address'];
    $TEACHER->subject = $_POST['subject'];
    $TEACHER->login_url_teacher = $_POST['login_url_teacher'];
    $TEACHER->login_url_student = $_POST['login_url_student'];
    $TEACHER->username = $_POST['username'];
    $TEACHER->password = md5($_POST['password']);

    if (isset($_POST['is_active'])) {
        $active = $_POST['is_active'];
    } else {
        $active = 0;
    }

    $TEACHER->is_active = $active;
    $dir_dest = '../../../upload/teacher/';

    $handle = new Upload($_FILES['image_name']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 255;
        $handle->image_y = 255;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TEACHER->image_name = $imgName;
    $res = $TEACHER->create();

    $message = 'Welcome to easytutor.lk!. %0a%0a'
            . 'Your Student account was created successfully%0a%0a'
            . 'Student ID: ' . $_POST['full_name'] . '%0a'
            . 'Thank you for choosing us.%0a'
            . 'Cheers!.';

    $TEACHER->sendSMS($_POST['mobile_number'], $message);

    $TEACHER->sendStudentRegistrationEmail($_POST['full_name'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['login_url_teacher']);


    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $dir_dest = '../../../upload/teacher/';

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
        $handle->image_y = 255;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $TEACHER = new Teacher($_POST['id']);

    $TEACHER->full_name = $_POST['full_name'];
    $TEACHER->nic_number = $_POST['nic_number'];
    $TEACHER->mobile_number = $_POST['mobile_number'];
    $TEACHER->email = $_POST['email'];
    $TEACHER->city = $_POST['city'];
    $TEACHER->address = $_POST['address'];
    $TEACHER->subject = $_POST['subject'];
    $TEACHER->login_url_teacher = $_POST['login_url_teacher'];
    $TEACHER->login_url_student = $_POST['login_url_student'];
    //$TEACHER->password = md5($_POST['password']);
    $TEACHER->username = $_POST['username'];

    if (isset($_POST['is_active'])) {
        $TEACHER->is_active = $_POST['is_active'];
        $TEACHER->sendStudentRegistrationEmail($_POST['full_name'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['login_url_teacher']);
    } else {
        $TEACHER->is_active = 0;
    }

    $TEACHER->update();

    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $TEACHER = Offer::arrange($key, $img);

        header('Location:../../arrange-offer.php?message=9');
    }
}
    