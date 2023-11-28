<?php
    ob_start();
    if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message'])){
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $to = "benazzouzazer@gmail.com";
        $message = "Nom : ".$nom."\r\nEmail : ".$email."\r\nSujet : ".$sujet."\r\nMessage : ".$message;

        $headers = "From: ".$nom." <".$email.">\r\nReply-To: ".$email."\r\nContent-type: text/plain; charset=utf-8\r\n";
        mail($to, $sujet, $message, $headers);
    }
?>

<h1>Contacter nous</h1>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="sujet">Sujet :</label>
        <input type="text" name="sujet" id="sujet" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="message">Message :</label>
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Envoyer" class="btn btn-primary">
    </div>
</form>

<?php
    $content = ob_get_clean();
    include "layout.php";
?>