<!DOCTYPE html>
<html>
<head>
	<title>Sums and Averages</title>
</head>
<body>
<form action="sumAndAverage.php" method="POST">
<p>Press 'calculate' to see the sum of all numbers up to your entered number, and the average.</p>
<label for="newMaxNum">Enter Max Number: </label>
<input type="text" name="newMaxNum" id="newMaxNum" />
<input type="submit" value="calculate" />

<p><?php

if (isset($_POST['newMaxNum'])){
	PrintSumAndAverage();
}

function PrintSumAndAverage() {
	$maxValue = $_POST['newMaxNum'];
	$sum = CalcSum($maxValue);
	echo "Max value entered was $maxValue <br/> the sum of all numbers up to and including $maxValue is $sum and the average is " . CalcAverage($sum, $maxValue);
}

function CalcSum($maxValue) {
	static $sum = 0;
	for ($num = 0; $num <= $maxValue; $num++) {
		$sum = $sum + $num;
	}
	
	return $sum;
}

function CalcAverage($sum, $maxValue) {
	$average = $sum / $maxValue;
	
	return $average;
}

?></p>
</body>
</html>