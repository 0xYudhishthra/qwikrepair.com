<?php session_start(); 
    if (!isset($_SESSION['email']))
        header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
    <?php include "template/header.php" ?>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
    <link type="text/css" rel="stylesheet" href="css/navbarUser.css">
    <link type="text/css" rel="stylesheet" href="css/sideNav.css">
    <!-- <link type="text/css" rel="stylesheet" href="css/profile.css"> -->
    <script src="js/seniorProfile.js" defer></script>
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <?php include "template/sideNav.php" ?>
    <div class="wrapper">font-title
        <div class="left">
            <div class="font-medium" id="fullName">Name</div>
            <div class="font-medium" id="emailAddress">Email Address</div>
            <div class="font-medium" id="role">Role</div>
        </div>
        <div class="right">
            <div class="personalInfo">
                <div class="font-title">Personal Information</div>
                    <div class="personalInfo_data">
                        <div class="data">
                            <div class="font-medium" id="dob">Date of Birth</div>
                        </div>
                        <div class="data">
                            <div class="font-medium" id="phoneNumber">Phone Number</div>
                        </div>
                        <div class="data">
                            <div class="font-medium" id="street">Street</div>
                        </div>
                        <div class="data">
                            <div class="font-medium" id="city">City</div>
                        </div>
                        <div class="data">
                            <div class="font-medium" id="state">State</div>
                        </div>
                        <div class="data">
                            <div class="font-medium" id="postcode">Postcode</div>
                        </div>
            </div>
        </div> 
    </div>
</body>
</html>