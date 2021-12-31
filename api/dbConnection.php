<?php

// Declare parameters to connect to database
$host = "localhost:3306";
$database = "qwikrepairdb";
$user = "root";
$password = "";

//Establish connection to database
$conn = new mysqli($host, $user, $password, $database);

// Verify connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";

?> 