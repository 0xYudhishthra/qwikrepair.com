<?php
// This file is used to handle CRUD requests on the Database.

header("Access-Control-Allow-Origin: http://localhost");
header("Access-Control-Allow-Credentials: true");

include_once "./dbConnection.php";
include_once "./errorHandler.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['request-type'] == 'signup')
    signup($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['request-type']))
    logout();

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['request-type'] == "login")
    login($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['request-type'] == 'getProfileDetails')
    getProfileDetails($conn);

// function updateProfileDetails($conn, $updateData) {
    // 



function signup($conn){
    // Get the data from the request
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repeatPwd = $_POST['repeatPwd'];
    $role = $_POST['role'];

    // Check if there are any empty fields
    if (empty($email) || empty($pwd) || empty($repeatPwd) || empty($role)){
        errorHandler(400, "Please fill in all fields.");
    }
    
    // Check if the passwords match
    if ($pwd != $repeatPwd){
        errorHandler(400, "Passwords do not match");
    }
    else {
        // Hash the password
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }
    
    //Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        errorHandler(400, "Invalid email address provided");
    }

    // Check if the email is already in use
    $sql = "SELECT * FROM user WHERE emailAddress = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        errorHandler(400, "Email address already in use");
    }
    
    // Insert the user into the user database
    $sql_userDB = "INSERT INTO user (role, emailAddress, password) 
            VALUES (?,?,?)";

    $stmt_userDB = $conn -> stmt_init();

    if (!$stmt_userDB -> prepare($sql_userDB)) {
        errorHandler(500, "Internal server error");
    } else {
        $stmt_userDB -> bind_param('sss', $role, $email, $pwd);
        $stmt_userDB -> execute();
    }
  
    if ($stmt_userDB -> affected_rows > 0){
        http_response_code(200);
        echo "Successfully registered";
    exit();
    }
    else {
        errorHandler(500, "Internal server error");
    }
}

function login($conn){
    // Get the data from the request
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    // Check if there are any empty fields
    if(empty($email) || empty($pwd)){
        errorHandler(400, "Please fill in all fields");
    }

    //Check if email address exists in the database
    $sql = "SELECT * FROM user WHERE emailAddress = '$email'";
    
    // Get value of password from database using email
    $sql = "SELECT password FROM user WHERE emailAddress = ?;";
    $stmt = $conn -> stmt_init();
    if (!$stmt -> prepare($sql)) {
        errorHandler(500, "Internal server error when preparing statement");
    } else {
        $stmt -> bind_param('s', $email);
        $stmt -> execute();
        $result = $stmt -> get_result();
    }
    if(mysqli_num_rows($result) == 0){
        errorHandler(400, "Email address not found");
    }
    else {
        $row = mysqli_fetch_assoc($result);
        $pwdHash = $row['password'];
    }

    // Check if the password is correct and redirect to the correct page based on the role
    $isPasswordValid = password_verify($pwd, $pwdHash);
    if ($isPasswordValid){
        $sql = "SELECT role FROM user WHERE emailAddress = '$email'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
        session_start();
        $_SESSION['email'] = $email;
        http_response_code(200);
        switch ($role) {
            case 'senior':
                echo "senior";
                break;
            case 'technician':
                echo "technician";
                break;
        }
    } else {
        errorHandler(400, "Incorrect password");
    }
}

function logout(){
    session_start();
    // if the user is logged in, log them out
    if (isset($_SESSION['email'])){
        unset($_SESSION['email']);
        session_destroy();
        errorHandler(200, "Successfully logged out");
    }
    else {
        errorHandler(400, "You are not logged in");
    }
}

function getProfileDetails($conn){
    //Get the email address from the session
    session_start();
    $email = $_SESSION['email'];
    
    // Get the user's details from the database and return them
    $sql = "SELECT * FROM user WHERE emailAddress = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        $phoneNumber = $row['phoneNumber'];
        $street = $row['street'];
        $city = $row['city'];
        $state = $row['state'];
        $postcode = $row['postcode'];
        $email = $row['emailAddress'];
        $dob = $row['DOB'];
        $profile = array(
            'role' => $role,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'phoneNumber' => $phoneNumber,
            'city' => $city,
            'state' => $state,
            'postcode' => $postcode,
            'email' => $email,
            'street'=> $street,
            'dob' => $dob
        );
        http_response_code(200);
        echo json_encode($profile);
    }
    else {
        errorHandler(500, "Internal server error");
    }

}

?>