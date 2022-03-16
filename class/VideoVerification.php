<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Page
 *
 * @author Chalana c.d.d
 */
class VideoVerification {

    public $id;
    public $student_id;
    public $lesson_id;
    public $viwed;
    public $status;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT * FROM `video_verification` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->student_id = $result['student_id'];
            $this->lesson_id = $result['lesson_id'];
            $this->status = $result['status'];
            $this->viwed = $result['viwed'];


            return $this;
        }
    }

    public function create() {

        $query = "INSERT INTO `video_verification` (`student_id`,`lesson_id`,`viwed`) VALUES  ('"
                . $this->student_id . "','"
                . $this->lesson_id . "', '"
                . $this->viwed . "')";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysqli_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `video_verification`";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `video_verification` SET "
                . "`student_id` ='" . $this->student_id . "', "
                . "`status` ='" . $this->status . "', "
                . "`lesson_id` ='" . $this->lesson_id . "' "
                . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function checktudentViewd($student_id, $lesson_id) {

        $query = "SELECT `id` FROM `video_verification` WHERE  `viwed` = 1 AND `student_id`=$student_id AND `lesson_id`=$lesson_id";
        
        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        if ($result['id']) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete() {

        $query = 'DELETE FROM `video_verification` WHERE id="' . $this->id . '"';
        unlink(Helper::getSitePath() . "upload/page/" . $this->status);

        $db = new Database();

        return $db->readQuery($query);
    }

}
