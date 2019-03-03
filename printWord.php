<?php
function printWord($number)
{
    if ($number < 10) {
        if ($number < 9) {
            if ($number < 8) {
                if ($number < 7) {
                    if ($number < 6) {
                        if ($number < 5) {
                            if ($number < 4) {
                                if ($number < 3) {
                                    if ($number < 2) {
                                        if ($number < 1) {
                                            return 'OTHER';
                                        }
                                        return 'ONE';
                                    }
                                    return 'TWO';
                                }
                                return 'THREE';
                            }
                            return 'FOUR';
                        }
                        return 'FIVE';
                    }
                    return 'SIX';
                }
                return 'SEVEN';
            }
            return 'EIGHT';
        }
        return 'NINE';
    }
    
    return 'OTHER';
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Print Words</title>
<head>
<body>
<form action="printWord.php" method="POST">
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