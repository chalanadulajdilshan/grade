<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $ZOOM_CLASS = new ZoomClass($_POST['id']);


    $result = $ZOOM_CLASS->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}
