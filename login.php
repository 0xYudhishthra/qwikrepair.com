<!DOCTYPE html>
<html lang="en-us">
    <head>
        <?php include "template/header.php" ?>
        <title>Qwikrepair - Login</title>
        <link type="text/css" rel="stylesheet" href="css/navbar.css">
        <link type="text/css" rel="stylesheet" href="css/footer.css">
        <link type="text/css" rel="stylesheet" href="css/login.css">
        <script src="js/login.js" defer></script>
    </head>
    <body>
        <?php include "template/navbar.php" ?>
        <div class="content-wrapper">
            <div class="ask-signup-wrapper">
            <a class="font font-text ask-signup" href="signup.php">Don't have an account yet?</a>
            </div>
            <div class="font font-title title">Login</div>
            <form class="form" onsubmit="return false;">
                <div class="form-input">
                    <label class="font font-medium label">Email</label>
                    <input class="email-input" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-input">
                    <label class="font font-medium label">Password</label>
                    <input id="password" class="password-input" type="password" name="pwd" placeholder="Password">
                    <img id="password-hide" class="password-hide" src="src/eye-crossed.svg">
                </div>
                <div><input type="hidden" name="request-type" value="login"></div>
                <div><input class="btn btn-blue" type="submit" value="Login"></div>
            </form>
        </div>
        <?php include "template/footer.php" ?>
    </body>
</html>