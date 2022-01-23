<?php session_start(); 
    if (isset($_SESSION['email']) && $_SESSION['role'] !== 'senior')
        header("Location: index.php");
    if (!isset($_SESSION['email']))
        header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Appointments</title>
    <?php include "template/header.php" ?>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
    <link type="text/css" rel="stylesheet" href="css/navbarUser.css">
    <link type="text/css" rel="stylesheet" href="css/sideNav.css">
    <link type="text/css" rel="stylesheet" href="css/seniorAppointments.css">
    <script type="text/javascript" src="js/seniorAppointments.js" defer></script>
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/seniorSideNav.php" ?>
        <div class="content-wrapper">
            <div class="search-wrapper">
                <form class="search-bar" id="searchBox">
                    <input type="text" id="searchText" name="searchText" placeholder="Search" class="search-text" id="searchText" onfocus="searchFocus()" onfocusout="searchOutFocus()" placeholder="Search"><br>
                    <input type="submit" value="Submit" class="btn btn-blue search-btn">
                </form>
            </div>
            <div id="cardWrapper" class="card-wrapper">
                <!-- <div class="card">
                    <img class="card-pic" src="src/eye-crossed.svg">
                    <div class="card-service-name font font-medium">Service</div>
                    <div class="card-tech-name font">Name</div>
                    <div class="card-desc font font-small">Descriptions</div>
                    <div class="btn btn-blue card-btn">Book Now</div>
                </div> -->
            </div>
        </div>
    </div>
</body>
</html>