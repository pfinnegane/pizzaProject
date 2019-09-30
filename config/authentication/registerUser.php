<?php
session_start();
ini_set('display_errors', 'On');
require '../dbcm.php';

if(!isset($_POST['submit'])){
    Header("Location: \\");
} else {
    $conn = db_connect();
    $un = sanatize($conn, $_POST['username']);
    $pw = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = sanatize($conn, $_POST['email']);
    $userQuery = "SELECT * FROM users WHERE username=\"$un\" or email=\"$email\"";
    $results = $conn->query($userQuery);

    if($results->num_rows > 0){
        echo "A user with this username or email already exists.";
        $_SESSION['idTaken'] = true;
        Header("Location: \config/authentication/signUp.php");
    } else{
        $userInsert = "INSERT INTO users (username, password, email, user_type)
        VALUES ('$un', '$pw', '$email', 2);";
        $query = $conn->query($userInsert);
        if($query){
            $userQuery = "SELECT * FROM users WHERE username=\"$un\" or email=\"$email\"";
            $results = $conn->query($userQuery);
            $cr = mysqli_fetch_assoc($results);
            $_SESSION["userType"]=$cr['user_type'];
            echo $cr['user_type'];
            Header("Location: \\config/authentication/");
        } else {
            echo "User not created.";
            echo "Error: ".$userInsert."<br>".$conn->error;
        }
        
    }
}