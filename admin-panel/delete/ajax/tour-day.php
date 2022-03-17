<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {
   
    $TOUR_DATE = new TourDate($_POST['id']);
 
    $result = $TOUR_DATE->delete();
 
    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}