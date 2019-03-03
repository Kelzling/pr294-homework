<?php
$count = 0;

function printSumAndAverage()
{
    $maxValue = $_POST['newMaxNum'];
    $sum = calcSum($maxValue);
    $average = calcAverage($sum, $maxValue);
    global $count;
    echo "Max value entered was $maxValue <br/> the sum of all numbers divisible by 7 up to and including $maxValue is $sum, the count of numbers was $count and the average is $average";
}

function calcSum($maxValue)
{
    global $count;
    $count = 0;
   
    $sum = 0;
    for ($num = 0; $num <= $maxValue; $num++) {
        if ($num % 7 == 0) {
            $sum = $sum + $num;
            $count++;
        }
    }
    
    return $sum;
}

function calcAverage($sum, $maxValue)
{
    global $count;
    
    $average = $sum / $count;
    
    return $average;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sums and Averages</title>
</head>
<body>
<form action="sumAndAverage6.php" method="POST">
<p>Press 'calculate' to see the sum of all numbers divisible by 7 up to your entered number, and the average.</p>
<label for="newMaxNum">Enter Max Number: </label>
<input type="text" name="newMaxNum" id="newMaxNum" />
<input type="submit" value="calculate" />

<p><?php

if (isset($_POST['newMaxNum'])){
    printSumAndAverage();
}
?></p>
</body>
</html>