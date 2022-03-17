<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $RENT_CAR_PRICE = new RentCarPrice($_POST['id']);

 
    $result = $RENT_CAR_PRICE->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}