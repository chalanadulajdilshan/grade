<?php

include '../../../../class/include.php';

//change profile image
if ($_POST['action'] == 'upload-add-image') {

    $dir_dest = '../../../../upload/student/profile/';

    $imgName = Helper::randamId();

    $handle = new Upload($_FILES['pro-picture']);

    if ($handle->uploaded) {

        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $imgName;

        $handle->image_x = 150;
        $handle->image_y = 150;

        $handle->Process($dir_dest);

        if ($handle->processed) {


            Student::ChangeProPic($_POST["id"], $handle->file_dst_name);
            header('Content-Type: application/json');

            $result = [
                "filename" => $handle->file_dst_name,
                "message" => 'success'
            ];
            echo json_encode($result);
            exit();
        } else {

            header('Content-Type: application/json');

            $result = [
                "message" => 'error'
            ];
            echo json_encode($result);
            exit();
        }
    } else {

        header('Content-Type: application/json');

        $result = [
            "message" => 'error'
        ];
        echo json_encode($result);
        exit();
    }
}

//update profile info
if ($_POST['action'] == 'update-info') {

    $STUDENT = new Student($_POST['id']);

    $STUDENT->full_name = $_POST['full_name'];
    $STUDENT->email = $_POST['email'];
    $STUDENT->phone_number = $_POST['phone_number'];
    $STUDENT->address = $_POST['address'];
    $STUDENT->city = $_POST['city'];

    $STUDENT->update();
    $data = array("status" => TRUE);
    header('Content-type: application/json');
    echo json_encode($data);
}

//change password
if (($_POST['action'] == 'change_pw')) {

    $STUDENT = new Student($_POST['id']);

    if ($_POST["new_password"] === $_POST["con-password"]) {
        $OldPassOk = Student::checkOldPass($_POST["id"], $_POST["old_password"]);
        if ($OldPassOk) {
            $result = Student::changePassword($_POST["id"], $_POST["new_password"]);

            if ($result == 'TRUE') {

                $data = array("status" => 'success');
                header('Content-type: application/json');
                echo json_encode($data);
            } else {
                $data = array("status" => 'error');
                header('Content-type: application/json');
                echo json_encode($data);
            }
        } else {
            $data = array("status" => 'error_old_pw_not_match');
            header('Content-type: application/json');
            echo json_encode($data);
        }
    } else {
        $data = array("status" => 'error_pw_not_match');
        header('Content-type: application/json');
        echo json_encode($data);
    }
}

 