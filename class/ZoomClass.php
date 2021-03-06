<?php

/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

/**

 * Description of zoom_class

 *

 * @author  Chalana dulaj

 */
class ZoomClass
{

    public $id;
    public $subject;
    public $title;
    public $start_date;
    public $start_time;
    public $meeting_id;
    public $password;
    public $queue;

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT * FROM `zoom_class` WHERE `id`=" . $id;
            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->subject = $result['subject'];
            $this->title = $result['title'];
            $this->start_date = $result['start_date'];
            $this->start_time = $result['start_time'];
            $this->meeting_id = $result['meeting_id'];
            $this->password = $result['password'];
            $this->queue = $result['queue'];



            return $this;
        }
    }

    public function create()
    {


        $query = "INSERT INTO `zoom_class` (`subject`,`title`,`start_date`,`start_time`,`meeting_id`,`password`,`queue`) VALUES  ('"
            . $this->subject . "','"
            . $this->title . "','"
            . $this->start_date . "','"
            . $this->start_time . "','"
            . $this->meeting_id . "','"
            . $this->password . "','"
            . $this->queue . "')";



        $db = new Database();



        $result = $db->readQuery($query);


        if ($result) {


            return TRUE;
        } else {

            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `zoom_class` ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getOnlineClassBySubjectId($id)
    {

        $query = "SELECT * FROM `zoom_class` WHERE `subject` =" . $id . " ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getClassBySubjectId($id)
    {

        $query = "SELECT * FROM `zoom_class` WHERE `subject` =" . $id . " LIMIT 1";

        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result;
    }

    public function update()
    {

        $query = "UPDATE  `zoom_class` SET "
            . "`title` ='" . $this->title . "', "
            . "`start_date` ='" . $this->start_date . "', "
            . "`start_time` ='" . $this->start_time . "', "
            . "`meeting_id` ='" . $this->meeting_id . "', "
            . "`password` ='" . $this->password . "', "
            . "`queue` ='" . $this->queue . "' "
            . "WHERE `id` = '" . $this->id . "'";


        $db = new Database();

        

        $result = $db->readQuery($query);



        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function getClasses()
    {

        $query = "SELECT * FROM `zoom_class` ORDER BY `id` DESC";

        $db = new Database();
        $result = $db->readQuery($query);

        $array_res = array();
        while ($row = mysqli_fetch_array($result)) {
            $array_res[] = [
                // 'groupId' => $row['id'], 
                "title" =>  $row['title'] . ' - ' . $row['start_time'],
                "start" =>  $row['start_date'] /* . " " . $row['start_time'] */,
                // "end" =>  $row['check_out'],
                "color" =>  "#FF5B5C",
                "textColor" =>  "white",
                // "url" => URL . "customerbookings/view_booking/" . base64_encode($row['id']),
                "display" => 'list-item'
                // "borderColor" => 'transparent', 
                // "allDay" => false,
                // "startRecur" =>  $row['check_in'],
                // "endRecur" =>  $row['check_out'],
                // "daysOfWeek" =>  [0,1], 
            ];
        }
        return $array_res;
    }

    public function delete()
    {

        $query = 'DELETE FROM `zoom_class` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img)
    {

        $query = "UPDATE `zoom_class` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        return $result;
    }

    public function getActivitiesByTitle($title)
    {

        $query = "SELECT `id` FROM `zoom_class` WHERE `title` LIKE '" . $title . "'";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }
}
