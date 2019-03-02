<!DOCTYPE html>
<html>
<head>
	<title>Check Numbers</title>
</head>
<body>
<form action="checkNumber.php" method="POST">
<label for="inputNumber">Enter a number: </label>
<input type="text" name="inputNumber" id="inputNumber" />
<input type="submit" value="check number" />

<p><?php

$number = 0;

if (isset($_POST['inputNumber'])) {
	$number = $_POST['inputNumber'];
	echo "$number = " . CheckNumber($number);
}

function CheckNumber($number) {
	if ($number % 2 == 1) {
		return 'Odd Number';
	} else {
		return 'Even Number';
	}
}
?></p>
	
</body>
</html>