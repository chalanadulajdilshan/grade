<?php

/**
 * Description of Product
 *
 * 
 *  
 */
class VideoLessons
{

    public $id;
    public $title;
    public $subject_id;
    public $url;
    public $queue;

    public function __construct($id)
    {
        if ($id) {

            $query = "SELECT  * FROM `video_lessons` WHERE `id`=" . $id;

            $db = new Database();

            $result = mysqli_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->title = $result['title']; 
            $this->subject_id = $result['subject_id'];
            $this->url = $result['url'];
            $this->queue = $result['queue'];
        }
    }

    public function create()
    {



        $query = "INSERT INTO `video_lessons` (`title`,`subject_id`, `url`,`queue`) VALUES  ('"
            . $this->title . "', '"
            . $this->subject_id . "', '"
            . $this->url . "', '"
            . $this->queue . "')";

        $db = new Database();

        $result = $db->readQuery($query);

        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getVideoLessonsBySubjectId($subject_id)
    {

        $query = "SELECT  * FROM `video_lessons` WHERE `subject_id` = '" . $subject_id . "'";

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

        $query = "UPDATE  `video_lessons` SET "
            . "`title` ='" . $this->title . "',"
            . "`url` ='" . $this->url . "' "
            . "WHERE `id` = '" . $this->id . "'";

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

        $query = "SELECT * FROM `video_lessons` ORDER BY `queue` ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysqli_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img)
    {
        $query = "UPDATE `video_lessons` SET `queue` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

    public function delete()
    {

        $query = 'DELETE FROM `video_lessons` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }
}
