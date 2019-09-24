<?php

session_start();
    $_SESSION=array();
    setcookie(session_name(), "", time()-86400*40,'/user/');
    session_destroy();
    header("Location: ../index.php");
?>