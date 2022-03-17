<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $ACCOMMODATION = new Accommodation($_POST['id']);

 
    $result = $ACCOMMODATION->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}