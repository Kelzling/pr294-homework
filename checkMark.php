<!DOCTYPE html>
<html>
<head>
	<title>Check Marks</title>
</head>
<body>
<form action="checkMark.php" method="POST">
<label for="inputMark">Enter mark: </label>
<input type="text" name="inputMark" id="inputMark" />
<input type="submit" value="check mark" />

<p><?php

$mark = 0;

if (isset($_POST['inputMark'])){
	$mark = $_POST['inputMark'];
	CheckMark($mark);
}

function CheckMark($mark) {
	echo "Mark entered: $mark <br/> Status: ";
	if ($mark >= 50) {
		echo 'PASS';
	} else { 
		echo 'FAIL';
	}
}

?></p>
</body>
</html>