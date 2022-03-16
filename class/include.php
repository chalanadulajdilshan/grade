<?php

include_once(dirname(__FILE__) . '/Database.php');
include_once(dirname(__FILE__) . '/User.php');
include_once(dirname(__FILE__) . '/Upload.php');
include_once(dirname(__FILE__) . '/Helper.php');

include_once(dirname(__FILE__) . '/DefaultData.php');
include_once(dirname(__FILE__) . '/TutionClass.php');
include_once(dirname(__FILE__) . '/VideoLessons.php');
include_once(dirname(__FILE__) . '/HomeWork.php');
include_once(dirname(__FILE__) . '/Papers.php');
include_once(dirname(__FILE__) . '/NewWords.php');
include_once(dirname(__FILE__) . '/Student.php');
include_once(dirname(__FILE__) . '/District.php');
include_once(dirname(__FILE__) . '/City.php');
include_once(dirname(__FILE__) . '/Teacher.php');
include_once(dirname(__FILE__) . '/HomeWorkLesson.php'); 
include_once(dirname(__FILE__) . '/OnlineClass.php');
include_once(dirname(__FILE__) . '/Lessons.php');
include_once(dirname(__FILE__) . '/Payment.php');
include_once(dirname(__FILE__) . '/Message.php');
include_once(dirname(__FILE__) . '/News.php');
include_once(dirname(__FILE__) . '/VideoVerification.php');
 
function dd($data) {

    var_dump($data);

    exit();
}

function redirect($url) {

    $string = '<script type="text/javascript">';

    $string .= 'window.location = "' . $url . '"';

    $string .= '</script>';



    echo $string;

    exit();
}
