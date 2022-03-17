<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $HOTEL_BOOKING= new HotelBooking($_POST['id']);

 
    $result = $HOTEL_BOOKING->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}