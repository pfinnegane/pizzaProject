<?php

function db_connect(){
    define("HOST", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "Soldier101");
    define("DATABASE", "db");

    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    if(!$conn) die("Could not connect to database");
    return $conn;
}

function sanatize($conn, $item){
    return mysqli_real_escape_string($conn, stripslashes($item));
}


function queryTable($table){
    $conn = db_connect();
    if(!$conn) die("Could not connect to database");
    $query = "SELECT * FROM $table";
    $results = $conn->query($query);
    return $results;
}
function queryTableByUser($userID){
    $conn = db_connect();
    if(!$conn) die("Could not connect to database");
    $query = "SELECT * FROM orders WHERE userID=$userID";
    $results = $conn->query($query);
    return $results;
}
function queryUserInformation(){
    $_POST['username'];
}

?>
