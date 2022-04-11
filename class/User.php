<?php

/** * Description of User * * 
 * @author sublime holdings * 
 * @web www.sublime.lk */
class User
{
    public $id;
    public $name;
    public $email;
    public $image_name;
    public $createdAt;
    public $isActive;
    public $authToken;
    public $lastLogin;
    public $username;
    public $sdk_key;
    public $sdk_secret;
    public $resetCode;
    public $subject;
    private $password;
    public function __construct($id)
    {
        if ($id) {
            $query = "SELECT `subject`,`sdk_secret`,`sdk_key`, `id`,`name`,`image_name`,`email`,`createdAt`,`isActive`,`authToken`,`lastLogin`,`username`,`resetcode` FROM `user` WHERE `id`=" . $id;
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));

            $this->subject = $result['subject'];

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->email = $result['email'];
            $this->image_name = $result['image_name'];
            $this->createdAt = $result['createdAt'];
            $this->isActive = $result['isActive'];
            $this->lastLogin = $result['lastLogin'];
            $this->username = $result['username'];
            $this->authToken = $result['authToken'];
            $this->sdk_secret = $result['sdk_secret'];
            $this->sdk_key = $result['sdk_key'];
            $this->resetCode = $result['resetcode'];

            return $result;
        }
    }
    public function create($name, $email, $username, $passwor)
    {
        $enPass = md5($passwor);
        date_default_timezone_set('Asia/Colombo');
        $createdAt = date('Y-m-d H:i:s');
        $query = "INSERT INTO `user` (name, email, createdAt, isActive, username, password) VALUES  ('" . $name . "', '" . $email . "', '" . $createdAt . "', '" . 1 . "', '" . $username . "', '" . $enPass . "')";
        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            $last_id = mysqli_insert_id();
            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }
    public function login($username, $password)
    {
        $enPass = md5($password);
        $query = "SELECT `id`,`name`,`email`,`createdAt`,`isActive`,`lastLogin`,`username` FROM `user` WHERE `username`= '" . $username . "' AND `password`= '" . $enPass . "'";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        if (!$result) {
            return FALSE;
        } else {
            $this->id = $result['id'];
            $this->setAuthToken($result['id']);
            $this->setLastLogin($this->id);
            $user = $this->__construct($this->id);
            $this->setUserSession($user);
            return $user;
        }
    }
    public function checkOldPass($id, $password)
    {
        $enPass = md5($password);
        $query = "SELECT `id` FROM `user` WHERE `id`= '" . $id . "' AND `password`= '" . $enPass . "'";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function changePassword($id, $password)
    {
        $enPass = md5($password);
        $query = "UPDATE  `user` SET "                . "`password` ='" . $enPass . "' "                . "WHERE `id` = '" . $id . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function authenticate()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $id = NULL;
        $authToken = NULL;
        if (isset($_SESSION["id"])) {
            $id = $_SESSION["id"];
        }
        if (isset($_SESSION["authToken"])) {
            $authToken = $_SESSION["authToken"];
        }
        $query = "SELECT `id` FROM `user` WHERE `id`= '" . $id . "' AND `authToken`= '" . $authToken . "'";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function logOut()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        unset($_SESSION["id"]);
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
        unset($_SESSION["isActive"]);
        unset($_SESSION["authToken"]);
        unset($_SESSION["lastLogin"]);
        unset($_SESSION["username"]);
        return TRUE;
    }
    public function update()
    {
        $query = "UPDATE  `user` SET "
            . "`subject` ='" . $this->subject . "', "
            . "`name` ='" . $this->name . "', "
            . "`username` ='" . $this->username . "', "
            . "`email` ='" . $this->email . "', "
            . "`sdk_key` ='" . $this->sdk_key . "', "
            . "`sdk_secret` ='" . $this->sdk_secret . "', "
            . "`subject` ='" . $this->subject . "', "
            . "`isActive` ='" . $this->isActive . "' "
            . "WHERE `id` = '" . $this->id . "'";

        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }
    private function setUserSession($user)
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION["id"] = $user['id'];
        $_SESSION["name"] = $user['name'];
        $_SESSION["email"] = $user['email'];
        $_SESSION["isActive"] = $user['isActive'];
        $_SESSION["authToken"] = $user['authToken'];
        $_SESSION["lastLogin"] = $user['lastLogin'];
        $_SESSION["username"] = $user['username'];
    }
    private function setAuthToken($id)
    {
        $authToken = md5(uniqid(rand(), true));
        $query = "UPDATE `user` SET `authToken` ='" . $authToken . "' WHERE `id`='" . $id . "'";
        $db = new Database();
        if ($db->readQuery($query)) {
            return $authToken;
        } else {
            return FALSE;
        }
    }
    private function setLastLogin($id)
    {
        date_default_timezone_set('Asia/Colombo');
        $now = date('Y-m-d H:i:s');
        $query = "UPDATE `user` SET `lastLogin` ='" . $now . "' WHERE `id`='" . $id . "'";
        $db = new Database();
        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function checkEmail($email)
    {
        $query = "SELECT `email`,`username` FROM `user` WHERE `email`= '" . $email . "'";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        if (!$result) {
            return FALSE;
        } else {
            return $result;
        }
    }
    public function GenarateCode($email)
    {
        $rand = rand(10000, 99999);
        $query = "UPDATE  `user` SET "                . "`resetcode` ='" . $rand . "' "                . "WHERE `email` = '" . $email . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function SelectForgetUser($email)
    {
        if ($email) {
            $query = "SELECT `email`,`username`,`resetcode` FROM `user` WHERE `email`= '" . $email . "'";
            $db = new Database();
            $result = mysqli_fetch_array($db->readQuery($query));
            $this->username = $result['username'];
            $this->email = $result['email'];
            $this->restCode = $result['resetcode'];
            return $result;
        }
    }
    public function SelectResetCode($code)
    {
        $query = "SELECT `id` FROM `user` WHERE `resetcode`= '" . $code . "'";
        $db = new Database();
        $result = mysqli_fetch_array($db->readQuery($query));
        if (!$result) {
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function updatePassword($password, $code)
    {
        $enPass = md5($password);
        $query = "UPDATE  `user` SET "                . "`password` ='" . $enPass . "' "                . "WHERE `resetcode` = '" . $code . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getUserBySubjectId($id)
    {

        $query = "SELECT `id` FROM `user` WHERE `subject`= '" . $id . "'";
        $db = new Database();
        $result = mysqli_fetch_assoc($db->readQuery($query));

        return $result['id'];
    }
}
