<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class HomeWork {

    public $id;
    public $lesson_id;
    public $title;
    public $pdf_file;
    public $queue;

    public function __construct($id) {
        if ($id) {

            $query = "SELECT  * FROM `home_work` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->lesson_id = $result['lesson_id'];
            $this->title = $result['title'];
            $this->pdf_file = $result['pdf_file'];
            $this->queue = $result['queue'];
        }
    }

    public function create() {



        $query = "INSERT INTO `home_work` (`lesson_id`,`title`,`pdf_file`,`queue`) VALUES  ('"
                . $this->lesson_id . "', '"
                . $this->title . "', '"
                . $this->pdf_file . "', '"
                . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getHomeWorkByLessons($id) {

        $query = "SELECT  * FROM `home_work` WHERE `lesson_id` = '" . $id . "'";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $query = "UPDATE  `home_work` SET "
                . "`title` ='" . $this->title . "',"
                . "`pdf_file` ='" . $this->pdf_file . "'"
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

        $query = "SELECT * FROM `home_work` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `home_work` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete() {

        $query = 'DELETE FROM `home_work` WHERE id="' . $this->id . '"';



        $db = new Database();



        return $db->readQuery($query);
    }

    public function deletePhotos() {



        $PRODUCT_PHOTO = new ProductPhoto(NULL);



        $allPhotos = $PRODUCT_PHOTO->getProductPhotosById($this->id);



        foreach ($allPhotos as $photo) {



            $IMG = $PRODUCT_PHOTO->url = $photo["url"];

            unlink(Helper::getSitePath() . "./upload/home_work/gallery/" . $IMG);

            unlink(Helper::getSitePath() . "./upload/home_work/gallery/thumb/" . $IMG);



            $PRODUCT_PHOTO->id = $photo["id"];

            $PRODUCT_PHOTO->delete();
        }
    }

}
