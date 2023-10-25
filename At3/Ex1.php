<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 1</title>
    <link type='text/css' rel='stylesheet' href='./bootstrap.css'>
</head>
<body>
    <div class="container mt-5">
        <h1>Inscription á la visite  guidee</h1>
        <form action=<?=$_SERVER['PHP_SELF']?> method="post">
            <input type="text" name="nom" placeholder="Nom" class="form-control mt-3">
            <input type="text" name="prenom" placeholder="Prenom" class="form-control mt-3">
            <input type="number" name="age" placeholder="Age" class="form-control mt-3" min="1" max="140">
            <input type="email" name="email" placeholder="Email" class="form-control mt-3">
            <input type="submit" name="f1" value="inscription"  class="btn btn-primary mt-3">
            <!-- <a href=<?=$_SERVER['PHP_SELF']."?nom=".$_POST["nom"]."&".$_POST["prenom"]?> class="btn btn-danger mt-3">inscription</a> -->
            <input type="submit" name="f2" value="afficher" class="btn btn-primary mt-3" >
        </form>
        <?php
            if(isset($_POST['f1']) || isset($_POST['f2'])){
                $nom = htmlspecialchars($_POST['nom']);
                $prenom = htmlspecialchars($_POST['prenom']);
                $age = htmlspecialchars($_POST['age']);
                $email = htmlspecialchars($_POST['email']);
            }

            if(isset($_POST['f1'])){;
                echo "<script>alert('inscription avec succes : ".$prenom." ".$nom."')</script>";
            }
            if(isset($_POST['f2'])){
                echo "<table class='table table-striped table-hover mt-5'>
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Age</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>$nom</td>
                            <td>$prenom</td>
                            <td>$age</td>
                            <td>$email</td>
                        </tr>
                        </tbody>
                    </table>";
                }
            ?>
    </div>
</body>
</html>

