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
    public $date_and_time;
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
            $this->date_and_time = $result['date_and_time'];
            $this->slip_image = $result['slip_image'];
            $this->status = $result['status'];
            $this->queue = $result['queue'];

            return $this;
        }
    }

    public function create()
    {


        $query = "INSERT INTO `payment` (`student_id`,`date_and_time`,`slip_image`,`queue`) VALUES  ('"
            . $this->student_id . "','"
            . $this->date_and_time . "', '"
            . $this->slip_image . "', '"
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

        $query = "SELECT * FROM `payment` ORDER BY queue ASC";

        $db = new Database();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysqli_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
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



        $query = "UPDATE  `payment` SET "
            . "`title` ='" . $this->title . "', "
            . "`image_name` ='" . $this->image_name . "', "
            . "`short_description` ='" . $this->short_description . "', "
            . "`description` ='" . $this->description . "', "
            . "`price` ='" . $this->price . "', "
            . "`discount` ='" . $this->discount . "', "
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

    public function checkPayment($student_id, $lesson_id)
    {

        $query = "SELECT `id` FROM `payment` WHERE  `payment_status_code` = 1 AND `student_id`=$student_id AND `lesson_id`=$lesson_id";

        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        if ($result['id']) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getPaymentFilterByTeacher($date_range, $search_key, $teacher)
    {


        $query = "SELECT *  FROM `payment`";


        if (!empty($date_range)) {

            $date_arr = explode("-", $date_range);

            $start_date = explode(" ", str_replace("/", "-", $date_arr[0]));
            $due_date = explode(" ", str_replace("/", "-", $date_arr[1]));

            $query .= " WHERE  `date` between '$start_date[0]' AND '$due_date[1]' ";
        }
        if (!empty($search_key)) {
            $query .= "AND `invoice_id` LIKE '%" . $search_key . "%'";
        }

        $query .= "AND `teacher_id` =$teacher AND `payment_status_code` =1 ORDER BY queue ASC  ";



        $db = new Database();
        $result = $db->readQuery($query);
        $out_put = '';

        $key = 1;
        while ($row = mysqli_fetch_array($result)) {
            $STUDENT = new Student($row['student_id']);
            $LESSON = new Lessons($row['lesson_id']);
            $TUTION_CLASS = new TutionClass($LESSON->class_id);
            $payment_date = date_create($row['date']);


            $out_put .= '<tr>       
                                        <td>
                                            ' . $key++ . ' 
                                        </td>
                                         
                                        <td>
                                            <a href="#">' . $STUDENT->student_id . '</a>
                                        </td> 
                                        <td><span class="invoice-amount">' . $TUTION_CLASS->subject_name . '</span></td>
                                        
                                      
       <td> ';

            $out_put .= ' ' . date_format($payment_date, "y/m/d") . ' - ' . $row['time'] . '
                                         
                                         </td>
                                          <td ><span class="text-danger"><b>' . number_format($row['amount'], 0) . ' </td>';
            if ($row['payment_status_code'] == 0) {
                $out_put .= '   <td><span class="badge badge-light-warning badge-pill">PENDING..!</span></td>';
            } else if ($row['payment_status_code'] == 1) {
                $out_put .= '<td><span class="badge badge-light-success badge-pill">PAID..!</span></td>';
            }


            $out_put .= '    
                                <td>
                                   <div class="dropdown">
                                                <span class="bx bx-dots-vertical-rounded font-medium-3 dropdown-toggle nav-hide-arrow cursor-pointer"
                                                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="menu"></span>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" target="_blank" href="edit-hotel-booking.php?id=' . $row['id'] . '"><i class="bx bx-calendar mr-1"></i> Manage Booking</a>
                                                   <a class="dropdown-item" target="_blank" href="#"><i class="bx bx-trash mr-1"></i> delete Booking</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> 
                                    ';
        }



        if (!empty($out_put)) {
            echo $out_put;
        } else {
            echo $out_put = ''
                . '<td></td><td style = "color: red;font-weight: 600;width: 155px;">No Payment..!</td>';
        }
    }

    public function updatePaymentStatusCodeAndStatus()
    {

        $query = "UPDATE  `payment` SET "
            . "`paymentStatusCode` ='" . $this->paymentStatusCode . "', "
            . "`date` ='" . $this->date . "', "
            . "`number_of_date` ='" . $this->number_of_date . "', "
            . "`student_id` ='" . $this->student_id . "', "
            . "`class_id` ='" . $this->class_id . "', "
            . "`status` ='" . $this->status . "' "
            . " WHERE `id` = '" . $this->id . "'  ";

        $db = new Database();
        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function delete()
    {



        $this->deletePhotos();



        unlink(Helper::getSitePath() . "upload/payment/" . $this->image_name);



        $query = 'DELETE FROM `payment` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }

    public function deletePhotos()
    {



        $OFFER_PHOTOS = new OfferPhoto(NULL);



        $allPhotos = $OFFER_PHOTOS->getOfferPhotosById($this->id);



        foreach ($allPhotos as $photo) {



            $IMG = $OFFER_PHOTOS->image_name = $photo["image_name"];

            unlink(Helper::getSitePath() . "upload/payment/gallery/" . $IMG);

            unlink(Helper::getSitePath() . "upload/payment/gallery/thumb/" . $IMG);



            $OFFER_PHOTOS->id = $photo["id"];

            $OFFER_PHOTOS->delete();
        }
    }

    public function arrange($key, $img)
    {

        $query = "UPDATE `payment` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";

        $db = new Database();

        $result = $db->readQuery($query);

        return $result;
    }
}
