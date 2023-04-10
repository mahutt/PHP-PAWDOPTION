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
            <form action="pets.php" method="POST" class="bubble" id="catform" name="catform" onsubmit="return validateCatForm()">
                <h2><u>Cat Person Form</u></h2>
                <input type="hidden" name="species" value="cat">
                <label class="prompt">Preferred Gender</label>
                <br>
                <label><input type="radio" name="gender" value="female">Female</label>
                <label><input type="radio" name="gender" value="male">Male</label>
                <label><input type="radio" name="gender" value="dc">Doesn't Matter</label>
                <br><br>
                <label for="catBreed" class="prompt">Preffered Breed</label>
                <br>
                <select name="breed" id="catBreed">
                    <option disabled selected value>-- select an option --</option>
                    <option value="britishShorthair">British Shorthair</option>
                    <option value="persian">Persian</option>
                    <option value="maineCoon">Maine Coon</option>
                    <option value="americanShorthair">American Shorthair</option>
                    <option value="scottishFold">Scottish Fold</option>
                    <option value="sphynx">Sphynx</option>
                    <option value="mixed">Mixed Breed</option>
                    <option value="else">Else</option>
                    <option value="dc">Doesn't Matter</option>
                </select><br><br>
                <label for="catAge" class="prompt">Preffered Age</label><br>
                <select name="age" id="catAge">
                    <option disabled selected value>-- select an option --</option>
                    <option value="<5">Less than 5 years</option>
                    <option value="5-10">Between 5 and 10 years</option>
                    <option value=">10">Over 10 years</option>
                    <option value="dc">Doesn't Matter</option>
                </select><br><br>
                <label class="prompt">Select any of the following:</label><br>
                <label><input type="checkbox" name="catcompatible" value="cats">Must get along with cats</label><br>
                <label><input type="checkbox" name="dogcompatible" value="dogs">Must get along with dogs</label><br>
                <label><input type="checkbox" name="childcompatible" value="children">Must get along with small children</label>
                <br><br>
                <input type="submit" name="submit">
                <input type="reset">
            </form>
            <form action="pets.php" method="POST" class="bubble" id="dogform" name="dogform" onsubmit="return validateDogForm()">
                <h2><u>Dog Person Form</u></h2>
                <input type="hidden" name="species" value="dog">
                <label class="prompt">Preferred Gender</label>
                <br>
                <label><input type="radio" name="gender" value="female">Female</label>
                <label><input type="radio" name="gender" value="male">Male</label>
                <label><input type="radio" name="gender" value="dc">Doesn't Matter</label>
                <br><br>
                <label for="dogBreed" class="prompt">Preffered Breed</label>
                <br>
                <select name="breed" id="dogBreed">
                    <option disabled selected value>-- select an option --</option>
                    <option value="goldenRetriever">Golden Retriever</option>
                    <option value="labradorRetriever">Labrador Retriever</option>
                    <option value="frenchBulldog">French Bulldog</option>
                    <option value="beagle">Beagle</option>
                    <option value="poodle">Poodle</option>
                    <option value="mixed">Mixed Breed</option>
                    <option value="else">Else</option>
                    <option value="dc">Doesn't Matter</option>
                </select>
                <br><br>
                <label for="dogAge" class="prompt">Preffered Age</label><br>
                <select name="age" id="dogAge">
                    <option disabled selected value>-- select an option --</option>
                    <option value="<5">Less than 5 years</option>
                    <option value="5-10">Between 5 and 10 years</option>
                    <option value=">10">Over 10 years</option>
                    <option value="dc">Doesn't Matter</option>
                </select>
                <br><br>
                <label class="prompt">Select any of the following:</label><br>
                <label><input type="checkbox" name="catcompatible" value="cats">Must get along with cats</label><br>
                <label><input type="checkbox" name="dogcompatible" value="dogs">Must get along with dogs</label><br>
                <label><input type="checkbox" name="childcompatible" value="children">Must get along with small children</label>
                <br><br>
                <input type="submit" name="submit">
                <input type="reset">
            </form>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script src="script.js"></script>

</body>

</html>