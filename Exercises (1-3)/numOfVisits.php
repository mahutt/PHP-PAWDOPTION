<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E2</title>
</head>
<body>
<?php
if (!isset($_COOKIE['visitCount'])) {
    echo "Welcome to my webpage! It is your first time that you are here.";
    setcookie("visitCount", "1", time() + 86400); // COOKIES EXPIRE AFTER 1 DAY
}
else {
    setcookie("visitCount", $_COOKIE['visitCount'] += 1, time() + 86400);
    echo "Hello, this is the ".$_COOKIE['visitCount']." time that you are visiting my webpage.<br>";
    echo "<b>Last time you visited my webpage on: ".$_COOKIE["timeOfPreviousVisit"]."</b>";
}
date_default_timezone_set("America/New_York");
setcookie("timeOfPreviousVisit", date('D M d H:i:s T Y'), time() + 86400);
?>
</body>
</html>