<?php session_start(); 
    if (isset($_SESSION['email']) && $_SESSION['role'] !== 'senior')
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
    <link type="text/css" rel="stylesheet" href="css/seniorProfile.css">
    <script src="js/seniorProfile.js" defer></script>
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/seniorSideNav.php" ?>
        <div class="content-wrapper">
            <!-- <table class="profile-table">
                <tr>
                    <th class="t-pic">Profile Picture</th>
                    <td class="pic"><img src="src/home.svg"></td> 
                </tr>
                <tr>
                    <th class="t-name">Profile Name</th>
                    <td class="name">Mary Jane</td> 
                </tr>
                <tr>
                    <th class="t-email">Email Address</th>
                    <td class="email">example@mail.com</td> 
                </tr>
                <tr>
                    <th class="t-dob">Date of Birth</th>
                    <td class="dob">32 Cucumber 1959</td> 
                </tr>
                <tr>
                    <th class="t-phone">Contact Number</th>
                    <td class="phone">12 345 6789</td> 
                </tr>
                <tr>
                    <th class="t-address">Address</th>
                    <td class="address">Address awdawdmjpoawmpo powdmpoawmdpomwp wpodmpoawdmpawmdpaw podmawpodmaw</td> 
                </tr>
                <tr>
                    <th></th>
                    <td class="edit"><div class="btn btn-blue edit-btn">Edit</div></td>
                </tr>   
            </table> -->
            <div class="profile-edit">
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