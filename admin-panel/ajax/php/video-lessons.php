<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $VIDEO_LESSONS = new VideoLessons(NULL);

    $VIDEO_LESSONS->title = $_POST['title'];
    $VIDEO_LESSONS->lesson_id = $_POST['lesson_id'];
    $VIDEO_LESSONS->url = $_POST['url'];

    $VIDEO_LESSONS->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {


    $VIDEO_LESSONS = new VideoLessons($_POST['id']);

    $VIDEO_LESSONS->title = $_POST['title'];
    $VIDEO_LESSONS->url = $_POST['url'];

    $VIDEO_LESSONS->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['arrange'])) {

    foreach ($_POST['sort'] as $key => $img) {
        $key = $key + 1;

        $VIDEO_LESSONS = Offer::arrange($key, $img);

        header('Location:../../arrange-offer.php?message=9');
    }
}
