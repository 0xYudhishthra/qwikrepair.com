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
    <link type="text/css" rel="stylesheet" href="css/technicianListings.css">
    <script type="text/javascript" src="js/technicianListings.js" defer></script>
</head>
<body>
    <div class="overlay">
        <div class="overlay-content">
            <div class="confirm">
                <div class="font-large overlay-t">Confirmations</div>
                <div class="overlay-d">ywgdigwyiagwidfjepgrhjego;liaeshgegfefsheufheuhfeshfuhesfuhesfklhxd8ghwro4ig;js;lgs?</div>
                <div class="overlay-btn">
                    <div class="btn btn-white">No</div>
                    <div class="btn btn-blue">Yes</div>
                </div>
            </div>
        </div>
    </div>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/technicianSideNav.php" ?>
        <div class="content-wrapper">
            <div class="search-wrapper">
                <form class="search-bar" id="searchBox">
                    <input type="text" id="searchText" name="searchText" placeholder="Search" class="search-text" id="searchText" onfocus="searchFocus()" onfocusout="searchOutFocus()" placeholder="Search"><br>
                    <input type="submit" value="Submit" class="btn btn-blue search-btn">
                </form>
                <div class="btn btn-blue list-add">Add Listing</div>
            </div>
            <div id="cardWrapper" class="card-wrapper">
                <!-- <div class="card">
                    <img class="card-pic" src="${cardPic}">
                    <div class="card-service-name font font-medium">${serviceName}</div>
                    <div class="card-desc font font-small">${serviceDescription}</div>
                    <div class="btn btn-blue card-delete" href=${redirectUrl}>Delete</div>
                </div> -->
            </div>
        </div>
    </div>
</body>
</html>