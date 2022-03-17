<?php

include '../../../class/include.php';

if ($_POST['option'] == 'delete') {

    $TOUR_COMPANY_PACKAGE = new TourCompanyPackage($_POST['id']);

    $result = $TOUR_COMPANY_PACKAGE->delete();

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}

if ($_POST['option'] == 'selected-delete') {

    $TOUR_COMPANY_PACKAGE_SELECTED = new TourCompanyPackageSelected($_POST['id']);
  
    $result = $TOUR_COMPANY_PACKAGE_SELECTED->deleteSelected();

    if ($result) {

        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}