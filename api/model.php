// This file is used to handle login, signup and register requests.
<?php
header("Access-Control-Allow-Origin: *");

include_once "./dbConnection.php";

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['request-type'] == 'signup')
    signup($conn);

if ($_SERVER['REQUEST_METHOD'] == "GET")
    logout($conn);

if ($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == "login")
    login($conn);

function login($conn){}

function logout($conn){}

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
        echo "Please fill in all fields.";
        return;
    }

    
    // Check if the passwords match
    if ($pwd != $repeatPwd)
        die("Passwords do not match");
    
    // Check if the email is already in use
    $sql = "SELECT * FROM $role WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
        die("Email already in use");

    // Hash the password 
    $pwd = password_hash($pwd, PASSWORD_DEFAULT);
    $repeatPwd = $pwd;

    // Insert the user into the database
    // Generate random seniorID/technicianID
    $userID = uniqid(5);

    $sql = "INSERT INTO senior (seniorID, street, city, state, postcode, phoneNumber, emailAddress, DOB, firstName, lastName) 
            VALUES ('$userID', '$street', '$city', '$state', '$postcode', '$pNumber', '$email', '$dob', '$firstName', '$lastName')";
    $stmt = $conn -> stmt_init();

    if (!$stmt -> prepare($sql)){
        http_response_code(400);
        echo "Something went wrong, try again later.";
        exit();
    }
    $stmt -> bind_param('ssssssssss', $userID, $street, $city, $state, $postcode, $pNumber, $email, $dob, $firstName, $lastName);
    $stmt -> execute();

    if ($stmt -> affected_rows == 0){
        http_response_code(400);
        echo "Something went wrong, try again later.";
        exit();
    }
    else {
        http_response_code(200);
        echo "Successfully registered";
    }
}

?>