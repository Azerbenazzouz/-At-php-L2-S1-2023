<?php 
    require("session_Test.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Ex1.php">Page 1</a>
    <a href="page2.php">Page 2</a>
    <a href="page3.php">Page 3</a>
    <a href="page4.php">Page 4</a>
    <a href="deconnect.php">Se deconnecter</a>
    Heloowww

    <?php
        $_SESSION['nom']="Azer";
        $_SESSION['prenom']="Ben Azzouz";
    ?>
</body>
</html>