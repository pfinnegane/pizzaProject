<?php

function dbConnect(){
    define("HOST", "fdb20.awardspace.net");
    define("USERNAME", "3134052_pizzastore");
    define("PASSWORD", "Soldier101");
    define("DATABASE", "3134052_pizzastore");

    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    if(!$conn) die("Could not connect to database");
    return $conn;
}

function queryTable($table){
    $conn = dbConnect();
    if(!$conn) die("Could not connect to database");
    $query = "SELECT * FROM $table";
    $results = $conn->query($query);
    return $results;
}