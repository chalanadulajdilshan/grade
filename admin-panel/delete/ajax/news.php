<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $NEWS = new News($_POST['id']);

    $result = $NEWS->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}