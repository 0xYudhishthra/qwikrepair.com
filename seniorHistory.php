<?php session_start(); 
    if (isset($_SESSION['email']) && $_SESSION['role'] !== 'senior')
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
    <link type="text/css" rel="stylesheet" href="css/seniorHistory.css">
</head>
<body>
    <?php include "template/navbarUser.php" ?>
    <div>
        <?php include "template/sideNav.php" ?>
        <div class="content-wrapper">
        <div class="font font-large title">Appointment History</div>
            <div class="table-wrapper">
                <table class="table">
                    <tr>
                        <th class="date-t">Date</th>
                        <th class="time-h">Time</th>
                        <th class="service-name-h">Service Name</th>
                        <th class="tech-name-h">Technician</th>
                        <th class="review-h">Review</th>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <!-- <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr>
                    <tr>
                        <td class="date-t">31/12/2021</td>
                        <td class="time-h">12.00 pm</td>
                        <td class="service-name-h">Plumbing</td>
                        <td class="tech-name-h">Mr. Elon</td>
                        <td class="review-h">stars</td>
                    </tr> -->
                </table>
                <div class="btn btn-blue load-more">Load More</div>
            </div>
        </div>
    </div>
</body>
</html>