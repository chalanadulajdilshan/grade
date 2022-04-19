<?php

/*

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */

/**

 * Description of Offer

 *

 * @author chalana

 */
class Payment
{

    public $id;
    public $student_id;
    public $date;
    public $time;
    public $slip_image;
    public $status;
    public $queue;

    public function __construct($id)
    {

        if ($id) {

            $query = "SELECT * FROM `payment` WHERE `id`=" . $id;
            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));


            $this->id = $result['id'];
            $this->student_id = $result['student_id'];
            $this->date = $result['date'];
            $this->time = $result['time'];
            $this->slip_image = $result['slip_image'];
            $this->status = $result['status'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {


        $query = "INSERT INTO `payment` (`student_id`,`date`,`time`,`slip_image`,`queue`) VALUES  ('"
            . $this->student_id . "','"
            . $this->date . "', '"
            . $this->time . "', '"
            . $this->slip_image . "', '"
            . $this->queue . "')";


        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return mysqli_insert_id($db->DB_CON);
        } else {

            return FALSE;
        }
    }



    public function all()
    {

        $query = "SELECT * FROM `payment` ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }


    public function checkPayment($student_id, $date)
    {

        $query = "SELECT `id` FROM `payment` WHERE  `status` = 1 AND `student_id`= $student_id AND `date` >= $date";
        

        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        if ($result['id']) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getPaymentByStudentId($student_id)
    {

        $query = "SELECT * FROM `payment` WHERE `student_id` =" . $student_id . " ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getPaymentByStudentByLesson($lesson_id)
    {

        $query = "SELECT * FROM `payment` WHERE `lesson_id` =" . $lesson_id . " ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getUnPaidStudentByLesson($student_id, $lesson_id)
    {

        $query = "SELECT * FROM `payment` WHERE `student_id` =" . $student_id . " AND `lesson_id` =" . $lesson_id . " AND `payment_status_code` =0 ORDER BY id DESC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function getPaidStudentByLesson($student_id, $lesson_id)
    {

        $query = "SELECT * FROM `payment` WHERE `student_id` =" . $student_id . " AND `lesson_id` =" . $lesson_id . " AND `payment_status_code` =1 ORDER BY id DESC";

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

        $query = "UPDATE  `payment` SET `status` ='" . $this->status . "' WHERE `id` = '" . $this->id . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {

            return $this->__construct($this->id);
        } else {

            return FALSE;
        }
    }

    public function getLastInvoiceId($id)
    {

        $query = " SELECT count(id) as `last_id` FROM `payment` WHERE `student_id`=$id ORDER BY `id` DESC LIMIT 1";

        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['last_id'];
    }

    public function getLastID()
    {

        $query = "SELECT `id` FROM `payment` ORDER BY `id` DESC LIMIT 1";
        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }

    public function getPaymentStatusByStudentId($lesson_id, $student_id)
    {

        $query = "SELECT `payment_status_code` FROM `payment` WHERE  `lesson_id` =$lesson_id AND `student_id`=$student_id ORDER BY `id` DESC LIMIT 1";

        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['payment_status_code'];
    }
}
