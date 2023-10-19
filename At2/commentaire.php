<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type='text/css' rel='stylesheet' href='../bootstrap.css'>

    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" name="f" method="post">
        nom <input class="form-control w-25" type="text" name="nom">
        comment<textarea class="form-control w-25" name="comment" cols="30" rows="10"></textarea>
        adr <input class="form-control w-25" type="text" name="adr">
        Design<input  type="checkbox" name="c[]" value="Design" >
        liens<input  type="checkbox" name="c[]" value="liens">
        nav<input  type="checkbox" name="c[]" value="nav">
        image<input type="checkbox" name="c[]" value="image">
        <input type="submit" value="Soumettre" name="f1">
        <input type="reset" value="Effacer">
    </form>
    <?php
        if (isset($_POST['f1'])) {
            $nom = $_POST['nom'];
            $comment = $_POST['comment'];
            $adr = $_POST['adr'];
            echo $nom=="" ? "": "<h1 class='text-center text-primary'>Le resultat est : $nom</h1>";
            echo $comment==""?"":"<h1 class='text-center text-primary'>Le resultat est : $comment</h1>";
            echo $adr ==""?"":"<h1 class='text-center text-primary'>Le resultat est : $adr</h1>";    

            $c = $_POST['c'];
            
            foreach($c as $v){
                echo "<h1 class='text-center text-primary'>Le resultat est : $v</h1>";
            }
            
        }
    ?>
</body>
</html>