<?php session_start(); 
    if (!isset($_SESSION['email']))
        header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <?php include "template/header.php" ?>
    <link type="text/css" rel="stylesheet" href="css/navbar.css">
    <link type="text/css" rel="stylesheet" href="css/navbarUser.css">
    <link type="text/css" rel="stylesheet" href="css/sideNav.css">
    <link type="text/css" rel="stylesheet" href="css/seniorHomepage.css">
    <script type="text/javascript" src="js/seniorHomepage.js" defer></script>
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <div class="dashboard-wrapper">
        <?php include "template/sideNav.php" ?>
        <div class="content-wrapper">
            <div class="greet-wrapper">
                <div class="greet-hi font-title">Hello, <?php 
                    $username = implode(" ", array_slice(str_word_count($_SESSION['email'], 1), 0, -2));
                    echo "$username";?>!</div>
                <div class="greet-hope font-medium">hope you are having a good day!</div>
                <div id="greetDate" class="greet-date font-title">Hayday, 1 Cucumber</div>
            </div>
            <div class="card-wrapper appo-history">
                <div class="appo-history-title font-medium">Past Appointments</div>
                <div class="divider"></div>
                <div id="pastAppoCardWrap" class="appo-card-wrapper"></div>
            </div>
            <div class="sub-wrapper">
                <div class="card-wrapper instant-appo">
                    <div class="inst-title">QwikAppoint</div>
                    <div class="divider"></div>
                    <div id="instList" class="inst-list"></div>
                </div>
                <div class="card-wrapper appo-stat">
                    <div class="stat-title">Appointment Status</div>
                    <div class="divider"></div>
                    <div class="stat-ctn-wrapper">
                        <div class="stat-detail-wrapper">
                            <div class="detail-name">Service Name</div>
                            <div class="detail-date">32 Cucumber 1959</div>
                            <div class="detail-time">3.15pm</div>
                        </div>
                        <div class="stat-btn-wrap">
                            <div class="btn btn-white stat-cancel-appo">Cancel</div>
                            <div class="btn btn-blue stat-edit-appo">Edit</div>
                        </div>
                        <div class="stat-progress-wrapper">
                            <div class="stat-progress-bar">
                                <div class="stat-progress-fill"></div>
                            </div>
                            <div class="stat-progress-text">Text...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>