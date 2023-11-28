<?php 
    require("session_Test.php");
    require("var_Test.php");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pgae 2</h1>
    <a href="Ex1.php">Page 1</a>
    <a href="page2.php">Page 2</a>
    <a href="page3.php">Page 3</a>
    <a href="page4.php">Page 4</a>
    <a href="deconnect.php">Se deconnecter</a>

    <?php
        echo $_SESSION['pass'];
        if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])){
            echo "<h1> Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom']." Page 2</h1>";
            echo session_id();
        }
        unset($_SESSION['nom']);
        echo "<h1> Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom']." Page 2</h1>";

        if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])){
            echo "<h1> Bienvenue ".$_SESSION['nom']." ".$_SESSION['prenom']." Page 2</h1>";
            echo session_id();
        }
    ?>
</body>
</html>