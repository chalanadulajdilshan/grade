<?php

include '../../../class/include.php';
header('Content-type: application/json');

if ($_POST['action'] == 'GETCITYSBYDISTRICT') {

    $CITY = new City(NULL);

    $result = $CITY->GetCitiesByDistrict($_POST["district"]);
    echo json_encode($result);

    exit();
}

