<?php
function checkMark($mark) {
    if ($mark >= 50) {
        return 'PASS';
    } else { 
        return 'FAIL';
    }
}
?>

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
    echo "Mark entered: $mark <br/> Status: ";
    $pass = checkMark($mark);
    echo $pass;
}
?></p>
</body>
</html>