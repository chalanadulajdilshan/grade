<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DefaultData
 *
 * @author User™
 */
class DefaultData
{

    //vehicle get class types
    public function Grades()
    {
        return array(
            "6" => "Grade 6",
            "7" => "Grade 7",
            "8" => "Grade 8",
            "9" => "Grade 9",
            "10" => "Grade 10",
            "11" => "Grade 11"
        );
    }


    //send mobile verification
    function sendSMS($sender_id, $phone_number, $message)
    {



        $data = array(
            'user_id' => '104329',
            'api_key' => '5sd7dr4kpd400d66m',
            'sender_id' => $sender_id,
            'to' => $phone_number,
            'message' => $message
        );

        $url = 'http://send.ozonedesk.com/api/v2/send.php';
        $ch = curl_init($url);
        $postString = http_build_query($data, '', '&');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response)->status;
    }
}
