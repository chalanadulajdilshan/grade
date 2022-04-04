<?php

include '../../../class/include.php';
 
if ($_POST['option'] == 'delete') {

    $VIDEO_LESSONS = new VideoLessons($_POST['id']);

    $result = $VIDEO_LESSONS->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}