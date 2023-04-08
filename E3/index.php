<html>

<body>
    <form action="" method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label for="phonenumber">Phone number:</label><br>
        <input type="text" name="phonenumber" id="phonenumber"><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        if (preg_match("/^\d{3}-\d{3}-\d{4}$/m", $_POST['phonenumber'])) {
            echo "Success: Valid Phone Number Format";
        }
        else {
            echo "Error: Invalid Phone Number Format";
        }
    }
    ?>

</body>

</html>