<?php
    ob_start();
    require_once "Config/connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM produit WHERE id=$id";
        $res = $connection->query($sql);
        $produit = $res->fetch(PDO::FETCH_NUM);
        if(!$produit){
            header("location:produits.php");
        }
        // echo "<pre>";
        // print_r($produit);
        // echo "</pre>";
    }

    echo "<h1>Detail du produit :</h1>";
    echo "
        <div class='card'>
            <div class='card-header'>
                <h3>$produit[1]</h3>
            </div>
            <div class='card-body'>
                <div class='row'>
                    <div class='col-md-6 text-center'>
                        <img src='$produit[5]' class='img-fluid'>
                    </div>
                    <div class='col-md-6'>
                        <h3>$produit[1]</h3>
                        <p>Prix : $produit[2] TND</p>
                        <p>Quantite : $produit[3]</p>
                        <p>$produit[4]</p>
                        <p>Promo : ".($produit[6]== 1 ? "oui":"non")."</p>
                    </div>
                </div>
            </div>
        </div>
    ";
?>



<?php
    $content = ob_get_clean();
    include "layout.php";
?>