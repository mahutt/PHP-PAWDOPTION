<?php 
session_start();
$signupStatus = "";

function isUnique($NewUsername) {
    $users = file("db/login.txt");
    foreach ($users as $user) {
        $ExistingUsername = substr($user, 0, strpos($user, ":"));
        if ($NewUsername == $ExistingUsername) {
            return false;
        }
    }
    return true;
}

if (isset($_POST["submit"])) {
    if (isUnique($_POST["username"])) {
        $users = fopen("db/login.txt", "a");
        fwrite($users, "\n".$_POST["username"].":".$_POST["password"]);
        fclose($users);
        $signupStatus = "Account succesfully created. Feel free to login."; 
    }
    else {
        $signupStatus = "Error: A user with that name already exists. Please try again."; 
    }
}

?><!DOCTYPE html>

<html lang="en">

<head>
    <title>Pawdoption | New Account</title>
    <link rel="stylesheet" href="general.css">
    <meta charset="UTF-8">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="main">
        <?php include 'menubox.php' ?>
        <div class="content">
            <h1>
                Create an Account
            </h1>
            <?php
                if ($signupStatus == "") {
                    echo "<br>";
                }
                else {
                    echo "<h2 class=\"confirm\">$signupStatus</h2>";
                }
            ?>
            <p>
                To benefit from PAWDOPTION's services, create a new account using the form below.
            </p>
            <form action="signup.php" method="POST" class="bubbles" name="signupform" id="signupform" onsubmit="return validateCredentials('signupform')">
                <div class="bubble">
                    <h2><u>Sign Up:</u></h2>
                    <label for="username">Username:</label>
                    <br>
                    <input type="text" id="username" name="username">
                    <p>*Usernames can contain letters and digits only.</p>
                    <br><br>
                    <label for="password">Password:</label>
                    <br>
                    <input type="text" id="password" name="password">
                    <p>
                        *Passwords may contain numbers and digits only. A password must be
                        4 characters long, and must have atleast 1 letter and atleast 1 digit.
                    </p>
                    <br>
                    <input type="submit" name="submit">
                    <input type="reset">
                </div>
            </form>
        </div>
    </div>
    <?php include 'footer.php' ?>
    <script src="script.js"></script>
</body>
</html>