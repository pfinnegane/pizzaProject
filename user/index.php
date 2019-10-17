<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/config/nav.php';
pageHead();
if($_SESSION['userType'] == 3) header("Location: \user/admin/");
else if($_SESSION['userType'] == 2) header("Location: \user/profile/");
?>
    <div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <form action="\config/authentication/" method="post">
            <div class="form-row">
                <h3>Sign in</h3>
            </div>
                <div class="form-row">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="username" minlength="3" id="username">
                </div>
                <div class="form-row">
                    <label for="password">Password</label>
                    <input class="form-control" type="password" name="password" min="8" id="password">
                </div>
                <div class="form-row text-center">
                    <input class="form-control button bg-primary text-white" type="submit" value="Login" id="submit">
                </div>
                <a href="../config/authentication/signUp.php">Sign up</a><br>
                <a href="../config/authentication/forgot.php">Forgot login</a>
        </form>
        
    </div>
</div>