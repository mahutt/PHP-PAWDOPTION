<?php 
session_start();
function validPet($pet) {
    $compatibility = array();
    return ($_POST["species"] == $pet[3]
        && ($_POST["gender"] == "dc" || $_POST["gender"] == $pet[4])
        && validPetAge($_POST["age"], $pet[5])
        && ($_POST["breed"] == "dc" || $_POST["breed"] == $pet[6])
        && validCompatibility(explode(",", $pet[7]))
    );
}

function validPetAge($RANGE, $age) {
    if ($RANGE == "dc") {
        return true;
    }
    else if ($RANGE == "<5") {
        return ($age < 5);
    }
    else if ($RANGE == "5-10") {
        return ($age >= 5 && $age <= 10);
    }
    else {
        return ($age > 10);
    }
}

function validCompatibility($petComp) {
    return ( (!isset($_POST["catcompatible"]) || in_array("cats", $petComp))
        && (!isset($_POST["dogcompatible"]) || in_array("dogs", $petComp))
        && (!isset($_POST["childcompatible"]) || in_array("children", $petComp)) );
}

function printPetBubble($petArr) {
    echo "<div class=\"pet-bubble\">
    <div class=\"pet-img\"><img src=\"$petArr[8]\" alt=\"(Image not available)\"></div> 
    <div class=\"pet-info\">
        <h1>$petArr[2]</h1>
        <p>($petArr[3])</p>
        <ul>
            <li>$petArr[6]</li>
            <li>Age $petArr[5]</li>
            <li>$petArr[4]</li>";

    foreach (explode(",", $petArr[7]) as $compatible) {
        echo "<li>Gets along with $compatible</li>";
    }    
    echo "</ul>
    </div>
    <div class=\"pet-description\">
        <p>
            \"$petArr[9]\" - $petArr[10]
        </p>
        <div class=\"email\">
            <p>Contact: $petArr[11]</p>
        </div>
        <div class=\"interested-button-wrapper\">
            <button class=\"interested-button\">Interested</button>
        </div>
    </div>
    </div>";
}

function displayValidPets() {
    $petsfound = false;
    $pets = file("db/availablepets.txt");
    foreach ($pets as $pet) {
        $petArr = explode(":", $pet);
        if (validPet($petArr)) {
            printPetBubble($petArr);
            $petsfound = true;
        }
    }
    if (!$petsfound) {
        echo "<h2 class=\"confirm\">No available pets match your criteria.</h2>";
    }
}

if (!isset($_POST["submit"])) {
    header("Location: finder.php");
    die();
}
?><!DOCTYPE html>

<html lang="en">

<head>
    <title>Pawdoption | Pets</title>
    <link rel="stylesheet" href="general.css">
    <meta charset="UTF-8">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="main">
        <?php include 'menubox.php' ?>
        <div class="content">
            <?php displayValidPets(); ?>
            <div class="pet-bubble">
                <p>
                    Images sources: 
                    <a href="https://pixabay.com/photos/puppy-pet-canine-dog-animal-lying-2785074/">Bert</a>
                    <a href="https://cf.ltkcdn.net/cats/kittens/images/std/326308-800x532-cat-eyes-different-color.jpg">Jessica</a>
                    <a href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSqGQ43x-kL5pMShioZFkvTZm7aGPKcWvkLmOnHwuwGm4KFnTFnHbo84p728sFQi6hUA8&usqp=CAU">Jerry</a>
                </p>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php' ?>
    <script src="script.js"></script>
</body>
</html>