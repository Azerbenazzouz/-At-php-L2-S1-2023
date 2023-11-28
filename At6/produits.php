<?php
    ob_start();
    require_once "Config/connection.php";
    $sql = "SELECT * FROM produit";
    $res = $connection->query($sql); // est un objet PDOStatement
    $LesProduits = $res->fetchAll(PDO::FETCH_NUM);
    // echo "<pre>";
    // print_r($LesProduits);
    // echo "</pre>";
    if(isset($_GET['etat'])){
        $etat = $_GET['etat'];
        switch ($etat) {
            case '0':
                "<div class='alert alert-dismissible alert-danger'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Erreur de suppression .</strong>
                </div>";
                break;
            case '1':
                echo "<div class='alert alert-dismissible alert-success'>
                        <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                        <strong>Suppression réussie .</strong>
                    </div>";
                break;
            case '2':
                echo "<div class='alert alert-dismissible alert-success'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Modification réussie .</strong>
                </div>";
                break;
            case '3':
                echo "<div class='alert alert-dismissible alert-danger'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Erreur de Modiification .</strong>
                </div>";
                break;
            case '2':
                echo "<div class='alert alert-dismissible alert-success'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Ajout réussie .</strong>
                </div>";
                break;
            case '3':
                echo "<div class='alert alert-dismissible alert-danger'>
                    <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Erreur de Ajout .</strong>
                </div>";
                break;
        }
        
    }
?>
<h1> Liste des produits </h1>
<table class="table table-striped">
    <tr class="table-primary">
        <th>Identifaint</th>
        <th>Libelle</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>En Promo</th>
        <th colspan="3">Action</th>
    </tr>
    

<?php
    foreach($LesProduits as $produit){
        echo "<tr>
                <td>$produit[0]</td>
                <td>$produit[1]</td>
                <td>$produit[2]</td>
                <td>$produit[3]</td>
                <td>";
                    echo $produit[6] == '0' ? "Non" : "Oui";
                "</td>";
        echo "<td><a href='delete_produit.php?id=$produit[0]'>Supprimer</a></td>";
        echo "<td><a href='update_produit.php?id=$produit[0]'>Modifier</a></td>";
        echo "<td><a href='detail_produit.php?id=$produit[0]'>Detail</a></td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<a href='/ajouter_produit.php' class='btn btn-success bt-sm'>Ajouter Produit</a>";
?>

<?php
    $content = ob_get_clean();
    include "layout.php";
?>