<?php
    if(!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])){
        header("Location: ./Ex1.php");exit;
    }
?>