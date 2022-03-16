<?php

/**

 * Description of User

 *

 * @author sublime holdings

 * @web www.sublime.lk

 * */
class Database {

//  private $host = 'localhost';
//  private $name = 'easyyedf_easytutor';
//  private $user = 'easyyedf_easytutor';
//  private $password = '.%L}=$eeL[OJ';
//  private $DB_CON = '';


    private $host = 'localhost';
    private $name = 'aswenna';
    private $user = 'root';
    private $password = '';
    private $DB_CON = '';

    public function __construct() {

        $this->DB_CON = mysqli_connect($this->host, $this->user, $this->password, $this->name);
 
    }

    public function readQuery($query) { 
        $result = mysqli_query($this->DB_CON,$query) or die(mysqli_error());

         return $result;
    }

}
