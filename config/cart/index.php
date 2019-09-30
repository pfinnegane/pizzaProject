<?php
session_start();
if($_SESSION['cart'] = null){
    $_SESSION['cart'] = array();
} else {
    array_push($_SESSION['cart'], $_POST['item']);
    $_SESSION['itemAdded'] = true;
    header("Location: \menu/");
}

