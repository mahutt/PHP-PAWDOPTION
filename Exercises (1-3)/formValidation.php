<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E3</title>
</head>
<body>
    <form action="" method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" name="fname" id="fname"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" name="lname" id="lname"><br>
        <label for="phonenumber">Phone number: (ddd-ddd-dddd)</label><br>
        <input type="text" name="phonenumber" id="phonenumber"><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (preg_match("/^\d{3}-\d{3}-\d{4}$/m", $_POST['phonenumber'])) {
            echo "<b>Success: Valid Phone Number Format</b>";
        }
        else {
            echo "<b>Error: Invalid Phone Number Format</b>";
        }
    }
    ?>
</body>
</html>