<?php 

function findSummation($number = 1) {
    
    if (!is_integer($number) || $number < 0)
        return false;

    $sum = 0;

    while ($number > 0) {
        $sum += $number--;
    }

    return $sum;
}

function uppercaseFirstandLast($str) {
    $str[0] = strtoupper($str[0]);
    $str[-1] = strtoupper($str[-1]);
    return $str;
}

// how to find median of even number length array?
// return both values within an array?
function findAverage_and_Median($arr) {
    $average = 0;
    $median;
    foreach ($arr as $value) {
        $average += $value;
    }
    $average /= count($arr);
    
    $midpoint = count($arr)/2;

    if (is_integer($midpoint))
        $median = $arr[$midpoint];
    else
        $median = ($arr[floor($midpoint)] + $arr[ceil($midpoint)])/2;
    
    return [$average, $median];
}

// do we need to worry about negative numbers?
function find4Digits($str) {
    $str = explode(" ", $str);
    foreach ($str as $value) {
        if (strlen($value) == 4) {
            return $value;
        }
    }
    return false;
}

// TESTING - currently, many issues
echo "Testing findSummation():<br>";
echo findSummation();           
echo " (testing default parameter)<br>";
echo findSummation("Hello World");
echo " (testing non-number parameter)<br>";
echo findSummation(1.5);          
echo " (testing non-integer parameter)<br>";
echo findSummation(-1);          
echo " (testing negative number parameter)<br>";
echo findSummation(5);           
echo " (passing 5)<br>";
echo findSummation(10);            
echo " (passing 10)<br>";
echo findSummation(15);           
echo " (passing 15)<br>";
echo "<br>";

echo "Testing uppercaseFirstandLast():<br>";
echo "(passing hello) ".uppercaseFirstandLast("hello")."<br>";
echo "(passing good bye) ".uppercaseFirstandLast("good bye")."<br>";
echo "<br>";

echo "Testing findAverage_and_Median() with [1, 2, 3, 4, 5]:<br>";
$sol1 = findAverage_and_Median([1, 2, 3, 4, 5]);
echo "$sol1[0]"." "."$sol1[1]";
echo "<br><br>Testing findAverage_and_Median() with [1, 2, 3, 4]:<br>";
$sol2 = findAverage_and_Median([1, 2, 3, 4]);
echo "$sol2[0]"." "."$sol1[1]";
echo "<br><br>";

echo "Testing find4Digits() using \"1 123 1234 12345\":<br>";
echo find4Digits("1 123 1234 12345");













?>