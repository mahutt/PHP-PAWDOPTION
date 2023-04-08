<!DOCTYPE html>

<html lang="en">

<head>
    <title>Pawdoption | Find A Pet</title>
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
                Find a cat or dog
            </h1>
            <p>
                Fill out the form below and we'll get straight to work, selecting
                a pet that would fit best with you! 
                <br>Your new best friend is just a few
                clicks away.
            </p>
            <form class="bubble" id="catform" name="catform" onsubmit="return validateCatForm()">
                <h2><u>Cat Person Form</u></h2>
                <label class="prompt">Preferred Gender</label>
                <br>
                <label><input type="radio" name="animalGender" value="female">Female</label>
                <label><input type="radio" name="animalGender" value="male">Male</label>
                <label><input type="radio" name="animalGender" value="dontCare">Doesn't Matter</label>
                <br><br>
                <label for="catBreed" class="prompt">Preffered Breed</label>
                <br>
                <select name="catBreed" id="catBreed">
                    <option disabled selected value>-- select an option --</option>
                    <option value="britishShorthair">British Shorthair</option>
                    <option value="persian">Persian</option>
                    <option value="maineCoon">Maine Coon</option>
                    <option value="americanShorthair">American Shorthair</option>
                    <option value="scottishFold">Scottish Fold</option>
                    <option value="sphynx">Sphynx</option>
                    <option value="mixed">Mixed Breed</option>
                    <option value="else">Else</option>
                    <option value="dontCare">Doesn't Matter</option>
                </select><br><br>
                <label for="catAge" class="prompt">Preffered Age</label><br>
                <select name="catAge" id="catAge">
                    <option disabled selected value>-- select an option --</option>
                    <option value="lessThan1">Less than 1 year</option>
                    <option value="1to4">Between 1 and 4 years</option>
                    <option value="4to8">Between 4 and 8 years</option>
                    <option value="moreThan8">More than 8 years</option>
                    <option value="dontCare">Doesn't Matter</option>
                </select><br><br>
                <label class="prompt">Select any of the following:</label><br>
                <label><input type="checkbox" name="behaviour" value="catCompatible">Must get along with cats</label><br>
                <label><input type="checkbox" name="behaviour" value="dogCompatible">Must get along with dogs</label><br>
                <label><input type="checkbox" name="behaviour" value="childCompatible">Must get along with small children</label>
                <br><br>
                <input type="submit">
                <input type="reset">
            </form>
            <form class="bubble" id="dogform" name="dogform" onsubmit="return validateDogForm()">
                <h2><u>Dog Person Form</u></h2>
                <label class="prompt">Preferred Gender</label>
                <br>
                <label><input type="radio" name="animalGender" value="female">Female</label>
                <label><input type="radio" name="animalGender" value="male">Male</label>
                <label><input type="radio" name="animalGender" value="dontCare">Doesn't Matter</label>
                <br><br>
                <label for="dogBreed" class="prompt">Preffered Breed</label>
                <br>
                <select name="dogBreed" id="dogBreed">
                    <option disabled selected value>-- select an option --</option>
                    <option value="goldenRetriever">Golden Retriever</option>
                    <option value="labradorRetriever">Labrador Retriever</option>
                    <option value="frenchBulldog">French Bulldog</option>
                    <option value="beagle">Beagle</option>
                    <option value="poodle">Poodle</option>
                    <option value="mixed">Mixed Breed</option>
                    <option value="else">Else</option>
                    <option value="dontCare">Doesn't Matter</option>
                </select>
                <br><br>
                <label for="dogAge" class="prompt">Preffered Age</label><br>
                <select name="dogAge" id="dogAge">
                    <option disabled selected value>-- select an option --</option>
                    <option value="lessThan1">Less than 1 year</option>
                    <option value="1to4">Between 1 and 4 years</option>
                    <option value="4to8">Between 4 and 8 years</option>
                    <option value="moreThan8">More than 8 years</option>
                    <option value="dontCare">Doesn't Matter</option>
                </select>
                <br><br>
                <label class="prompt">Select any of the following:</label><br>
                <label><input type="checkbox" name="behaviour" value="catCompatible">Must get along with cats</label><br>
                <label><input type="checkbox" name="behaviour" value="dogCompatible">Must get along with dogs</label><br>
                <label><input type="checkbox" name="behaviour" value="childCompatible">Must get along with small children</label>
                <br><br>
                <input type="submit">
                <input type="reset">
            </form>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script src="script.js"></script>

</body>

</html>