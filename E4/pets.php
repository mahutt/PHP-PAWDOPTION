<?php 
if (isset($_POST["submit"])) {
    $compatibility = array();
    if (isset($_POST["catcompatible"])) {$compatibility[] = $_POST["catcompatible"];}
    if (isset($_POST["dogcompatible"])) {$compatibility[] = $_POST["dogcompatible"];}
    if (isset($_POST["childcompatible"])) {$compatibility[] = $_POST["childcompatible"];}

    $petdata = [$_POST["species"], $_POST["gender"], $_POST["breed"], $_POST["age"], implode(",", $compatibility)];
    // foreach ($petdata as $val) {
    //     echo "$val ";
    // }

}

$pets = fopen("db/availablepets.txt", "r");
echo fgets($pets);
fclose($pets);




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
        <div class="menubox">
            <div class="menu">
                <a href="home.php">Home Page</a>
                <a href="pets.php">Browse Available Pets</a>
                <a href="finder.php">Find a dog/cat</a>
                <a href="dogcare.php">Dog Care</a>
                <a href="catcare.php">Cat Care</a>
                <a href="give.php">Have a pet to give Away</a>
                <a href="contact.php">Contact Us</a>
            </div>
        </div>
        <div class="content">
            <div class="pet-bubble">
                <div class="pet-img"><img src="img/pets/bert.jpg" alt=""></div>
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
                <div class="pet-img"><img src="img/pets/ed.jpg" alt=""></div> 
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
            </div>
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

