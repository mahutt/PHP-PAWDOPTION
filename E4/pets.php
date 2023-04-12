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

// NOTE: MUST MAKE IT POSSIBLE TO GIVE A PET AWAY WITH SPECIFIC AGE SELECTION!
function validPetAge($RANGE, $age) {
    if ($RANGE == "dc") {
        return true;
    }
    else if ($RANGE == "<5") {
        return ($age < 5);
    }
    else if ($RANGE == "5-10") {
        return ($age > 5 && $age < 10);
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
    $pets = file("db/availablepets.txt");
    foreach ($pets as $pet) {
        $petArr = explode(":", $pet);
        if (validPet($petArr)) {
            printPetBubble($petArr);
        }
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
            <!-- <div class="pet-bubble">
                <div class="pet-img"><img src="img/pets/bert.jpg" alt=" "></div>
                <div class="pet-info">
                    <h1>Bert</h1>
                    <ul>
                        <li>labrador retriever</li>
                        <li>Age 6</li>
                        <li>Male</li>
                        <li>Gets along with dogs</li>
                        <li>Gets along with children</li>
                    </ul>
                </div>
                <div class="pet-description">
                    <p>
                        "Bert has been a joy to raise. It's rather unfortunate that I must move away 
                        to Britain for work, since Bert really isn't all that fond of the Europeen experience.
                        He's a beautiful soul, inside and out!"
                    </p>
                    <div class="interested-button-wrapper">
                        <button class="interested-button">Interested</button>
                    </div>
                </div>
            </div>
            <div class="pet-bubble">
                <div class="pet-img"><img src="img/pets/Jessica.jpg" alt=""></div> 
                <div class="pet-info">
                    <h1>Jessica</h1>
                    <ul>
                        <li>Persian</li>
                        <li>Age 12</li>
                        <li>Female</li>
                        <li>Gets along with cats</li>
                    </ul>
                </div>
                <div class="pet-description">
                    <p>
                        "Jessica loves belly rubs, cat nip, and late night walks. She sleeps after a bowl
                        of warm milk. Big dogs scare her, but she is capable of getting along with smaller dogs.
                        Jessica needs her ears cleaned once a week due to a chronic ear infection."
                    </p>
                    <div class="interested-button-wrapper">
                        <button class="interested-button">Interested</button>
                    </div>
                </div>
            </div>
            <div class="pet-bubble">
                <div class="pet-img"><img src="img/pets/jerry.jpg" alt=""></div> 
                <div class="pet-info">
                    <h1>Jerry</h1>
                    <ul>
                        <li>British Shorthair</li>
                        <li>Age 9</li>
                        <li>Male</li>
                        <li>Gets along with cats</li>
                        <li>Gets along with dogs</li>
                        <li>Gets along with children</li>
                    </ul>
                </div>
                <div class="pet-description">
                    <p>
                        "Little Jerry belonged to my mother, who deeply loved her dog. Her passing
                        means that someone else will have the privelege to love and care for Jerry."
                    </p>
                    <div class="interested-button-wrapper">
                        <button class="interested-button">Interested</button>
                    </div>
                </div>
            </div> -->
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