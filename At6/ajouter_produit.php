<?php
    require_once "Config/connection.php";
    ob_start();

    if (isset($_POST['libelle']) && isset($_POST['prix']) && isset($_POST['quantite']) && isset($_POST['en_promo']) && isset($_POST['image']) && isset($_POST['description'])) {
        
        $libelle = $_POST['libelle'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        $en_promo = $_POST['en_promo'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        // echo "<script>alert('$en_promo')</script>";
        // $sql = "INSERT INTO produit(libelle,prix,qte,description,image,promo) VALUES('$libelle',$prix,$quantite,'$description','$image',$en_promo)";
        // $res = $connection->execute($sql);

        $sql = "INSERT INTO produit(libelle, prix, qte, description, image, promo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(1, $libelle);
        $stmt->bindParam(2, $prix);
        $stmt->bindParam(3, $quantite);
        $stmt->bindParam(4, $description);
        $stmt->bindParam(5, $image);
        $stmt->bindParam(6, $en_promo);
    
        // Execute the statement
        $res = $stmt->execute();
        if($res){
            header("location:produits.php?etat=4");
        }else{
            header("location:produits.php?etat=5");
        }
    }
    // if(!isset($_GET['id'])){
    //     header("location:produits.php?etat=3");
    // }else{
    //     $id = $_GET['id'];
    //     $sql = "SELECT * FROM produit WHERE id=$id";
    //     $res = $connection->query($sql);
        
    //     $produit = $res->fetch(PDO::FETCH_NUM);

    //     echo "<h1 class='mb-5'> Modifier produit : </h1>";
        
    // }
?>
<h1 class='mb-5 text-center'> Ajouter produit : </h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" name="formProduit">
    <div class="mb-3">
        <label for="libelle" class="form-label">Libelle</label>
        <input type="text" class="form-control" id="libelle" name="libelle" value="" required>
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">Prix</label>
        <input type="text" class="form-control" id="prix" name="prix" value="" required>
    </div>
    <div class="mb-3">
        <label for="quantite" class="form-label">Quantite</label>
        <input type="text" class="form-control" id="quantite" name="quantite" value="" required>
    </div>
    <div class="mb-3">
        <label for="en_promo" class="form-label">Promo</label><br>
        Oui <input type="radio" class="form-check-input" id="en_promo" name="en_promo" value="1" required >
        Non <input type="radio" class="form-check-input" id="en_promo" name="en_promo" value="0" required >
    </div>
    <div class="mb-3">
    <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image" value="" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <input type="submit" value="Ajouter" class="btn btn-primary">
    <a href="produits.php" class="ms-3 btn btn-danger">Annuler</a>
</form>
<?php    
    $content = ob_get_clean();
    include "layout.php";
?>