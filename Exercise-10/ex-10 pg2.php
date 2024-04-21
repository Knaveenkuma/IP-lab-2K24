<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test </title>
</head>
<body>
<h1>Test Code</h1>
<form action="ex-10 pg2.php" method="post">
    <label>Enter a number:
        <input type="text" name="A">
    </label><br><br>
    
    <input type="submit" name="S1" value="GO">
    
</form>

</body>
</html>
<?php
if(isset($_POST['S1']))
{
function isArmstrong($number) {
    $numDigits = strlen((string)$number);
    $sum = 0;
    $temp = $number;

    while ($temp != 0) {
        $rem = $temp % 10;
        $sum += $rem ** $numDigits;
        $temp = (int)($temp / 10);
    }

    if ($number == $sum) {
        return true;
    } 
}

$number = $_POST['A'];
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
}
?>
