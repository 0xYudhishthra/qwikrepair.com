<?php session_start(); 
    if (isset($_SESSION['email']) && $_SESSION['role'] !== 'technician')
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
    <link type="text/css" rel="stylesheet" href="css/technicianAppointments.css">
    <script type="text/javascript" src="js/technicianAppointments.js" defer></script>
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/technicianSideNav.php" ?>
        <div class="content-wrapper">
            <div id="noAppo" class="font-title appo-no">No Appointment Found :(</div>
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