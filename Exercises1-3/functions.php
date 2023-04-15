<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E1</title>
</head>
<body>
<?php 
// FINDSUMMATION METHOD DEFINITION
function findSummation($number = 1) {
    if (!is_integer($number) || $number < 0) {
        return false;
    }
    $sum = 0;
    while ($number > 0) {
        $sum += $number--;
    }
    return $sum;
}

// UPPERCASEFIRSTANDLAST METHOD DEFINITION
function uppercaseFirstandLast($str) {
    $str[0] = strtoupper($str[0]);
    $str[strlen($str)-1] = strtoupper(substr($str, -1));
    return $str;
}

// FINDAVERAGE_AND_MEDIAN METHOD DEFINITION
function findAverage_and_Median($arr) {
    $average = 0;
    $median;
    foreach ($arr as $value) {
        $average += $value;
    }
    $average /= count($arr);
    $midpoint = count($arr)/2;
    if (!is_integer($midpoint)) {
        $median = $arr[floor($midpoint)];
    }
    else {
        $median = ($arr[$midpoint] + $arr[$midpoint-1])/2;
    }
    return [$average, $median];
}

// FIND4DIGITS METHOD DEFINITION
function find4Digits($str) {
    $str = explode(" ", $str);
    foreach ($str as $value) {
        if (strlen($value) == 4) {
            return $value;
        }
    }
    return false;
}

// TESTING ALL METHODS
echo "<h2>Testing findSummation()</h2>";
echo "(testing default parameter): ".findSummation()."<br>";
echo "(testing non-number parameter): ".(findSummation("Hello World")? 'true' : 'false')."<br>";
echo "(testing non-integer parameter): ".(findSummation(1.5)? 'true' : 'false')."<br>";
echo "(testing negative number parameter): ".(findSummation(-1)? 'true' : 'false')."<br>";
echo "(passing 5): ".findSummation(5)."<br>";
echo "(passing 10): ".findSummation(10)."<br>";
echo "(passing 15): ".findSummation(15)."<br>";

echo "<h2>Testing uppercaseFirstandLast()</h2>";
echo "(passing \"hello\"): ".uppercaseFirstandLast("hello")."<br>";
echo "(passing \"thank you, friend\"): ".uppercaseFirstandLast("thank you, friend")."<br>";
echo "(passing \"good bye\"): ".uppercaseFirstandLast("good bye")."<br>";

echo "<h2>Testing findAverage_and_Median()</h2>";
$a = findAverage_and_Median([1]);
echo "(passing [1]): ".$a[0].", ".$a[1]."<br>";
$a = findAverage_and_Median([1, 2]);
echo "(passing [1, 2]): ".$a[0].", ".$a[1]."<br>";
$a = findAverage_and_Median([1, 2, 3, 4]);
echo "(passing [1, 2, 3, 4]): ".$a[0].", ".$a[1]."<br>";
$a = findAverage_and_Median([1, 2, 3, 4, 5]);
echo "(passing [1, 2, 3, 4, 5]): ".$a[0].", ".$a[1]."<br>";

echo "<h2>Testing find4Digits()</h2>";
echo "(passing \"\"): ".(find4Digits("")? 'true' : 'false')."<br>";
echo "(passing \"1\"): ".(find4Digits("1")? 'true' : 'false')."<br>";
echo "(passing \"1 123 1234 12345\"): ".find4Digits("1 123 1234 12345")."<br>";
?> 
</body>
</html>