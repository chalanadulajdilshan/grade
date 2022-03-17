<?php

if (!isset($_SESSION)) {
    session_start();
}
$USER = new User(null);
if (!$USER->authenticate()) {
    redirect('login.php');
}

 