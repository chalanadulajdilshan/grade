<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $TOUR_COMPANY = new TourCompany($_POST['id']);

 
    $result = $TOUR_COMPANY->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}