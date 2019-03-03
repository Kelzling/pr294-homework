<?php
function printSumAndAverage()
{
    $maxValue = $_POST['newMaxNum'];
    $sumOfSquares = calcSumOfSquares($maxValue);
    $average = calcAverage($sumOfSquares, $maxValue);
    echo "Max value entered was $maxValue <br/> the sum of the squares of all numbers up to and including $maxValue is $sumOfSquares and the average is $average";
}

function calcSumOfSquares($maxValue)
{   
    $sum = 0;
    for ($num = 0; $num <= $maxValue; $num++) {
        $square = $num * $num;
        $sum = $sum + $square;
    }
    
    return $sum;
}

function calcAverage($sum, $maxValue)
{
    $average = $sum / $maxValue;
    
    return $average;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sum of Squares, and Averages</title>
</head>
<body>
<form action="sumAndAverage7.php" method="POST">
<p>Press 'calculate' to see the sum of the squares of all numbers up to your entered number, and the average.</p>
<label for="newMaxNum">Enter Max Number: </label>
<input type="text" name="newMaxNum" id="newMaxNum" />
<input type="submit" value="calculate" />

<p><?php
if (isset($_POST['newMaxNum'])) {
    printSumAndAverage();
}
?></p>
</body>
</html>