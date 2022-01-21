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
        <?php include "template/sideNav.php" ?>
        <div class="content-wrapper">
            
        </div>
    </div>
</body>
</html>