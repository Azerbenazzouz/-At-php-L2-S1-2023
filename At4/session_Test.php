<?php 
    session_start(); 
    if(!isset($_SESSION['log']) || $_SESSION['log'] != "admin" ){
        header("Location: ./login.php?etat=2");exit;
    }
?>