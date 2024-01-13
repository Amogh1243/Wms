<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    unset($_SESSION['Username']);
    unset($_SESSION['Role']);
    unset($_SESSION['isLoggedin']);
    header('Location: index.html');
exit();
?>