<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $RENT_CAR_COMPANY = new RentCarCompany($_POST['id']);

 
    $result = $RENT_CAR_COMPANY->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}