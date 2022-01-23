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
    <script type="text/javascript" src="js/submitReview.js" defer></script>
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
            <div class="success">
                <div class="font-large overlay-t">Yay!</div>
                <div class="overlay-d">You have successfully place the booking!</div>
                <div class="overlay-btn">
                    <div class="btn btn-blue">Close</div>
                </div>
            </div>
            <div class="cancel">
                <div class="font-large overlay-t">Confirm Appointment Cacellation?</div>
                <div class="overlay-btn">
                    <div class="btn btn-blue">Close</div>
                </div>
            </div>
        </div>
    </div>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/seniorSideNav.php" ?>
        <div class="content-wrapper">
            <div id="search-wrapper" class="search-wrapper">
                <form class="search-bar" id="searchBox">
                    <input type="text" id="searchText" name="searchText" placeholder="Search" class="search-text" id="searchText" onfocus="searchFocus()" onfocusout="searchOutFocus()" placeholder="Search"><br>
                    <input type="submit" value="Submit" class="btn btn-blue search-btn">
                </form>
            </div>
            <div id="cardWrapper" class="card-wrapper"></div>
            <div id="book-card" class="book-card">
                <img src="src/home.svg">
                <div class="text-wrapper">
                    <div class="font-large service-name">Plumbing</div>
                    <div class="font-medium tech-name">Bob Steve</div>
                    <div class="font service-desc">I will try to repair ur backdoor.</div>
                    <form class="form">
                        <label class="font-medium date-l">Date</label>
                        <input type="date" class="date-input">
                        <label class="font-medium time-l">Time</label>
                        <input type="time" class="time-input">
                        <label class="font-medium location-l">Location</label>
                        <input type="text" class="location-input">
                        <div>
                            <div class="btn btn-white cancel">Cancel</div>
                            <input type="submit" class="btn btn-blue submit">
                        </div>
                    </form>
                </div>
            </div>
            <div id="status-card" class="status-card">
                <img src="src/home.svg">
                <div class="detail-wrapper">
                    <div class="font-large service-name">Plumbing</div>
                    <div class="font-medium tech-name">John</div>
                    <div class="appo-detail">
                        <div class="font-medium appo-header">Appointment Details</div>
                        <div class="appo-t">Date</div>
                        <div class="font-small appo-date">32 Cucumber 1959</div>
                        <div class="appo-t">Time</div>
                        <div class="font-small appo-time">3.15 pm</div>
                        <div class="appo-t">Address</div>
                        <div class="font-small appo-location">Street POS City State</div>
                        <div class="btn btn-blue cancel">Cancel</div>
                    </div>
                </div> 
                <div class="progress-wrapper">
                    <div class="step">
                        <div id="num-1" class="num">1</div>
                        <div class="progress-title">Appointment Created</div>
                        <div class="font-small progress-desc">Your appointment has been successfully created. Waiting for the technician's confirmation.</div>
                    </div>
                    <div class="step">
                        <div id="num-3" class="num">2</div>
                        <div class="progress-title">Appointment Confirmed</div>
                        <div class="font-small progress-desc">Your appointment has been accepted by the technician.</div>
                    </div>
                    <div class="step">
                        <div id="num-4" class="num">3</div>
                        <div class="progress-title">Appointment Completed</div>
                        <div class="font-small progress-desc">The appointment has been successfully completed by a technician.</div>
                    </div>
                </div>
            </div>
            <div id=review-card class="review-card">
                <img src="src/home.svg">
                <div class="detail-wrapper">
                    <div class="font-large service-name">Plumbing</div>
                    <div class="font-medium tech-name">John</div>
                    <div class="review-detail">
                        <div class="font-medium review-header">Review</div>
                        <form class="review-form" id="reviewForm">
                            <div id="reviewStar" class="review-star">
                                <div onclick="starHover(1)" class="star"><img src="src/star-empty.svg"></div>
                                <div onclick="starHover(2)" class="star"><img src="src/star-empty.svg"></div>
                                <div onclick="starHover(3)" class="star"><img src="src/star-empty.svg"></div>
                                <div onclick="starHover(4)" class="star"><img src="src/star-empty.svg"></div>
                                <div onclick="starHover(5)" class="star"><img src="src/star-empty.svg"></div>
                            </div>
                            <textarea id="reviewFeedback" class="review-desc" placeholder="Thanks for helping me, god bless you!"></textarea>
                            <input type="submit" class="btn btn-blue submit" id="submitReviewBtn">
                        </form>
                    </div>
                </div>
                <div class="progress-wrapper">
                    <div class="step">
                        <div id="num-1" class="num num-active">1</div>
                        <div class="progress-title">Appointment Created</div>
                        <div class="font-small progress-desc">Your appointment has been successfully created. Waiting for the technician's confirmation.</div>
                    </div>
                    <div class="step">
                        <div id="num-3" class="num num-active">2</div>
                        <div class="progress-title">Appointment Confirmed</div>
                        <div class="font-small progress-desc">Your appointment has been accepted by the technician.</div>
                    </div>
                    <div class="step">
                        <div id="num-4" class="num num-active">3</div>
                        <div class="progress-title">Appointment Completed</div>
                        <div class="font-small progress-desc">The appointment has been successfully completed by a technician.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>