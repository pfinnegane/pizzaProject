<?php

function dbConnect(){
    $conn = mysqli_connect("localhost","pfinn","Soldier101", "pizzastore");
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