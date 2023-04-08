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
            <h1>
                Have a pet to give away?
            </h1>
            <p>
                Below is a form to fill out if you plan on putting your pet up for adoption with us.
                <br>
                Please note that, should we accept to provide adoption services for your pet, the owner
                is responsible for bringing the animal to our on-site location.
            </p>
            <form class="bubbles" name="giveawayform" id="giveawayform" onsubmit="return validateGiveawayForm()">
                <div class="bubble">
                    <h2><u>Pet Information:</u></h2>
                    <label class="prompt">Animal Type</label>
                    <br>
                    <label><input type="radio" name="animalType" value="cat">Cat</label>
                    <label><input type="radio" name="animalType" value="dog">Dog</label>
                    <br><br>
                    <label for="animalBreed" class="prompt">Animal's Breed</label>
                    <br>
                    <select name="animalBreed" id="animalBreed">
                        <option disabled selected value>-- select an option --</option>
                        <option value="britishShorthair">British Shorthair</option>
                        <option value="persian">Persian</option>
                        <option value="maineCoon">Maine Coon</option>
                        <option value="americanShorthair">American Shorthair</option>
                        <option value="scottishFold">Scottish Fold</option>
                        <option value="sphynx">Sphynx</option>
                        <option value="goldenRetriever">Golden Retriever</option>
                        <option value="labradorRetriever">Labrador Retriever</option>
                        <option value="frenchBulldog">French Bulldog</option>
                        <option value="beagle">Beagle</option>
                        <option value="poodle">Poodle</option>
                        <option value="mixed">Mixed Breed</option>
                        <option value="else">Else</option>
                        <option value="unsure">Not Sure</option>
                    </select>
                    <br><br>
                    <label for="animalAge" class="prompt">Animal's Age</label><br>
                    <select name="animalAge" id="animalAge">
                        <option disabled selected value>-- select an option --</option>
                        <option value="lessThan1">Less than 1 year</option>
                        <option value="1to4">Between 1 and 4 years</option>
                        <option value="4to8">Between 4 and 8 years</option>
                        <option value="moreThan8">More than 8 years</option>
                        <option value="unsure">Not Sure</option>
                    </select>
                    <br><br>
                    <label class="prompt">Animal's Gender</label>
                    <br>
                    <label><input type="radio" name="animalGender" value="female">Female</label>
                    <label><input type="radio" name="animalGender" value="male">Male</label>
                    <br><br>
                    <label class="prompt">Select accurate descriptors:</label><br>
                    <label><input type="checkbox" name="behaviour" value="catCompatible">Gets along with cats</label><br>
                    <label><input type="checkbox" name="behaviour" value="dogCompatible">Gets along with dogs</label><br>
                    <label><input type="checkbox" name="behaviour" value="childCompatible">Suitable for families with small children</label>
                    <br><br>
                    <label for="petDescription">Tell Us More About Your Pet:</label>
                    <br>
                    <textarea id="petDescription" name="petDescription" rows="4" cols="50" placeholder="(brag about your pet here - required)"></textarea>
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