<?php session_start(); 
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
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <?php include "template/sideNav.php" ?>
    <div class="row">
        <div class="column">
            <div class="card">..</div>
        </div>
        <div class="column">
            <div class="card">..</div>
        </div>
        <div class="column">
            <div class="card">..</div>
        </div>
        <div class="column">
            <div class="card">..</div>
    </div>
</div>
</body>
</html>