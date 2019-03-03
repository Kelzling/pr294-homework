<?php

$count = 0;

function printSumAndAverage()
{
    $minValue = $_POST['newMinNum'];
    $maxValue = $_POST['newMaxNum'];
    if ($minValue < $maxValue) {
        $sum = calcSum($minValue, $maxValue);
        $average = calcAverage($sum, $maxValue);
        global $count;
        echo "Max value entered was $maxValue <br/> the sum of all numbers up to and including $maxValue is $sum, the count of numbers was $count and the average is $average";
    } else {
        echo 'Min number must be smaller than max number!';
    }
}

function calcSum($minValue, $maxValue)
{
    global $count;
    $count = 0;
    $sum = 0;
    
    for ($num = $minValue; $num <= $maxValue; $num++) {
        $sum = $sum + $num;
        $count++;
    }
    
    return $sum;
}

function calcAverage($sum)
{
    global $count;
    $average = $sum / $count;
    
    return $average;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sums and Averages 4</title>
</head>
<body>
<form action="sumAndAverage4.php" method="POST">
<p>Press 'calculate' to see the sum of all numbers between the min and max numbers, and the average.</p>
<label for="newMinNum">Enter Min Number: </label>
<input type="text" name="newMinNum" id="newMinNum" />
<label for="newMaxNum">Enter Max Number: </label>
<input type="text" name="newMaxNum" id="newMaxNum" />
<input type="submit" value="calculate" />

<p><?php
if (isset($_POST['newMaxNum']) && isset($_POST['newMinNum'])){
    printSumAndAverage();
}
?></p>
</body>
</html>