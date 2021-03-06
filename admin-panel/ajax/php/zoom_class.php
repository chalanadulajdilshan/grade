<?php

include '../../../class/include.php';

if (isset($_POST['create'])) {

    $ONLINE_CLASSES = new ZoomClass(NULL);

    $ONLINE_CLASSES->title = $_POST['title'];
    $ONLINE_CLASSES->subject = $_POST['subject_id'];
    $ONLINE_CLASSES->start_date = $_POST['start_date'];
    $ONLINE_CLASSES->start_time = $_POST['start_time'];
    $ONLINE_CLASSES->meeting_id = str_replace(' ', '', $_POST['meeting_id']);
    $ONLINE_CLASSES->password = str_replace(' ', '', $_POST['password']);

    $ONLINE_CLASSES->create();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}


if (isset($_POST['update'])) {

    $ONLINE_CLASSES = new ZoomClass($_POST['id']);

    $ONLINE_CLASSES->title = $_POST['title'];
    $ONLINE_CLASSES->start_date = $_POST['start_date'];
    $ONLINE_CLASSES->start_time = $_POST['start_time'];
    $ONLINE_CLASSES->meeting_id = str_replace(' ', '', $_POST['meeting_id']);
    $ONLINE_CLASSES->password = str_replace(' ', '', $_POST['password']);
    $ONLINE_CLASSES->update();

    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
