<?php
    require_once "Config/connection.php";
    for($i = 0; $i <= 50; $i++ ){
        $libelle = "Produit $i";
        $prix = random_int(100, 3000);
        $qte = random_int(1, 100);
        $description = "Lorem ipsum dolor sit am et, consectetur adipisicing elit. Quisquam, voluptatem.";
        $image = "https://picsum.photos/300/?random=$i";
        $promo = random_int(0, 1);
        $sql = "INSERT INTO produit VALUES( null , '$libelle', $prix, $qte, '$description', '$image', $promo)";

        $res = $connection->exec($sql);
        if(!$res){
            header("location:produits.php?etat=5");
        }
    }
    header("location:produits.php?etat=4");
    
?>