<?php

// Declare parameters to connect to database
$host = "localhost:3306";
$database = "qwikrepairDB";
$user = "root";
$password = "";

//Establish connection to database
$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_errno) {
    http_response_code(400);
    header("Content-Type: text/plain");
  echo $conn -> connect_error;
  exit();
}

?> 