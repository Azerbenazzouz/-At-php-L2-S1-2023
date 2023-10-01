<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise 6</title>
</head>
<body>
    <form method="post" action="ex6.php">
        <input type="number" name="num1" id="num1" value="0">
        + 
        <input type="number" name="num2" id="num2" value="0">
        <input type="submit" value="calculate">
    </form>
</body>
</html>
<?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $result = $num1 + $num2;
    echo "<h1>$num1 + $num2 = $result</h1>";
?>
