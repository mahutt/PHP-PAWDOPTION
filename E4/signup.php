<!DOCTYPE html>

<html lang="en">

<head>
    <title>Pawdoption | Adoption Form</title>
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
            <p>
                To benefit from PAWDOPTION's services, create a new account using the form below.
            </p>
            <!-- <form class="bubbles" name="signupform" id="signupform" onsubmit="return validateSignupForm()">
                <div class="bubble">
                    <h2><u>Sign Up:</u></h2>
                    <label for="username" class="prompt">Username</label>
                    <br>
                    <input type="text" id="username" name="username">
                    <p>*Usernames can contain letters and digits only.</p>
                    <br><br>
                    <label for="password" class="prompt">Password</label>
                    <br>
                    <input type="text" id="password" name="password">
                    <p>
                        *Passwords may contain numbers and digits only. A password must be
                        4 characters long, and must have atleast 1 letter and atleast 1 digit.
                    </p>
                    <br>
                    <input type="submit">
                    <input type="reset">
                </div>
            </form> -->
            <form class="bubbles" name="signupform" id="signupform" onsubmit="return validateSignupForm()">
                <div class="bubble">
                    <h2><u>Sign Up:</u></h2>
                    <label for="username">Username:</label>
                    <br>
                    <input type="text" id="username" name="username">
                    <br><br>
                    <label for="password">Password:</label>
                    <br>
                    <input type="text" id="password" name="password">
                    <br><br>
                    <input type="submit">
                    <input type="reset">
                </div>
            </form>
        </div>
    </div>
    
    <?php include 'footer.php' ?>

    <script src="script.js"></script>

</body>

</html>