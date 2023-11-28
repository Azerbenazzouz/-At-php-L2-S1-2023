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
        
        $id = $_GET['id'];
        $sql = "UPDATE produit 
                SET libelle='$libelle', prix='$prix', qte='$quantite', promo='$en_promo', image='$image', description='$description' 
                WHERE id=$id";
        $res = $connection->exec($sql);
        echo $res;
        if($res){
            header("location:produits.php?etat=2");
        }else{
            header("location:produits.php?etat=3");
        }
    }
    if(!isset($_GET['id'])){
        header("location:produits.php?etat=3");
    }else{
        $id = $_GET['id'];
        $sql = "SELECT * FROM produit WHERE id=$id";
        $res = $connection->query($sql);
        
        $produit = $res->fetch(PDO::FETCH_NUM);

        echo "<h1 class='mb-5'> Modifier produit : </h1>";
        
    }
?>
<form action="<?=$_SERVER['PHP_SELF']."?id=".$id ?>" method="post" name="formProduit">
    <div class="mb-3">
        <label for="libelle" class="form-label">Libelle</label>
        <input type="text" class="form-control" id="libelle" name="libelle" value="<?php echo $produit[1]; ?>">
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">Prix</label>
        <input type="text" class="form-control" id="prix" name="prix" value="<?php echo $produit[2]; ?>">
    </div>
    <div class="mb-3">
        <label for="quantite" class="form-label">Quantite</label>
        <input type="text" class="form-control" id="quantite" name="quantite" value="<?php echo $produit[3]; ?>">
    </div>
    <div class="mb-3">
        <label for="en_promo" class="form-label">Promo</label><br>
        Oui <input type="radio" class="form-check-input" id="en_promo" name="en_promo" value="1" <?php if($produit[6]=='1') echo "checked"; ?>>
        Non <input type="radio" class="form-check-input" id="en_promo" name="en_promo" value="0" <?php if($produit[6]=='0') echo "checked"; ?>>
    </div>
    <div class="mb-3">
    <label for="image" class="form-label">Image</label>
        <input type="text" class="form-control" id="image" name="image" value="<?php echo $produit[5]; ?>">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php echo $produit[4]; ?></textarea>
    </div>
    <input type="submit" value="Modifier" class="btn btn-primary">
    <a href="produits.php" class="ms-3 btn btn-danger">Annuler</a>
</form>
<?php    
    $content = ob_get_clean();
    include "layout.php";
?>