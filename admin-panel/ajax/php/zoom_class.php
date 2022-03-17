<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $ONLINE_CLASSES = new ZoomClass(NULL);

    $ONLINE_CLASSES->title = $_POST['title'];
    $ONLINE_CLASSES->subject_id = $_POST['subject_id'];
    $ONLINE_CLASSES->description = $_POST['description'];
    $ONLINE_CLASSES->start_date = $_POST['start_date'];
    $ONLINE_CLASSES->start_time = $_POST['start_time'];
    $ONLINE_CLASSES->meeting_id = $_POST['meeting_id'];
    $ONLINE_CLASSES->password = $_POST['password'];

    $ONLINE_CLASSES->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['update'])) {

    $ONLINE_CLASSES = new ZoomClass(NULL);

    $ONLINE_CLASSES->title = $_POST['title'];
    $ONLINE_CLASSES->description = $_POST['description'];
    $ONLINE_CLASSES->start_date = $_POST['start_date'];
    $ONLINE_CLASSES->start_time = $_POST['start_time'];
    $ONLINE_CLASSES->meeting_id = $_POST['meeting_id'];
    $ONLINE_CLASSES->password = $_POST['password'];
    $ONLINE_CLASSES->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
