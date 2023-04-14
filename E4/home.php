<?php 
session_start();
// if (isset($_POST["submit"])) {
//     if ($_POST["submit"] == "logout") {
//         session_destroy();
//         header("location: home.php");
//         die();
//     }
//     else {
//         header("location: login.php");
//         die();
//     }
// }


            
            
?><!DOCTYPE html>

<html lang="en">

<head>
    <title>Pawdoption | Home</title>
    <link rel="stylesheet" href="general.css">
    <meta charset="UTF-8">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="main">
        <?php include 'menubox.php' ?>
        <div class="content">
            <?php 
            if (isset($_SESSION["logoutStatus"])) {
                echo "<h2 class=\"confirm\">".$_SESSION["logoutStatus"]."</h2>";
                unset($_SESSION["logoutStatus"]);
            }
            ?>
            <h1>Welcome</h1>
            <p>
                PAWDOPTION is a cat and dog adoption agency, devoted to finding new homes for pets in need.<br>
                If you're in search of a new companion, or you know an animal in need of a home, then you've come to the right place.
            </p>
            <p>
                Feel free to explore the site, or visite us at our on site location in Montreal, at 1234 Jerry Avenue, H1B 2J8.
            </p>
            <br>
            <h1>Explore:</h1>
            <div class="bubbles">
                <div class="explore">
                    <a href="finder.php">
                        <div class="bubble">
                            <h2>Have a home in need of a pet?</h2>
                            <img src="house.png" alt="Photo of a house">
                        </div>
                    </a>
                    <a href="give.php">
                        <div class="bubble">
                            <h2>Have a pet in need of a home?</h2>
                            <img src="cat&dog.png" alt="Photo of a cat and a dog">
                        </div>
                    </a>
                    <div class="vertical-explore">
                        <a href="catcare.php">
                            <div class="bubble">
                                <h2>Cat Care</h2>
                                <img src="yarn.png" alt="Photo of yarn">
                            </div>
                        </a>
                        <a href="dogcare.php">
                            <div class="bubble">
                                <h2>Dog Care</h2>
                                <img src="bones.png" alt="Photo of bones">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php' ?>

    <script src="script.js"></script>

</body>

</html>