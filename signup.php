<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <!-- <?php include "template/header.php" ?> -->
    <script src="js/signup.js" defer></script>
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
        <h1>Signup</h1>
        <form onsubmit="return false;">
            <div><label>First Name</label><input type="text" name="firstName"></div>
            <div><label>Last Name</label><input type="text" name="lastName"></div>
            <div><label>Phone Number</label><input type="tel" pattern="[0-9]{10}" name="pNumber" placeholder="E.g. 0112334567"></div>
            <div><label>Date of Birth</label><input type="date" name="dob"></div>
            <div><label>Street</label><input type="text" name="street"></div>
            <div><label>City</label><input type="text" name="city"></div>
            <div><label>State</label><input type="text" name="state"></div>
            <div><label>Postcode</label><input type="text" name="postcode" pattern="[0-9]{5}" placeholder="E.g. 45678"></div>
            <div><label>Email</label><input type="email" name="email"></div>
            <div><label for="">Password</label><input type="password" name="pwd"></div>
            <div><label for="">Repeat Password</label><input type="password" name="repeatPwd"></div>
            <div><label for="">Role</label>
                <select name="role">
                    <option value="senior">Senior</option>
                    <option value="technician">Technician</option>
                </select>
            </div>
            <div><input type="hidden" name="request-type" value="signup"></div>
            <div><input type="submit" value="Signup"></div>
        </form>
    </body>