<?php
session_start();
ini_set('display_errors', 1);
require $_SERVER['DOCUMENT_ROOT'].'/config/nav.php';
pageHead();

foreach($x as $_SESSION['cart'] => $value){
    echo $value;
}