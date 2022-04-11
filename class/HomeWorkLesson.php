<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class HomeWorkLesson {

    public $id;
    public $class_lessons;
    public $title;
    public $description;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT  * FROM `home_work_lesson` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->class_lessons = $result['class_lessons'];
            $this->title = $result['title'];
            $this->description = $result['description'];
            $this->queue = $result['queue'];
        }
    }

    public function create() {



        $query = "INSERT INTO `home_work_lesson` (`class_lessons`,`title`,`description`,`queue`) VALUES  ('"
                . $this->class_lessons . "', '"
                . $this->title . "', '"
                . $this->description . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getHomeWorkLessonsByClass($id) {

        $query = "SELECT  * FROM `home_work_lesson` WHERE `class_lessons` = '" . $id . "'";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `home_work_lesson` SET "
                . "`title` ='" . $this->title . "',"
                . "`description` ='" . $this->description . "'"
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `home_work_lesson` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `home_work_lesson` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete() {

        $query = 'DELETE FROM `home_work_lesson` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }

     

}
