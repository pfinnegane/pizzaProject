<?php
session_start();
ini_set('session.cookie_lifetime', 60 * 60 * 24 * 365);

$_SESSION['userType'] = 0;

require_once $_SERVER['DOCUMENT_ROOT'].'/config/dbcm.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/config/nav.php';

if (isset($_SESSION) && isset($_SESSION['userType']) && $_SESSION['userType'] > 0 && $_POST['logout'] == true){
    $_POST = array();
    $_SESSION = array();
    session_destroy();
    Header("Location: \\");
}
if (isset($_SESSION) && isset($_SESSION['userType']) && $_SESSION['userType'] == 3) header("Location: \user/admin/");
else if(isset($_SESSION) && isset($_SESSION['userType']) && $_SESSION['userType'] == 2) header("Location: \user/profile");
else {
    $conn = db_connect();
    $un = mysqli_real_escape_string($conn, stripslashes($_POST['username']));
    $pw = $_POST['password'];

    $user_query = 
        "SELECT * FROM users WHERE username=\"$un\";";

    $user = $conn->query($user_query); 
    $cr = mysqli_fetch_assoc($user);
    if(!$user){
        $_POST['notValid'] = 1;
        echo $cr->error;
    } else if($user->num_rows > 0 && password_verify($pw, $cr['password'])){
        if($cr['user_type'] == 3){
            $_POST['password'] = null;
            $_SESSION['userType'] = $cr['user_type'];
            header("Location: \user/admin/");
        } else if($cr['user_type'] == 2){
            $_POST['password'] = null;
            $_SESSION['userType']=$cr['user_type'];
            header("Location: \user/profile/");
        } else{
            echo "Something went wrong";
        }
    } else {
        Header("Location: \user/");
    }
}
?>