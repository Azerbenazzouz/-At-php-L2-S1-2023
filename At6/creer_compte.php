<?php 
    ob_start();
    require_once "Config/connection.php";
    
    if(isset($_POST['nom']) && isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['adresse']) && isset($_POST['mdp']) && isset($_POST['mdp2'])){
        $nom = $_POST['nom'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];
        $mdp = $_POST['mdp'];
        $mdp2 = $_POST['mdp2'];
        if($mdp == $mdp2){
            // $mdp = password_hash($mdp, PASSWORD_DEFAULT);
            // $sql = "INSERT INTO clients (nom, tel, email, adresse, mdp) VALUES ('$nom', '$tel', '$email', '$adresse', '$mdp')";
            // $result = mysqli_query($link, $sql);
            $result = true;
            if($result){
                session_start();
                $_SESSION['compteId'] = '1';
                header("Location: index.php");

            }
        }
    }
?>
<h1 class="text-center">Créer un compte</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <div class="form-group">
        <label for="nom">Nom et Prenom</label>
        <input type="text" name="nom" id="nom" class="form-control" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="tel">Numéro de téléphone</label>
        <input type="tel" name="tel" id="tel" class="form-control" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" class="form-control" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="mdp2">Confirmer le mot de passe</label>
        <input type="password" name="mdp2" id="mdp2" class="form-control" placeholder="" required>
    </div>
    <div class="form-group mt-3">
        <input type="submit" value="Envoyer" class="btn btn-primary me-3">
        <a href="#"> j'ai déjà un compte</a>
    </div>
</form>
<?php 
    $content = ob_get_clean();
    include "layout.php";
?>
