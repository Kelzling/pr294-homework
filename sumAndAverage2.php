<?php
function printSumAndAverage()
{
    $maxValue = $_POST['newMaxNum'];
    $sum = calcSum($maxValue);
    $average = calcAverage($sum, $maxValue);
    echo "Max value entered was $maxValue <br/> the sum of all numbers up to and including $maxValue is $sum and the average is $average";
}

function calcSum($maxValue)
{
    $sum = 0;
    $num = 0;
    
    while ($num <= $maxValue) {
        $sum = $sum + $num;
        $num++;
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
    <title>Sums and Averages 2</title>
</head>
<body>
<form action="sumAndAverage2.php" method="POST">
<p>Press 'calculate' to see the sum of all numbers up to your entered number, and the average.</p>
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