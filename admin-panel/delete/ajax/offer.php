<?php

include '../../../class/include.php';
 
if ($_POST['option'] == 'delete') {

    $OFFER= new Offer($_POST['id']);

    $result = $OFFER->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}