<?php
session_start();
error_reporting(E_ALL, 1);
ini_set('display_errors', 1);
$_SESSION = array();
$_POST = array();
session_destroy();
Header("Location: \\");