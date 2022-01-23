<?php session_start(); 
    if (isset($_SESSION['email']) && $_SESSION['role'] !== 'technician')
        header("Location: index.php");
    if (!isset($_SESSION['email']))
        header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>History</title>
    <?php include "template/header.php" ?>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
    <link type="text/css" rel="stylesheet" href="css/navbarUser.css">
    <link type="text/css" rel="stylesheet" href="css/sideNav.css">
    <link type="text/css" rel="stylesheet" href="css/technicianFeedbacks.css">
    <script src="js/seniorHistory.js" defer></script>
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/technicianSideNav.php"?>
        <div class="content-wrapper">
            <div class="card-wrapper">
                <div class="card">
                    <div class="user">
                        <img src="src/home.svg">
                        <div>
                            <div class="font-large name">John</div>
                            <div class="font-medium service-name">Plumbing</div>
                        </div>
                    </div>
                    <div id="reviewStar" class="review-star">
                        <div class="star"><img src="src/star-empty.svg"></div>
                        <div class="star"><img src="src/star-empty.svg"></div>
                        <div class="star"><img src="src/star-empty.svg"></div>
                        <div class="star"><img src="src/star-empty.svg"></div>
                        <div class="star"><img src="src/star-empty.svg"></div>
                    </div>
                    <div class="review-desc">Example example example example example.</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>