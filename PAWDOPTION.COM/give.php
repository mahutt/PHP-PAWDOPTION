<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    die();
}
$submissionStatus = "";
if (isset($_POST["submit"])) {
    $pets = fopen("db/availablepets.txt", "a");
    fwrite($pets, "\n".getFormattedInfo());
    fclose($pets);
    $submissionStatus = $_POST["animalName"]." has been succesfully added to the directory.";
}

function getFormattedInfo() {
    $info = [];
    $info[] = count(file("db/availablepets.txt")) + 1;
    $info[] = $_SESSION["username"];
    $info[] = $_POST["animalName"];
    $info[] = $_POST["animalType"];
    $info[] = $_POST["animalGender"]; 
    $info[] = $_POST["animalAge"];
    $info[] = $_POST["animalBreed"];

    $compatible = [];
    if (isset($_POST["catcompatible"])) {$compatible[] = "cats";} 
    if (isset($_POST["dogcompatible"])) {$compatible[] = "dogs";}
    if (isset($_POST["childcompatible"])) {$compatible[] = "children";}

    $info[] = implode(",", $compatible);
    $info[] = ""; // WILL EVENTUALLY HOLD THE IMAGE LOCATION
    $info[] = $_POST["quote"];
    $info[] = $_POST["firstName"]." ".$_POST["familyName"];
    $info[] = $_POST["email"];

    return implode(":", $info);
} 
?><!DOCTYPE html>

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
                <?php echo $_SESSION["username"]; ?>, do you have a pet to give away?
            </h1>
            <?php
                if ($submissionStatus != "") {
                    echo "<h2 class=\"confirm\">$submissionStatus</h2>";
                }
            ?>
            <p>
                Below is a form to fill out if you plan on putting your pet up for adoption with us.
                <br>
                Please note that, should we accept to provide adoption services for your pet, the owner
                is responsible for bringing the animal to our on-site location.
            </p>
            <form action="" method="POST" class="bubbles" name="giveawayform" id="giveawayform" onsubmit="return validateGiveawayForm()">
                <div class="bubble">
                    <h2><u>Pet Information:</u></h2>
                    <label class="prompt">Animal Type</label>
                    <br>
                    <label><input type="radio" name="animalType" value="cat">Cat</label>
                    <label><input type="radio" name="animalType" value="dog">Dog</label>
                    <br><br>
                    <label for="animalName" class="prompt">Animal's Name:</label>
                    <br>
                    <input type="text" id="animalName" name="animalName">
                    <br><br>
                    <label for="animalAge" class="prompt">Animal's Age</label><br>
                    <input type="number" name="animalAge" id="animalAge" min="0">
                    <br><br>
                    <label for="animalBreed" class="prompt">Animal's Breed</label>
                    <br>
                    <select name="animalBreed" id="animalBreed">
                        <option disabled selected value>-- select an option --</option>
                        <option value="British Shorthair">British Shorthair</option>
                        <option value="Persian">Persian</option>
                        <option value="Maine Coon">Maine Coon</option>
                        <option value="American Shorthair">American Shorthair</option>
                        <option value="Scottish Fold">Scottish Fold</option>
                        <option value="Sphynx">Sphynx</option>
                        <option value="Golden Retriever">Golden Retriever</option>
                        <option value="Labrador Retriever">Labrador Retriever</option>
                        <option value="French Bulldog">French Bulldog</option>
                        <option value="Beagle">Beagle</option>
                        <option value="Poodle">Poodle</option>
                        <option value="Mixed">Mixed Breed</option>
                        <!-- <option value="else">Else</option> -->
                        <!-- <option value="unsure">Not Sure</option> -->
                    </select>
                    <br><br>
                    <label class="prompt">Animal's Gender</label>
                    <br>
                    <label><input type="radio" name="animalGender" value="Female">Female</label>
                    <label><input type="radio" name="animalGender" value="Male">Male</label>
                    <br><br>
                    <label class="prompt">Select accurate descriptors:</label><br>
                    <label><input type="checkbox" name="catcompatible" value="cats">Gets along with cats</label><br>
                    <label><input type="checkbox" name="dogcompatible" value="dogs">Gets along with dogs</label><br>
                    <label><input type="checkbox" name="childcompatible" value="children">Suitable for families with small children</label>
                    <br><br>
                    <label for="quote">Tell Us More About Your Pet:</label>
                    <br>
                    <textarea id="quote" name="quote" rows="4" cols="50" placeholder="(brag about your pet here - required)"></textarea>
                    <br><br>
                </div>
                <div class="bubble">
                    <h2><u>Current Owner's Information:</u></h2>
                    <label for="firstName">First Name:</label>
                    <br>
                    <input type="text" id="firstName" name="firstName">
                    <br><br>
                    <label for="familyName">Family Name:</label>
                    <br>
                    <input type="text" id="familyName" name="familyName">
                    <br><br>
                    <label for="email">Email:</label>
                    <br>
                    <input type="text" id="email" name="email">
                    <br><br>
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