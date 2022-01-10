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