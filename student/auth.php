<?php

if (!isset($_SESSION)) {
    session_start();
}

$STUDENT = new Student(NULL);
if (!$STUDENT->authenticate()) {
    redirect('login.php');
}

if ($STUDENT->checkMobileNumberVerifried($_SESSION['id'])) {
    redirect('mobile-verify.php?id=' . $_SESSION['id']);
}
