<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $RENT_CAR = new RentCar($_POST['id']);

    unlink(Helper::getSitePath() . "upload/rent-a-car/gallery/" . $RENT_CAR->main_image);
    unlink(Helper::getSitePath() . "upload/rent-a-car/gallery/thumb/" . $RENT_CAR->main_image);
    unlink(Helper::getSitePath() . "upload/rent-a-car/license/back/" . $RENT_CAR->driving_license_back); 
    unlink(Helper::getSitePath() . "upload/rent-a-car/license/back/thumb/" . $RENT_CAR->driving_license_back);
    unlink(Helper::getSitePath() . "upload/rent-a-car/license/front/" . $RENT_CAR->driving_license_front); 
    unlink(Helper::getSitePath() . "upload/rent-a-car/license/front/thumb/" . $RENT_CAR->driving_license_front);

    $result = $RENT_CAR->delete();


    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}