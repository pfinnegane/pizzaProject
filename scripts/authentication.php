<?php

require_once 'functions.php';

if(!isset($_POST) && !isset($_POST['un']) && !isset($_POST['pw'])){
    die("Post is not set");
} else {
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    $conn = dbConnect();
    $user_query = 
        "SELECT COUNT(1) FROM admin WHERE username=\"$un\"";
    $userExists = $conn->query($user_query); 
    if($userExists->num_rows > 0){
            echo "The user exists";
        } else {
            echo "The user does not exist.";
        }
    }