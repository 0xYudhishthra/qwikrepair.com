<?php
// This file is used to handle login, signup and register requests.

header("Access-Control-Allow-Origin: *");

include_once "./dbConnection.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['request-type'] == 'signup')
    signup($conn);

// if ($_SERVER['REQUEST_METHOD'] == "GET")
//     logout($conn);

// if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "login")
//     login($conn);

// function login($conn){}

// function logout($conn){}

function signup($conn){
    // Get the data from the request
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $pNumber = $_POST['pNumber'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $repeatPwd = $_POST['repeatPwd'];
    $role = $_POST['role'];
    $dob = $_POST['dob'];

    // Check if there are any empty fields
    if(empty($firstName) || empty($lastName) || empty($pNumber) || empty($street) || empty($city) || empty($state) || empty($postcode) || empty($email) || empty($pwd) || empty($repeatPwd) || empty($role) || empty($dob)){
        http_response_code(400);
        echo "Please fill in all fields";
        exit();
    }
    
    // Check if the passwords match
    if ($pwd != $repeatPwd){
        http_response_code(400);
        echo "Passwords do not match";
        exit();
    }
    else {
        // Hash the password
        $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    }
    
    // Check if the email is already in use
    $sql = "SELECT * FROM $role WHERE emailAddress = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        http_response_code(400);
        echo "Email already in use";
        exit();
    }

    // Generate random seniorID/technicianID
    $userID = uniqid(5);

    //Create username from email address
    $loginUsername=strstr($email,'@',true);
    
    // Insert the user into the appropriate user database
    $sql_userDB = "INSERT INTO $role (seniorID, street, city, state, postcode, phoneNumber, emailAddress, DOB, firstName, lastName) 
            VALUES (?,?,?,?,?,?,?,?,?,?)";
    //Determine user role to know which table to insert into
    if ($role == "senior"){
        $sql_loginDetailsDB = "INSERT INTO login_details (loginUsername, password, seniorID) VALUES (?,?,?)";
    } else {
        $sql_loginDetailsDB = "INSERT INTO login_details (loginUsername, password, technicianID) VALUES (?,?,?)";
    }
    $stmt_userDB = $conn -> stmt_init();
    $stmt_loginDetailsDB = $conn -> stmt_init();

    if (!($stmt_userDB -> prepare($sql_userDB) && $stmt_loginDetailsDB -> prepare($sql_loginDetailsDB))) {
        http_response_code(400);
        echo "Error: " . $sql . "<br>" . $conn->error;
        exit();
    } else {
        $stmt_userDB -> bind_param('ssssssssss', $userID, $street, $city, $state, $postcode, $pNumber, $email, $dob, $firstName, $lastName);
        $stmt_userDB -> execute();
        $stmt_loginDetailsDB -> bind_param('ssi', $loginUsername, $pwd, $userID);
        $stmt_loginDetailsDB -> execute();
    }
  

    if ($stmt_userDB -> affected_rows > 0 && $stmt_loginDetailsDB -> affected_rows > 0){
        http_response_code(200);
        echo "Successfully registered";
    exit();
    }
    else {
        http_response_code(400);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>