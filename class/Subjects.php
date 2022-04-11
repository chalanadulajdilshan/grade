<?php

/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

/**

 * Description of subjects

 *

 * @author  Chalana dulaj

 */
class Subjects
{

    public $id;
    public $name;
    public $grade;
    public $image_name;
    public $description;
    public $queue;

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT * FROM `subjects` WHERE `id`=" . $id;
            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->grade = $result['grade'];
            $this->image_name = $result['image_name'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];



            return $this;
        }
    }

    public function create()
    {


        $query = "INSERT INTO `subjects` (`name`,`grade`,`image_name`,`description`,`queue`) VALUES  ('"
            . $this->name . "','"
            . $this->grade . "','"
            . $this->image_name . "', '"
            . $this->description . "', '"
            . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function all()
    {

        $query = "SELECT * FROM `subjects` ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getClassesByGrade($id)
    {

        $query = "SELECT * FROM `subjects` WHERE `grade` =" . $id . " ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }
 
    public function update()
    {



        $query = "UPDATE  `subjects` SET "
            . "`name` ='" . $this->name . "', "
            . "`grade` ='" . $this->grade . "', " 
            . "`image_name` ='" . $this->image_name . "', "
            . "`description` ='" . $this->description . "', "
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

    public function delete()
    {


        unlink(Helper::getSitePath() . "upload/activity/" . $this->image_name);

        $query = 'DELETE FROM `subjects` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function arrange($key, $img)
    {

        $query = "UPDATE `subjects` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        return $result;
    }

    public function getActivitiesByTitle($name)
    {

        $query = "SELECT `id` FROM `subjects` WHERE `name` LIKE '" . $name . "'";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        return $result['id'];
    }
}
