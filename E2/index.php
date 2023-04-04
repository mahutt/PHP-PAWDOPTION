<html>
<body>

<?php
$firstVisit = "Welcome to my webpage! It is your first time that you are here.";
if (!isset($_COOKIE['visitCounter'])) {
    echo "$firstVisit";
    setcookie("visitCounter", "1", time() + 86400);
}
else {
    $_COOKIE['visitCounter'] += 1;
    setcookie("visitCounter", $_COOKIE['visitCounter'], time() + 86400);
    echo "Hello, this is the ".$_COOKIE['visitCounter']." time that you are visiting my webpage.<br>";
    echo "Last time you visited my webpage on: ".$_COOKIE["timeOfPreviousVisit"];
}
setcookie("timeOfPreviousVisit", date('D M d H:i:s T Y'), time() + 86400); // default time zone is CEST - is this ok?



?>




</body>
</html>