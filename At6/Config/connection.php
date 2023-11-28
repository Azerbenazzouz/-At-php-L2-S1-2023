<?php
    $dsn="mysql:host=localhost;dbname=At6;charset=utf8";
    $username="root";
    $password="";
    // $connection = new PDO($dsn,$username,$password);
    try{
        $connection = new PDO($dsn,$username,$password);
        // echo "Connexion réussie";
    }catch(Exception $e){
        echo "<b> Erreur de connexion : </b>".$e->getMessage();
    }

?>