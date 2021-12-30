// This file is used to handle login, signup and register requests.

<?php
include_once "./dbConnection.php";

if($_SERVER['REQUEST_METHOD'] == "POST")

if ($_SERVER['REQUEST_METHOD'] == "GET")
logout($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "login")
login($conn);

function login($conn){}

function logout($conn){}

function signup($conn){}


?>