<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Signup</title>
        <script src="./eventListener.js"></script>
        <?php include "template/header.php" ?>
    </head>
    <body>
        <h1>Signup</h1>
        <form>
            <label for="Email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password">
            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
            <label for="role">Role</label>
            <select id="role" name="role">
                <option value="Senior">Senior</option>
                <option value="Technician">Technician</option>
            </select>
            <input type="hidden" name="request-type" value="Signup">
            <button type="submit">Signup</button>
        </form>
    </body>