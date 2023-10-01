<!-- Ecrire un script php permettant de vérifier si un nombre saisi dans un formulaire est pair ou
impair. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercise 8️⃣</title>
</head>
<body>
    <form action="ex8.php">
        <input type="number" name="num" id="num" value="0">
        <input type="submit" value="check">
    </form>
</body>
</html>
<?php
    if(!isset($_GET["num"])){
        exit();
    }
    $num = $_GET["num"];
    echo "<script>let f1 = document.forms[0];
            f1.num.value = $num;
        </script>";
    $num == '' ? $num = 0 : $num = $num;
    if($num % 2 == 0){
        echo "<h1>$num is even</h1>";
    }else{
        echo "<h1>$num is odd</h1>";
    }
?>