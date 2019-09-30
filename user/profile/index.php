<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/config/nav.php';
pageHead();
require $_SERVER['DOCUMENT_ROOT'].'/config/dbcm.php';

if(!isset($_SESSION) || $_SESSION['userType'] != 2) header('Location: \\user');

pageHeader();
    queryUserInformation()['name'];
pageFooter();