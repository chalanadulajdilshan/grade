<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $VIDEO_LESSONS = new VideoLessons(NULL);

    $VIDEO_LESSONS->title = $_POST['title'];
    $VIDEO_LESSONS->subject_id = $_POST['subject_id'];
    $VIDEO_LESSONS->url = $_POST['url'];
    $VIDEO_LESSONS->passcode = $_POST['passcode'];

    $VIDEO_LESSONS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {


    $VIDEO_LESSONS = new VideoLessons($_POST['id']);

    $VIDEO_LESSONS->title = $_POST['title'];
    $VIDEO_LESSONS->url = $_POST['url'];
    $VIDEO_LESSONS->passcode = $_POST['passcode'];
    
    $VIDEO_LESSONS->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
 