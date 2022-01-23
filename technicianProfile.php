<?php session_start(); 
    if (isset($_SESSION['email']) && $_SESSION['role'] !== 'technician')
        header("Location: index.php");
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
    <link type="text/css" rel="stylesheet" href="css/technicianProfile.css">
    <script src="js/technicianProfile.js" defer></script>
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/technicianSideNav.php" ?>
        <div class="content-wrapper">
            <table class="profile-table" id="profile-table">
                <tr>
                    <th class="t-pic">Profile Picture</th>
                    <td class="pic"><img id="profilePicture" src="src/profile.svg"></td> 
                </tr>
                <tr>
                    <th class="t-name">Profile Name</th>
                    <td id="fullName" class="name"></td> 
                </tr>
                <tr>
                    <th class="t-email">Email Address</th>
                    <td id="emailAddress" class="email"></td> 
                </tr>
                <tr>
                    <th class="t-dob">Date of Birth</th>
                    <td id="dob" class="dob"></td> 
                </tr>
                <tr>
                    <th class="t-phone">Contact Number</th>
                    <td id="phoneNumber" class="phone">12 345 6789</td> 
                </tr>
                <tr>
                    <th class="t-address">Address</th>
                    <td id="homeAddress" class="homeAddress">Address awdawdmjpoawmpo powdmpoawmdpomwp wpodmpoawdmpawmdpaw podmawpodmaw</td> 
                </tr>
                <tr>
                    <th></th>
                    <td class="edit"><div class="btn btn-blue edit-btn">Edit</div></td>
                </tr>   
            </table>
            <div class="profile-edit" id="profile-edit">
                <form class="form">
                    <label class="pic font-medium">Profile Picture</label>
                    <input id="pic" type="file" accept="image/*" class="pic-input">
                    <label class="name font-medium">Profile Name</label>
                    <div>
                        <input id="fname" type="text" class="fname-input" placeholder="First Name">
                        <input id="lname" type="text" class="lname-input" placeholder="Last Name">
                    </div>    
                    <label class="email font-medium">Email Address</label>
                    <input id="email" type="text" class="email-input" placeholder="example@mail.com">
                    <label class="dob font-medium">Date of Birth</label>
                    <input id="dob" type="date" class="dob-input">
                    <label class="number font-medium">Contact Number</label>
                    <input id="number" type="text" class="number-input" placeholder="12 345 6789">
                    <label class="address font-medium">Address</label>
                    <input id="street" type="text" class="street-address-input" placeholder="Street">
                    <div>
                        <input id="postal" type="text" class="postal-address-input" placeholder="Postal Code">
                        <input id="city" type="text" class="city-address-input" placeholder="City">
                    </div> 
                    <input id="state" type="text" class="state-address-input" placeholder="State">
                    <div class="button">
                        <div class="btn btn-white cancel">Cancel</div>
                        <input type="submit" class="btn btn-blue submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>