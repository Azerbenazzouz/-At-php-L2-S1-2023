<?php
    // ob_start();
    require_once "Config/connection.php";

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM produit WHERE id=$id";
        $res = $connection->exec($sql);
        if($res){
            header("location:produits.php?etat=1");
        }else{
            header("location:produits.php?etat=0");
        }
    }
    $content = ob_get_clean();
    include "layout.php";
?>