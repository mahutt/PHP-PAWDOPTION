<?php
session_start();
$loginStatus = "";
if (isset($_POST["submit"])) {
    $users = file("db/login.txt");
    foreach ($users as $user) {
        $userData = explode(":", $user);
        if ($_POST["username"] == $userData[0]) {
            if ($_POST["password"] == trim($userData[1])) {
                $_SESSION["username"] = $_POST["username"];
                header("Location: give.php");
                die();
            }
            else {
                $loginStatus = "Error: Incorrect password.";
                break;
            }
        }
    }
    if ($loginStatus == "") {
        $loginStatus = "Error: Username not recognized.";
    }
}
?><!DOCTYPE html>

<html lang="en">

<head>
    <title>Pawdoption | Login</title>
    <link rel="stylesheet" href="general.css">
    <meta charset="UTF-8">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="main">
        <?php include 'menubox.php' ?>
        <div class="content">
            <h1>
                Login
            </h1>
            <p>
                Before putting a pet up for adoption, you must login to your account.<br>
                If you don't have an account, <a href="signup.php">click here</a>.
            </p>
            <form action="" method="POST" class="bubbles" name="loginform" id="loginform" onsubmit="return validateCredentials('loginform')">
                <div class="bubble">
                    <h2><u>Log in:</u></h2>
                    <label for="username">Username:</label>
                    <br>
                    <input type="text" id="username" name="username">
                    <br><br>
                    <label for="password">Password:</label>
                    <br>
                    <input type="text" id="password" name="password">
                    <br><br>
                    <?php
                        if ($loginStatus == "") {
                            echo "<br>";
                        }
                        else {
                            echo "$loginStatus <br>";
                        }
                    ?>
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