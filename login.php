<!DOCTYPE html>
<html lang="en-us">
<head>
  <?php include "template/header.php" ?>
  <title>Qwikrepair - Login</title>
  <link type="text/css" rel="stylesheet" href="css/navbar.css">
  <link type="text/css" rel="stylesheet" href="css/footer.css">
  <style>
    h1{
        text-align: center;
        margin-top: 50px;
    }
    div{
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }
    form{
        width: 60vw;
        margin: auto;
    }
    </style>
    </head>
    <body>
        <h1>Login</h1>
        <form onsubmit="return false;">
            <div><label>Email</label><input type="email" name="email"></div>
            <div><label for="">Password</label><input type="password" name="pwd"></div>
            <div><input type="hidden" name="request-type" value="login"></div>
            <div><input type="submit" value="Login"></div>
        </form>
    </body>
