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
    <?php include "template/sideNav.php" ?>
    <div class="container">
        <div class="profileBox">
            <img src="src/profile.svg" alt="profilePicture" class="profilePicture">
            <h1 id="fullName">Full Name</h1>
            <h1 id="role">Role</a>
            <h1 id="role">Role</a>
            <h1 id="emailAddress">Email Address</h1>
        </div>
    </div>
</body>
</html>