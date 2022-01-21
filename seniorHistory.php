<?php session_start(); 
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
        <h1>Appointment History</h1><br>
        <table class="historyTable">
            <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
            </tr>
            <tr>
                <td>Alfreds Futterkiste</td>
                <td>Maria Anders</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>Centro comercial Moctezuma</td>
                <td>Francisco Chang</td>
                <td>Mexico</td>``
            </tr>
        </table>
    </div>
</body>
</html>