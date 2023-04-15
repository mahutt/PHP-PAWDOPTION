<?php
if (isset($_COOKIE["timeOfPreviousVisit"])) {
    $previousVisit = $_COOKIE["timeOfPreviousVisit"];
}
date_default_timezone_set("America/New_York");
setcookie("timeOfPreviousVisit", date('D M d H:i:s T Y'), time() + 86400);
if (!isset($_COOKIE['visitCount'])) {
    setcookie("visitCount", "1", time() + 86400); // COOKIES EXPIRE AFTER 1 DAY
    echo "Welcome to my webpage! It is your first time that you are here.";
}
else {
    setcookie("visitCount", $_COOKIE['visitCount'] += 1, time() + 86400);
    echo "Hello, this is the ".$_COOKIE['visitCount']." time that you are visiting my webpage.<br>";
    echo "<b>Last time you visited my webpage on: ".$previousVisit."</b>";
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>E2</title>
</head>
<body>
</body>
</html>