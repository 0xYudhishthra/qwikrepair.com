<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include "template/header.php" ?>
        <title>Qwikrepair - Signup</title>
        <link type="text/css" rel="stylesheet" href="css/navbar.css">
        <link type="text/css" rel="stylesheet" href="css/footer.css">
        <link type="text/css" rel="stylesheet" href="css/signup.css">
        <script src="js/signup.js" defer></script>
    </head>
    <body>
        <?php include "template/navbar.php" ?>
        <div class="content-wrapper">
            <div class="ask-login-wrapper">
                <a class="font font-text ask-login" href="login.php">Already own an account?</a>
            </div>
            <div class="font font-title title">Signup</div>
            <form class="form" onsubmit="return false;">
                <!-- <label>First Name</label>
                <input type="text" name="firstName" placeholder="First Name">
                <label>Last Name</label>
                <input type="text" name="lastName" placeholder="Last Name">
                <label>Phone Number</label>
                <input type="tel" pattern="[0-9]{10}" name="pNumber" placeholder="E.g. 0112334567">
                <label>Date of Birth</label>
                <input type="date" name="dob" placeholder="Date Of Birth">
                <label>Street</label>
                <input type="text" name="street" placeholder="Street">
                <label>City</label>
                <input type="text" name="city" placeholder="City">
                <label>State</label>
                <input type="text" name="state" placeholder="State">
                <label>Postcode</label>
                <input type="text" name="postcode" pattern="[0-9]{5}" placeholder="E.g. 45678"> -->
                <label class="font font-medium label">Email</label>
                <input class="input" type="email" name="email" placeholder="Email">
                <label class="font font-medium label">Password</label>
                <div>
                    <input id="password" class="input password-input" type="password" name="pwd" placeholder="Password">
                    <img id="password-hide" class="password-hide" src="src/eye-crossed.svg">
                </div>
                <label class="font font-medium label">Repeat Password</label>
                <div>
                    <input id="rptPassword" class="input password-input" type="password" name="repeatPwd" placeholder="Password">
                    <img id="rptPassword-hide" class="password-hide" src="src/eye-crossed.svg">
                </div>
                <label class="font font-medium label">Role</label>
                <select name="role">
                    <option value="senior">Senior</option>
                    <option value="technician">Technician</option>
                </select>
                <div><input type="hidden" name="request-type" value="signup"></div>
                <div><input class="btn btn-blue signup-btn" type="submit" value="Signup"></div>
            </form>
        </div>
        
        <?php include "template/footer.php" ?>
    </body>