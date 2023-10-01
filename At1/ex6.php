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
    if(!isset($_POST["num1"]) || !isset($_POST["num2"])){
        exit();
    }
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    echo "<script>let f1 = document.forms[0];
            f1.num1.value = $num1; f1.num2.value = $num2;
        </script>";
    $result = $num1 + $num2;
    echo "<h1>$num1 + $num2 = $result</h1>";
?>
