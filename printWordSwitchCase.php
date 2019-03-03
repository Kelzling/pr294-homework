<?php
function printWord($number) {
    $word = '';
    
    switch($number) {
        case 1:
            $word = 'ONE';
            break;
        case 2:
            $word = 'TWO';
            break;
        case 3:
            $word = 'THREE';
            break;
        case 4:
            $word = 'FOUR';
            break;
        case 5:
            $word = 'FIVE';
            break;
        case 6:
            $word = 'SIX';
            break;
        case 7:
            $word = 'SEVEN';
            break;
        case 8:
            $word = 'EIGHT';
            break;
        case 9:
            $word = 'NINE';
            break;
        default:
            $word = 'OTHER';
            break;
    }
    
    return $word;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Print Words</title>
<head>
<body>
<form action="printWordSwitchCase.php" method="POST">
<label for="inputNumber">Enter Number: </label>
<input type="text" name="inputNumber" id="inputNumber" />
<input type="submit" value="print word" />

<p><?php

$number = 0;

if (isset($_POST['inputNumber'])) {
    $number = $_POST['inputNumber'];
    echo printWord($number);
}
?></p>