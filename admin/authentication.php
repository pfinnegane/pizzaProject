<?php

require_once '../scripts/functions.php';

if(!isset($_POST) && !isset($_POST['un']) && !isset($_POST['pw'])){
    die("Post is not set");
} else {
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    $conn = dbConnect();

    $user_query = 
        "SELECT COUNT(1) FROM admin WHERE username=\"$un\" AND password=\"$pw\"";
    $userExists = $conn->query($user_query); 
    if($userExists->num_rows > 0){
            echo "The user exists";
            session_start();
            $_SESSION['admin']="admin";
            setcookie("userID", $un, time()+(86400*30), "/user/");
            $_POST = array();
            header("Location: adminMenu.php");
        } else {
            echo "The user does not exist.";
        }
    }