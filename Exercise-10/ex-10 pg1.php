<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test </title>
</head>
<body>
<h1>Test Code</h1>
<form action="ex-10 pg1.php" method="post">
    <label>Enter A:
        <input type="text" name="A">
    </label><br><br>
    <label>Enter B:
        <input type="text" name="B">
    </label><br><br>
    <label>Enter C:
        <input type="text" name="C">
    </label><br><br>
    <input type="submit" name="S1" value="GO">
    
</form>

</body>
</html>
<?php
if(isset($_POST["S1"]))
{
    $a=null;
    $b=null;
    $c=null;
    if(empty($_POST['A']) || empty($_POST['B']) || empty($_POST['C']) )
    {
        echo "Kindly enter the value of all correctly<br>";
    }
    
    elseif(isset($_POST['A']) && isset($_POST['B']) && isset($_POST['C'] ))
    {
        $a=$_POST['A'];
        $b=$_POST['B'];
        $c=$_POST['C'];
        if($a>$b && $a>$c)
        {
            echo"<h1> The largest of all is {$a}</h1>";
        }
        elseif($b>$c)
        {
            echo"<h1> The largest of all is {$b}</h1>";
        }
        else
        {
            echo"<h1> The largest of all is {$c}</h1>";
        }
    }
    
}
?>