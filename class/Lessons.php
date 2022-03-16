<?php

/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

/**

 * Description of OfferPhoto

 *

 * @author lessons

 */
class Lessons {

    public $id;
    public $class_id;
    public $title;
    public $start_date;
    public $start_time;
    public $meeting_id;
    public $password;
    public $description;
    public $queue;

    public function __construct($id) {

        if ($id) {

            $query = "SELECT *  FROM `lessons` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->class_id = $result['class_id'];
            $this->title = $result['title'];
            $this->start_date = $result['start_date'];
            $this->start_time = $result['start_time'];
            $this->meeting_id = $result['meeting_id'];
            $this->password = $result['password'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create() {



        $query = "INSERT INTO `lessons` (`class_id`,`title`,`start_date`,`description`,`start_time`,`meeting_id`,`password`,`queue`) VALUES  ('"
                . $this->class_id . "','"
                . $this->title . "','"
                . $this->start_date . "', '"
                . $this->description . "', '"
                . $this->start_time . "', '"
                . $this->meeting_id . "', '"
                . $this->password . "', '"
                . $this->queue . "')";
        

    
        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return TRUE;
        } else {

            return FALSE;
        }
    }

    public function all() {



        $query = "SELECT * FROM `lessons` ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function update() {



        $query = "UPDATE  `lessons` SET " 
                . "`title` ='" . $this->title . "', "
                . "`start_date` ='" . $this->start_date . "', "
                . "`description` ='" . $this->description . "', "
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

    public function delete() {



        $query = 'DELETE FROM `lessons` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }

    public function getLessonsByClsass($class_id) {

        $query = "SELECT * FROM `lessons` WHERE `class_id`= $class_id  ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img) {

        $query = "UPDATE `lessons` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        return $result;
    }

}
