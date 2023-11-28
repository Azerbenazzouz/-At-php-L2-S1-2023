<?php
    session_start();
    echo "Vous êtes déconnecté";
    echo isset($_SESSION['compteId']) ? "Oui":"Non";
    echo $_SESSION['compteId'] ;
    unset($_SESSION['compteId']);
    // header("Location: index.php");
?>